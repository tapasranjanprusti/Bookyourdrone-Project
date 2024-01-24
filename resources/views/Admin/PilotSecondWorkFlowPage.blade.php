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
    <form action="{{route('Admin.storePilotSecondFlow')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            @if($createWokCheckSnd[0]->reachFarmerLocation != 'NA')
            
<div class="col-lg-6">
<label>Farmer Location</label>
<input type="text" class="form-control " id="farmerLocation" name="farmerLocation" style="color:black" value="{{$createWokCheckSnd[0]->reachFarmerLocation}}" readonly>
</div> 

<div class="col-lg-6">
<label>Distance</label>
<input type="text" name="starttime" class="form-control" value="distance" readonly>
   
</div> 
<a href="{{route('Admin.PilotThirdWorkFlow', ['id' => $createWokCheckSnd[0]->orderId])}}" class="btn sumbtn">NEXT</a>

@else


<input type="hidden" name="secondOrderid" value="{{$orderId}}">
<div class="col-lg-6">
<label>Farmer Location</label>
<input type="text" class="form-control " id="farmerLocation" name="farmerLocation" style="color:black" required>
<button type="button"  class="locationbtn" onclick="getFarmerCurrentLocation()">click</button>
</div> 

<div class="col-lg-6">
<label>Distance</label>
<input type="text" name="walkDistance" class="form-control">
   
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


