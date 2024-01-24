@include('Dashboard.dashboardHeader')
<section class="main">


  <div class="panel panel-default">
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Farmer View<a href="{{route('Admin.FarmerUserIndex')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
        <div class="col-lg-2"><div class="card">
           <img class="viewAdminImg" src="{{ asset('images/FarmerImage/' . $showFarmer[0]->image) }}" alt="">

        </div>
    </div>
        <div class="col-lg-10" style="padding: 14px;">
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$showFarmer[0]->name}}" disabled>
                </div> 
        </div> 
             

        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$showFarmer[0]->mob}}" disabled>
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$showFarmer[0]->email}}" disabled>
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$showFarmer[0]->state_name}}" disabled>
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$showFarmer[0]->district_name}}" disabled>
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$showFarmer[0]->pin}}" disabled>
                </div> 
        </div>
              </div>
        </div>
    </div>
  </div>

</section>
