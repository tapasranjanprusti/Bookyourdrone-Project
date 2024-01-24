<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="{{ asset('assets/css/loginForm.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row main-content bg-success text-center">
      <div class="col-md-4 text-center company__info">
        <span class="company__logo">
        <h2><img class="droneimg" src="{{ asset('images/drone1.png') }}" alt="Custom Image"></h2>

        </span>
        <h4 class="company_title">Book Your Drone</h4>
      </div>
      <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
      @if($error = \Session::get('error'))
            <div class="alert alert-denger ersession">{{$error}}</div>

            @endif
        <div class="container-fluid">
          <div class="row">
        
            <h2>Farmer Log In</h2>
          </div>
          <div class="row">
          <form action="{{route('farmer.login')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row">
                <input type="text" name="username" id="username" class="form__input" placeholder="Username/Mob Number">
                @error('username') <font class="errorMsg">{{$message}}</font>@enderror
              </div>
              <div class="row">
                <!-- <span class="fa fa-lock"></span> -->
                <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                @error('password') <font class="errorMsg">{{$message}}</font>@enderror
              </div>
              <div class="row">
                <input type="checkbox" name="remember_me" id="remember_me" class="">
                <label for="remember_me">Remember Me!</label>
              </div>
              <div class="row">
                <input type="submit" value="Submit" class="btn">
              </div>
            </form>
          </div>
          <div class="row">
            <!-- <p>Don't have an account? <a href="{{ url('farmerRegister') }}">Register Here</a></p> -->
            <p>Don't have an account?<li class="dropdown" style="list-style: none;"> <a href="#" class="dropdown-toggle" 
            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register Here
            <span class="caret"></span></a>
          <ul class="dropdown-menu" style="margin-left: 119px;text-align: center;">
            <li><a href="{{ url('farmerRegister',['pssval'=>'Farmer']) }}">Farmer</a></li>
            <li><a href="{{ url('farmerRegister',['pssval'=>'Govt']) }}">Govt</a></li>
            <li><a href="{{ url('farmerRegister',['pssval'=>'Company']) }}">Company</a></li>
       
          </ul>
        </li></p>
      
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>
