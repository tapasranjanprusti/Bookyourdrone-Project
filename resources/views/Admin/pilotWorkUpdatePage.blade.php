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
    <form action="{{route('Admin.pilotStart')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">
      <input type="hidden" name="ordId" value="{{$orderId}}">
    <div class="col-lg-4">
                <div class="form-group">
                    <label style="color:black">Drone Location:</label>
                    <Select class="form-control" name="droneLocation" id="droneLocation">
                        <option value="">Select Drone Location</option>
                        <option value="1">At Office</option>
                        <option value="2">At Farmer</option>


                    </Select>
                </div> 
        </div> 
    
             
        </div>

        <div class="row atoffice">

        @if(!empty($createWokCheck[0]->date) && $createWokCheck[0]->droneLocation == '1')
    <div class="col-lg-6">
      <label>Start Time</label>
      <input type="text"  class="form-control" value="{{$createWokCheck[0]->startTime}}">
           
        </div> 
        <div class="col-lg-6">
      <label>Current Location</label>
      <input type="text" class="form-control "  style="color:black" value="{{ isset($createWokCheck[0]->pilotStartLocation) ? $createWokCheck[0]->pilotStartLocation : '' }}" required>

           
        </div> 

        <a href="{{route('Admin.PilotSecondWorkFlow', ['id' => $createWokCheck[0]->orderId])}}" class="btn sumbtn">NEXT</a>
        <!-- <input type="submit" value="Next" class="btn sumbtn"> -->
       @else
       <div class="col-lg-6">
      <label>Start Time</label>
      <input type="time" name="starttime" class="form-control">
           
        </div> 
        <div class="col-lg-6">
      <label>Current Location</label>
      <input type="text" class="form-control " id="pilotStart_location" name="pilotStart_location" style="color:black" value="{{ $createWokCheck[0]->pilotStartLocation ?? '' }}" required>
      <button type="button"  class="locationbtn" onclick="getCurrentLocation()">click</button>
           
        </div> 
        <input type="submit" value="Submit" class="btn sumbtn">

       @endif
             
        </div>
     
  </form>


  <form action="{{route('Admin.storefromFarmerLocation')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row atfarmer">
              @if(!empty($createWokCheckthd[0]))
            @if($createWokCheckthd[0]->sparingTime != 'NA' && $createWokCheckthd[0]->droneLocation == '2')

          

            <div class="col-lg-6">
      <label>Sparing Time</label>
      <input type="text" name="sparingTime" class="form-control" value="{{ $createWokCheckthd[0]->sparingTime ?? '' }}" readonly>
      </div>
      <a href="{{route('Admin.PilotForthWorkFlow', ['id' => $createWokCheckthd[0]->orderId])}}" class="btn sumbtn">NEXT</a>

      
      @endif
            @else
            <input type="hidden" name="dronelocationVal" class="form-control" value="2" >
              <input type="hidden" name="farmersideOderId" value="{{$orderId}}">
        <div class="col-lg-6">
      <label>Sparing Time</label>
      <input type="time" name="sparingTime" class="form-control">
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
  $( document ).ready(function() {
   $('.atfarmer').hide();
   $('.atoffice').hide();

  $('#droneLocation').change(function() {
        // Hide all divs
        $('.atoffice, .atfarmer').hide();

        // Show the selected div based on the value
        if ($(this).val() === '1') {
            $('.atoffice').show();
        } else if ($(this).val() === '2') {
            $('.atfarmer').show();
        }
    });
 
});
</script>
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


