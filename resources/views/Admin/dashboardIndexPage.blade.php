@include('Dashboard.dashboardHeader')
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
	.dcard{
	    background-color: grey;
    color: white;
    font-size: 13px;
    font-weight: bold;
    height: 123px;
	}

	.headcls{
		margin-bottom: 52px;
	}
</style>


<section class="main">
<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
 
    <div class="row">
   	
      <div class="col-xl-4 col-sm-6 col-12">
      	 <a href="{{route('Admin.droneIndexPage')}}"> 
        <div class="card dcard">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
  <img src="{{ asset('images/DroneImage/dronedash2.png') }}" alt="" style="position: absolute;
    height:164px;
    margin-top: -79px;">           </div>
                <div class="media-body text-right">
                  <h3 class="headcls">{{$totalDronesCount}}</h3>
                  <span>Total Drones</span>
                </div>
              </div>
            </div>
          </div>
        </div></a>
      </div>
       
      <div class="col-xl-4 col-sm-6 col-12">
      	<a href="">
        <div class="card dcard">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fa fa-check-circle fa-4x float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3 class="headcls">156</h3>
                  <span>Total Order Placed</span>
                </div>
              </div>
            </div>
          </div>
        </div></a>
      </div>
      
      <div class="col-xl-4 col-sm-6 col-12">
      	<a href=""> 
        <div class="card dcard">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <img src="{{ asset('images/DroneImage/orderrcvd.png') }}" alt="" style="position: absolute;
    height: 102px;
    margin-top: -49px;">
                </div>
                <div class="media-body text-right">
                  <h3 class="headcls">64.89 %</h3>
                  <span>Total Order Recived</span>
                </div>
              </div>
            </div>
          </div>
        </div></a>
      </div>
      
      <div class="col-xl-4 col-sm-6 col-12">
      	<a href=""> 
        <div class="card dcard">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fa fa-undo fa-4x float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3 class="headcls">423</h3>
                  <span>Total Refund Order</span>
                </div>
              </div>
            </div>
          </div>
        </div></a>
      </div>
     
  
      <div class="col-xl-4 col-sm-6 col-12">
      	 <a href="{{route('Admin.orderCancelPage')}}"> 
        <div class="card dcard">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-times float-left" style="font-size: 59px;"></i>
                </div>
                <div class="media-body text-right">
                  <h3 class="headcls">{{$totalCancelOrderCount}}</h3>
                  <span>Total User Cancel Order</span>
                </div>
              </div>
            </div>
          </div>
        </div></a>
      </div>

    

    </div>
  </section>

</div>
</section>