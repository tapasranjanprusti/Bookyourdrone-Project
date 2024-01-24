@include('Farmer.navbar')

<style>
	.panel {
  cursor: pointer;
      border-color: #ddd;
    background-color: #fff;
    border: 1px solid #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
}
body{
	background-color: #212121;
}
.pnhead{
	background-color: rebeccapurple !important;
    color: white !important;
}
</style>

<div class="main-content" style="padding: 25px;    margin-top: 75px;">

<div class="panel panel-default">
    <div class="panel-heading pnhead">
      <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
	  {{$orders[0]['orderId']}}
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" >
      <div class="panel-body">
        <h4 style="    font-weight: bold;
    padding-left: 13px;
    color: firebrick;">Billing Information</h4>
        <div class="row">
        	<div class="col-lg-12">
        		<div class="col-lg-4">
        			<label>Name</label>
        			<input type="text" class="form-control" value="{{$orders[0]['name']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Street</label>
        			<input type="text" class="form-control" value="{{$orders[0]['street_address']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Village</label>
        			<input type="text" class="form-control" value="{{$orders[0]['villege']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Panchayat</label>
        			<input type="text" class="form-control" value="{{$orders[0]['panchayat']}}"  readonly>
        			
        		</div>
        		<div class="col-lg-4">
        			<label>Zip</label>
        			<input type="text" class="form-control" value="{{$orders[0]['pin']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Mob</label>
        			<input type="text" class="form-control" value="{{$orders[0]['phone']}}" readonly>
        		</div>
        	</div>
        	
        </div>

            <h4 style="font-weight: bold;
    padding-left: 13px;
    color: firebrick;">Product Information</h4>
        <div class="row">
        	<div class="col-lg-12">
        		<div class="col-lg-4">
        			<label>Crop</label>
        			<input type="text" class="form-control" value="{{$orders[0]['crop_name']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Land Range(Acres) Price</label>
        			<input type="text" class="form-control" value="{{$orders[0]['frm_lnd']}} to {{$orders[0]['to_lnd']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Specific Land Price</label>
        			<input type="text" class="form-control" value="{{$orders[0]['specificLand']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Drone Model</label>
        			<input type="text" class="form-control" value="{{$orders[0]['street_address']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Booking From</label>
        			<input type="text" class="form-control" value="{{$orders[0]['droneBookFrom']}}" readonly>
        		</div>
        		<div class="col-lg-4">
        			<label>Booking To</label>
        			<input type="text" class="form-control" value="{{$orders[0]['dronrBookTo']}}" readonly>
        		</div>
        	</div>
        	
        </div>

      </div>
    </div>
  </div>
</div>