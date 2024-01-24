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
    background-color: #33363a;">Add Price<a href="{{route('Admin.priceIndexPage')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
    <form action="{{route('Admin.store_price')}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="row">
    <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Crop:</label>
                    <select class="form-control" name="cropsNm">
                        <option value="">Select Crop</option>
                        @foreach($all_crop as $crop)
                        <option value="{{$crop->id}}">{{$crop->crop_name}}</option>
                        @endforeach
                    </select>
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Land(Acres):</label>
                    <select class="form-control" name="landNm">
                        
                        <option value="">Select Land</option>
                        @foreach($all_land as $land)
                        <option value="{{$land->id}}">{{$land->frm_lnd}} to {{$land->to_lnd}}</option>
                        @endforeach
                    </select>
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Working Days:</label>
                    <input type="text" class="form-control" value="" name="workingDay">
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:black">Price:</label>
                    <input type="text" class="form-control" value="" name="price">
                </div> 
        </div> 
             



        
                <input type="submit" value="Submit" class="btn sumbtn">
           

    </div>

</form>
  
        </div>
    </div>
  </div>

</section>
