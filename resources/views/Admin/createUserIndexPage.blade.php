@include('Dashboard.dashboardHeader')
<style>
  .sumbtn{
    background-color: green;
    color: white;
    float: right;
    margin-top: 29px;
    margin-right: 10px;
  }
</style>
<section class="main">


  <div class="panel panel-default">
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Create User</div>
    <div class="panel-body">
    <form action="{{route('Admin.store_createUser')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">
    <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Name:</label>
                    <input type="text" class="form-control" value="" name="cuname">
                </div> 
    </div> 
             
      
             

        <div class="col-lg-6">
                <div class="form-group"><label style="color:black">Mobile:</label>
                    <input type="text" class="form-control" value="" name="cumob" >
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Email</label>
                    <input type="email" class="form-control" value="" name="cuemail">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">State:</label>
                <select class="form-control" name="stateNm" id="stateNm">
                    <option value="">Please Select State</option>
                    @foreach($allState as $state)
                    <option value="{{$state->id}}">{{$state->state_name}}</option>
                    @endforeach
      
       
                   </select>
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">District:</label>
                <select class="form-control" name="districtNm" id="districtNm">
                    <option value="">Please Select District</option>
             
      
       
                   </select>
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Pin:</label>
                    <input type="text" class="form-control" value="" name="pincode">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Image:</label>
                    <input type="file" class="form-control" value="" name="cuimg">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Role:</label>
                   <select class="form-control" name="curole">
                    <option value="">Please Select Role</option>
                    <option value="2">Admin</option>
                    <option value="4">Supervisor</option>
                    <option value="5">Pilot</option>
                    <option value="6">Co-Pilot</option>
       
                   </select>
                </div> 
        </div>



        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Password:</label>
                    <input type="text" class="form-control" value="" name="cupassword">
       
                </div> 
        </div>
        
                <input type="submit" value="Submit" class="btn sumbtn">
           

    </div>

</form>
  
        </div>
    </div>
  </div>

</section>

<script>
        $("#stateNm").change(function(){
  var stateId=$("#stateNm").val();

  if (stateId) {
                $.ajax({
                    url: '{{ route('Admin.getDistrictAdminUser') }}',
                    type: 'GET',
                    data: { stateId: stateId},
              
               
                success: function(data) {
                        console.log(data);
                        var districtNm = $('#districtNm');
                        districtNm.empty();
                        districtNm.append('<option value="">Please Select District</option>');

                        $.each(data, function(index, district) {
                                districtNm.append('<option value="' + district.id + '">' + district.district_name + '</option>');
                        });
                    }
                });
            } else {
                $('#districtNm').empty();
                $('#districtNm').append('<option value="">Please Select District</option>');
            }
});
</script>
