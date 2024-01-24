@include('Dashboard.dashboardHeader')
<style>
  .sumbtn{
    background-color: green;
    color: white;
    float: right;
    margin-top: 29px;
    margin-right: 10px;
  }
  .dronetetailscard{
    margin-bottom: 27px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

  }
  .formSpanStyle{
    margin-top: 16px;
    padding-left: 0px;
    margin-bottom: 10px;
  }
</style>
<section class="main">


  <div class="panel panel-default">
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Add Drone<a href="{{route('Admin.droneIndexPage')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.store_drone')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12 dronetetailscard" >
            <div class="col-lg-12 formSpanStyle">
            <span style="color:red; font-size: 16px;">Drone Details</span>
            </div>
            <div class="row">
    <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Model:</label>
                    <input type="text" class="form-control" value="" name="dronemdl">
                </div> 
        </div> 
             
        <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Spraying tank:</label>
                    <input type="text" class="form-control" value="" name="sptank">
                </div> 
        </div> 
             

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Endurance(Mins):</label>
                    <input type="text" class="form-control" value="" name="endurance" >
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Flight range(Kms)</label>
                    <input type="text" class="form-control" value="" name="flightrange">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Height Range(m)</label>
                    <input type="text" class="form-control" value="" name="heightrange">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Price(₹)</label>
                    <input type="text" class="form-control" value="" name="dronePrice">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">District</label>
                    <select class="form-control" name="drndist">
                        <option value="">Select District</option>
                        @foreach($all_district as $dist)
                        <option value="{{$dist->id}}">{{$dist->district_name}}</option>

                        @endforeach
                    </select>
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Image</label>
                    <input type="file" class="form-control" value="" name="droneImg">
       
                </div> 
        </div>
            </div>
            </div>


            <div class="col-lg-12 dronetetailscard">
            <div class="col-lg-12 formSpanStyle">
                <span style="color:red;">Stocks</span>
            </div>
            <div class="row">



        <!-- stock data -->

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Propeller(Clock Wise) Qnty:</label>
                    <input type="text" class="form-control" value="" name="propellerclock">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Propeller(Anti Clock Wise) Qnty:</label>
                    <input type="text" class="form-control" value="" name="propellerAnti">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Arms</label>
                    <input type="text" class="form-control" value="" name="armsQnt">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Motor</label>
                    <input type="text" class="form-control" value="" name="motorQnt">
                </div> 
        </div>




        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Landing Gear</label>
                    <input type="text" class="form-control" value="" name="lGearQnt">
                </div> 
        </div>



        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Nozzle</label>
                    <input type="text" class="form-control" value="" name="nozzleQnt">
                </div> 
        </div>

        
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Nut Bold</label>
                    <input type="text" class="form-control" value="" name="nutBoldQnt">
                </div> 
        </div>

        
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Bable Bare</label>
                    <input type="text" class="form-control" value="" name="bableQnt">
                </div> 
        </div>

        
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Ln Key</label>
                    <input type="text" class="form-control" value="" name="lnQnt">
                </div> 
        </div>

        
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Water Pump</label>
                    <input type="text" class="form-control" value="" name="waterpumpQnt">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Pipe Qnty(6 mm)</label>
                    <input type="text" class="form-control" value="" name="pipeoneQnt">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Pipe Qnty(8 mm)</label>
                    <input type="text" class="form-control" value="" name="pipetwoQnt">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Pipe Qnty(10 mm)</label>
                    <input type="text" class="form-control" value="" name="pipeThreeQnt">
                </div> 
        </div>

        </div>
    </div>
    <div class="col-lg-12 dronetetailscard">
            <div class="col-lg-12 formSpanStyle">
                <span style="color:red;">Acessesory</span>
            </div>
            <div class="row">



        <!-- stock data -->

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Charger:</label>
                    <input type="text" class="form-control" value="" name="chargerQnt">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Charger Cable:</label>
                    <input type="text" class="form-control" value="" name="chCableQnt">
                </div> 
        </div>
        
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Charger Power Cable:</label>
                    <input type="text" class="form-control" value="" name="ch_Power_Cableqnt">
                </div> 
        </div>
        
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Extaintion Board:</label>
                    <input type="text" class="form-control" value="" name="exBoard">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Bettary:</label>
                    <input type="text" class="form-control" value="" name="bettaryQnt">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Transmeter and Reciver:</label>
                    <input type="text" class="form-control" value="" name="transmeterQnt">
                </div> 
        </div>
            </div>

    </div>
    



        <!-- stock data end -->
        
                <input type="submit" value="Submit" class="btn sumbtn">
           

   

</form>
  
        </div>
    </div>
  </div>

</section>
