@include('Dashboard.dashboardHeader')
<section class="main">


  <div class="panel panel-default">
    <div class="panel-heading" style="color: #fff;
    background-color: #33363a;">Farmer Edit<a href="{{route('Admin.FarmerUserIndex')}}"  class="btn btn-success" style="float: right;
    margin-top: -7px;
    font-weight: bold;">Back</a></div>
    <div class="panel-body">
        <form action="{{route('Admin.update_farmer')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" value="{{$editFarmer[0]->id}}" name="farmer_id">

        <div class="col-lg-2"><div class="card">
           <img class="viewAdminImg" src="{{ asset('images/FarmerImage/' . $editFarmer[0]->image) }}" alt="">

        </div>
    </div>
        <div class="col-lg-10" style="padding: 14px;">
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$editFarmer[0]->name}}" name="updFarname">
                </div> 
        </div> 
             

        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$editFarmer[0]->mob}}" name="updFarMob" >
                </div> 
        </div> 
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$editFarmer[0]->email}}" name="updFarEmail">
                </div> 
        </div>
        <div class="col-lg-6">
        <div class="form-group">
              <select name="updFarstateNm" id="stateNm" class="form-control" >
              <option value="">Select State</option>
              @foreach ($allState as $state)
            @php
                $selected = ($state->id == $editFarmer[0]->state) ? 'selected' : '';
            @endphp
            <option value="{{ $state->id }}" {{ $selected }}>
                {{ $state->state_name }}
            </option>
        @endforeach
   
               </select>
                </div> 
        </div>
        <div class="col-lg-6">

        <div class="form-group">
              <select name="updFarDistNm" id="updAdDistNm" class="form-control">
              <option value="">Select Distict</option>
           

            @foreach ($allDistrict as $district)
            @php
                $selected = ($district->id == $editFarmer[0]->district) ? 'selected' : '';
            @endphp
            <option value="{{ $district->id }}" {{ $selected }}>
                {{ $district->district_name }}
            </option>
        @endforeach
   
               </select>
                </div> 
   
        </div>
        <div class="col-lg-6">
                <div class="form-group">
                 
                    <input type="text" class="form-control" value="{{$editFarmer[0]->pin}}" name="updFarPin">
                </div> 
        </div>
       
              </div>

              <div class="row">
                <input type="submit" class="btn btn-warning" value="Update" style="float: right;">
              </div>
         </form>
        </div>
    </div>
  </div>

</section>
