<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catelog', function (Blueprint $table) {
        	//$table->timestamp('created_at');
        	//$table->timestamp('updated_at');
            $table->unsignedBigInteger('sub_category_id');
        });
        Schema::table('catelog', function (Blueprint $table) {
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
