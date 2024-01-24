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
    background-color: #33363a;">New Order Assign<a href="{{route('Admin.cropIndexPage')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.store_assignOrder')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">
    <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">OrderID:</label>
                    <select class="form-control" name="assignOrderID">
                      <option value="">Plz enter OrderID</option>
                      @foreach($all_order as $ord)
                      <option value="{{$ord->orderId}}">{{$ord->orderId}}</option>
                      @endforeach

                    </select>
                </div> 
        </div> 
             



        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Pilot</label>
                <select class="form-control" name="assignPilot">
                      <option value="">Plz Select Pilot</option>
                      @foreach($all_pilot as $pilot)
                      <option value="{{$pilot->id}}">{{$pilot->name}}</option>
                      @endforeach

                    </select>
       
                </div> 
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">CoPilot</label>
                <select class="form-control" name="assignCopilot">
                      <option value="">Plz Select CoPilot</option>
                      @foreach($coPilot as $cpilot)
                      <option value="{{$cpilot->id}}">{{$cpilot->name}}</option>
                      @endforeach

                </select>
       
                </div> 
        </div>

        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Date</label>
                <input type="date" class="form-control" value="" name="odrdate">
           
       
                </div> 
        </div>
        
                <input type="submit" value="Submit" class="btn sumbtn">
           

    </div>

</form>
  
        </div>
    </div>
  </div>

</section>
