<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

use App\Shops;
use App\Address;

use Response;
use DB;

class ShopController extends Controller
{
    
    public $shopData=array();
    public function getShops(Request $data,$id = null)
    {
        if($id == null){
          $value = Shops::with('images','address','category');
              if(Input::get('areas')){
                $value = $value->whereIn('address_id', function($query)
                {
                    $query->select(('id'))
                    ->from('address')
                    ->whereIn('area', explode(',',Input::get('areas')));
                    });
                }    
               if(Input::get('categories')){ 
                $value = $value->WhereIn('id',function ($query) 
                {
                    $query->select(('shop_id'))
                    ->from('shop_category')
                    ->where('category_id', '=', explode(',',Input::get('categories')));
                    });
                }
                if(Input::get('name')){ 
                    $value = $value->Where('name', 'LIKE', '%' . Input::get('name') .'%'); 
                }
                if(Input::get('sortBy') == 'popularity'){ 
                    $value= $value->orderByRaw("FIELD(popularity_level , 'High', 'Medium', 'Low') DESC")->get();
                }else if(Input::get('sortBy') == 'ratings'){
                    $value= $value->orderBy('ratings','DESC')->get();
                }else if(Input::get('sortBy') == 'recent'){
                    $value= $value->orderBy("created_at","DESC")->get();
                }else{
                    $value= $value->orderBy("name","ASC")->get();
                }
       }else{
            $value = Shops::with('images','address','category')->where('id',$id)->first();
        }
        return response()->json($value);
    }





    public function postShops(Request $request)
    {   DB::beginTransaction();
        try{
            log:info($request->get("id"));
            if($request->get("id") != null){
                $this->shopData['name']=$request->get("name");
                $this->shopData['description']=$request->get("description");
                $this->shopData['banner_image']=$this->getImageUrl($request->get("banner_image"),'banner', $request->get("name").$request->get("address_id"));
                $this->shopData['address_id']=$request->get("address_id");
                Address::saveAddress($request->get("address"),$request->get("address_id"));
                DB::table('shops')->where('id',  $request->get("id"))->update($this->shopData);
                $this->addCategory($request->get("id"),$request);
                $this->addImages($request->get("id"),$request);
            }else{
                $this->shopData['name']=$request->get("name");
                $this->shopData['description']=$request->get("description");
                $this->shopData['address_id']=Address::saveAddress($request->get("address"));
                $this->shopData['banner_image']=$this->getImageUrl($request->get("banner_image"),'banner', $this->shopData['name'].$this->shopData['address_id']);
                $shop_id=Shops::create($this->shopData)->id;
                $this->addCategory($shop_id,$request);
                $this->addImages($shop_id,$request);
            }            
        }catch(ValidationException $e){
            DB::rollback();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    


    public function addCategory($shop_id,$request){
        $category=$request->get("category");
        log::info($category);
        if($request->get("id")){
            DB::table('shop_category')->where('shop_id', '=', $request->get("id"))->delete();
         }
         $array = array();
        for ($x = 0; $x < sizeof($category); $x++)
        {
            array_push($array,array('shop_id' =>$shop_id,'category_id' => $category[$x]));
        }
        DB::table('shop_category')->insert($array);
    }

    public function addImages($shop_id,$request){
        if($request->get("id")){
            DB::table('shop_images')->where('shop_id', '=', $request->get("id"))->delete();
         }
        $array = array();
        for ($x = 0; $x < sizeof($request->get("images")); $x++)
        {
            
            array_push($array,array('shop_id' =>$shop_id,'image_url' => $this->getImageUrl($request->get("images")[$x],'shop_images',$this->shopData['name'].$this->shopData['address_id'].'_'.$x)));
        }
        DB::table('shop_images')->insert($array);
    }


    public function getImageUrl($base64,$folder,$name){
        if (strpos($base64,"base64") !== false) {
            $base64data = $base64;
            $filename = str_random(60);
            $uri = substr($base64data, strpos($base64data, ",") + 1);
            $url = public_path() . '/images/fm/'.$folder.'/';
            if (!File::exists($url)) {
                File::makeDirectory($url, $mode = 0777, true, true);
            }
            File::put($url . $name . '.jpg', base64_decode($uri));
            return 'http://localhost/images/fm/'.$folder.'/' . $name . '.jpg';
        }else{
             return $base64; 
        }
    }

}
