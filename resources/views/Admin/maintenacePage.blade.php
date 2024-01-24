@include('Dashboard.dashboardHeader')


<section class="main">


  <div class="panel panel-default">
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Drone Stock<a href="{{route('Admin.FarmerUserIndex')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.updateDroneStock')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="col-lg-12" style="padding: 14px;">
        <h3 style="color: #45779b;text-align: center;margin-bottom: 24px;">{{$droneStockDetails[0]->model_name}}</h3>

        <input type="hidden" class="form-control" value="{{$droneStockDetails[0]->droneid}}" name="updronrId">
        <input type="hidden" class="form-control" value="{{$droneStockDetails[0]->pilotId}}" name="upuserId">

        <div class="row">


        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Propeller Clock Wise:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->propellerClockWise}}" name="uppropclock">
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                 
                <lebel style="color:black;font-weight: bold;">Propeller Anti Clock Wise:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->propellerAntiClockWise}}" name="uppropanti">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Arms:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->armsQnt}}" name="uparms">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Motors:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->motorQnt}}" name="upmotors">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Landing Gear:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->landingGearQnt}}" name="uplndgear">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">NozzleQnt:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->nozzleQnt}}" name="upnozzle">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">NutBold:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->nutBoldQnt}}" name="upnutbold">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">BableQnt:</lebel>
                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->bableQnt}}" name="upbable">
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Ln Key:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->lnKey}}" name="uplnkey">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">waterPump:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->waterPump}}" name="upwaterpump">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">pipe(6mm):</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->pipe6_mm}}" name="uppipesix">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">pipe(8mm):</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->pipe8_mm}}" name="uppipeeight">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">pipe(10mm):</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->pipe10_mm}}" name="uppipeten">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Charger:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->chargerQnt}}" name="upcharger">
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Charger Power Cable:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->chargerPowerCable}}" name="upchargerpowercable">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Extation Board:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->extationBoard}}" name="upextationbord">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Bettary:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->bettaryQnt}}" name="upbettary">
                </div> 
        </div>


        <div class="col-lg-6">
                <div class="form-group">
                <lebel style="color:black;font-weight: bold;">Transmeater:</lebel>

                    <input type="text" class="form-control" value="{{$droneStockDetails[0]->transmeaterQnt}}" name="uptransmeater">
                </div> 
        </div>
              </div>
        </div>

        <input type="submit" value="Stock Update" style="float: right;padding: 7px;background-color: green;">

        </form>
    </div>
  </div>

</section>
