@include('Dashboard.dashboardHeader')
<style>
  .sumbtn{
    background-color: green;
    color: white;
    float: right;
    margin-top: 29px;
    margin-right: 10px;
  }
  label{
    color:black;
  }
  button{
    color:black;
  }
  .locationbtn{
    float: right;
    padding: 3px;
    background-color: green;
    color: white;
  }
</style>
<section class="main">


  <div class="panel panel-default">
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Updated Work<a href="{{route('Admin.landIndexPage')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.storePilotForthFlow')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">

            @if($createWokCheckfrth[0]->completeTime != 'NA')

            <div class="col-lg-6">
   <label>Completed Time</label>
   <input type="text"  class="form-control" value="{{ $createWokCheckfrth[0]->completeTime ?? '' }}">
   </div>
     
     <div class="col-lg-6">
   <label>No Of Working Day</label>
   <input type="text"  class="form-control" value="{{ $createWokCheckfrth[0]->day ?? '' }}">
   </div> 

   <div class="col-lg-6">
   <label>Acear Completed</label>
   <input type="text"  class="form-control" value="{{ $createWokCheckfrth[0]->AcearCompleted ?? '' }}">
   </div> 

  

   <div class="col-lg-6">
   <label style="color:black">Rest Of Work:</label>
  <input type="text" class="form-control" value="{{ $createWokCheckfrth[0]->restOfWork ?? '' }}">
   </div>

            @else


            
            <input type="hidden" name="forthOrderID" value="{{$orderId}}">
            <div class="col-lg-6">
   <label>Completed Time</label>
   <input type="time" name="completedTime" class="form-control">
   </div>
     
     <div class="col-lg-6">
   <label>No Of Working Day</label>
   <input type="text" name="noOfWorkingDay" class="form-control">
   </div> 

   <div class="col-lg-6">
   <label>Acear Completed</label>
   <input type="text" name="acearCompleted" class="form-control">
   </div> 

  

   <div class="col-lg-6">
   <label style="color:black">Rest Of Work:</label>
                 <Select class="form-control" name="workStatus">
                     <option value="">Select Work Status</option>
                     <option value="1">None</option>
                     <option value="2">Next Day</option>


      </Select>
   </div>
   <input type="submit" value="Submit" class="btn sumbtn">

   @endif
  </div> 
    
     
  </form>
  
        </div>
    </div>
  </div>

</section>

<!-- Add this script to your HTML file -->


<!-- Add this script to your HTML file -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function getCurrentLocation() {
  // alert('hii')
    if (navigator.geolocation) {
      // alert('in if')
      
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    // alert(latitude)
    // alert(longitude)
    const locationInput = $('#pilotStart_location');
    locationInput.val(`Latitude: ${latitude}, Longitude: ${longitude}`);
}

function getFarmerCurrentLocation() {
  // alert('hii')
    if (navigator.geolocation) {
      // alert('in if')
      
        navigator.geolocation.getCurrentPosition(showPositionFarmer);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}


function showPositionFarmer(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    // alert(latitude)
    // alert(longitude)
    const locationInput = $('#farmerLocation');
    locationInput.val(`Latitude: ${latitude}, Longitude: ${longitude}`);
}
</script>


