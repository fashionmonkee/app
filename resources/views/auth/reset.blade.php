<!-- resources/views/auth/reset.blade.php -->
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
 <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">           
            <a href="" class="navbar-brand"><strong>Fashion Monkee</strong></a>
        </div>
    </nav>
</div>
</body>
</html>                                     
<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    @if (count($errors) > 0)
        <ul style="list-style-type:none">
            @foreach ($errors->all() as $error)



                
                <div class="container">
                <div class="row">
                <div class="col-sm-12 text-center">
                <li>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> {{ $error }}
                </div>
                </li>
                </div>
                </div>
                </div>
            @endforeach
        </ul>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Change Password</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input style="margin-bottom: 12px;" type="email" class="input-lg form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <input style="margin-bottom: 12px;" type="password" class="input-lg form-control" name="password" id="password" placeholder="New Password" autocomplete="off">
                <input style="margin-bottom: 12px;" type="password" class="input-lg form-control" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" autocomplete="off">
                <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
            </div><!--/col-sm-6-->
        </div><!--/row-->
    </div>
</form>