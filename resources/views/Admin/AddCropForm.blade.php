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
    background-color: #33363a;">Add Crop<a href="{{route('Admin.cropIndexPage')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.store_crop')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">
    <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Crop Name:</label>
                    <input type="text" class="form-control" value="" name="CropName">
                </div> 
        </div> 
             



        <div class="col-lg-6">
                <div class="form-group">
                <label style="color:black">Image</label>
                    <input type="file" class="form-control" value="" name="CropImage">
       
                </div> 
        </div>
        
                <input type="submit" value="Submit" class="btn sumbtn">
           

    </div>

</form>
  
        </div>
    </div>
  </div>

</section>
