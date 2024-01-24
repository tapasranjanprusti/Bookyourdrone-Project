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
    background-color: #33363a;">Add Land<a href="{{route('Admin.landIndexPage')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.store_land')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">
    <div class="col-lg-4">
                <div class="form-group">
                    <label style="color:black">Acres From:</label>
                    <input type="text" class="form-control" value="" name="acresfrom">
                </div> 
        </div> 
        <div class="col-lg-4">
                <div class="form-group">
                    <label style="color:black">Acres To:</label>
                    <input type="text" class="form-control" value="" name="acresto">
                </div> 
        </div> 
             



        
                <input type="submit" value="Submit" class="btn sumbtn">
           

    </div>

</form>
  
        </div>
    </div>
  </div>

</section>
