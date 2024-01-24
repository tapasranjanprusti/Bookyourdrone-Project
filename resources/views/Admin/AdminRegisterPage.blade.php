<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="{{ asset('assets/css/loginForm.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .password-mismatch {
        border-color: red;
    }

   
  
</style>
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
      @if($success = \Session::get('success'))
            <div class="alert alert-denger successsession">{{$success}}</div>

            @endif
        <div class="container-fluid">
          <div class="row">
            <h2>Admin Registration</h2>
          </div>
          <div class="row">
          <form action="{{route('Admin.Add_admin')}}" method="post" enctype="multipart/form-data">
                    @csrf
              <div class="row">
                <div class="form-group">
                 
                    <input type="text" class="form-control" id="adname" placeholder="Enter Name" name="adname">
                </div>  
              </div>
              <div class="row">
               
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="admob" placeholder="Enter Mob Number" name="admob">
                </div>               
             </div>
              <div class="row">
              <div class="form-group">
                   
                    <input type="email" class="form-control" id="ademail" placeholder="Enter email" name="ademail">
                </div>  
              </div>
              <div class="row">
              <div class="form-group">
              <select name="adstateNm" id="stateNm" class="form-control">
              <option value="">Select State</option>
              @foreach ($all_state as $state)
                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
            @endforeach
   
               </select>
                </div>  
              </div>
              <div class="row">
              <div class="form-group">
              <select name="addistrictVal" id="districtVal" class="form-control">
              <option value="">Select district</option>
          
   
               </select>
                </div> 

          
            
              </div>
              <div class="row">
                <div class="form-group">
                 
                    <input type="text" class="form-control" id="pinCode" placeholder="Enter Pin" name="adpinCode">
                </div>  
              </div>
          
              <div class="row">
    <div class="form-group">
       
        <input type="file" class="form-control" id="adimage" name="adimage">
    </div>
</div>



              <div class="row">
    <div class="form-group">
        <input type="password" class="form-control toggle-password" id="fpassword" placeholder="Enter Password" name="adpassword">
        <div class="input-group-append eyeset">
            <span class="input-group-text">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </span>
        </div>
    </div>  
</div>
<div class="row">
    <div class="form-group">
        <input type="password" class="form-control toggle-password" id="fcpassword" placeholder="Enter Confirm Password" name="adcpassword">
        <div class="input-group-append eyeset">
            <span class="input-group-text">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </span>
        </div>
    </div>  
</div>
              
    
              <div class="row">
                <input type="submit" value="Submit" class="btn">
              </div>
            </form>



            
          </div>
          
          <div class="row">
            <p>Have an account? <a href="{{route('AdminLogin')}}">Log In</a></p>
          </div>
        </div>


      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      
        $('#stateNm').change(function() {
            var stateId = $(this).val();
            // alert(stateId);
            if (stateId) {
               
                $.ajax({
                    url: '/getDistricts/' + stateId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        var options = '<option value="">Select District</option>';
                        data.forEach(function(district) {
                            options += '<option value="' + district.id + '">' + district.district_name + '</option>';
                        });
                        $('#districtVal').html(options);
                    }
                });
            } else {
              
                $('#district').html('<option value="">Select District</option>');
            }
        });

        function checkPasswords() {
            var fpassword = $('#fpassword').val();
            var fcpassword = $('#fcpassword').val();

            if (fpassword !== fcpassword) {
                $('#fpassword, #fcpassword').addClass('password-mismatch');
            } else {
                $('#fpassword, #fcpassword').removeClass('password-mismatch');
            }
        }

        // Call the checkPasswords function on page load and on input change
        checkPasswords();
        $('#fpassword, #fcpassword').on('input', checkPasswords);
        $('.toggle-password').click(function() {
        var passwordInput = $(this);
        var passwordIcon = passwordInput.closest('.form-group').find('.input-group-text i');

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordInput.attr('type', 'password');
            passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

    });




</script>




</body>
</html>

