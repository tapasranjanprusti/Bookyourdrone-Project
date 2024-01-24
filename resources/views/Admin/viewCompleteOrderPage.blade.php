@include('Dashboard.dashboardHeader')

<style>

.cardshadow{
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius: 22px 22px 0px 0px;
  margin-bottom: 20px;

}
div{
    color:black;
}
.midledv{
    text-align: center;

}
.hddate{
    float: right!important;

}
.hdstyl{
    padding: 7px;
    background-color: #141212;
    border-radius: 22px 22px 0px 0px;
    margin-bottom: 16px;
}
.spnstyl{
    color: white;
    font-weight: bold;
    font-size: 16px;
}
.sndrow{
    margin-bottom: 12px;
}
</style>



<section class="main">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">

            <div class="card cardshadow">
         
               
                    <div class="card-body ">
                             @foreach($allCompletedOrder as $compord)
                            <div class="col-lg-12 cardshadow">
                            <div class="row hdstyl">
                                <div class="col-lg-3 col-xs-12 ">
                                    <span class="spnstyl">{{$compord->orderId}}</span>
                                </div>
                                <div class="col-lg-6 col-xs-12 midledv" ><span class="spnstyl">Working Day {{$compord->day}}</span></div>
                                <div class="col-lg-3 col-xs-12 "><span class="hddate spnstyl">{{$compord->date}}</span></div>
                            </div>
                            <div class="row sndrow">
                                <div class="col-lg-2 col-xs-12">
                                    <span>Drone Location</span>
                                    <h5>@if($compord->droneLocation == '1')Office Location @else Farmer Location @endif</h5>
                                </div>
                                @if($compord->startTime != 'NA')
                                <div class="col-lg-2 col-xs-12"> <span>Work start Time</span><h5>{{$compord->startTime}}</h5></div>
                                @endif
                                @if($compord->distance != 'NA')
                                <div class="col-lg-2 col-xs-12"> <span>Distance</span><h5>{{$compord->distance}} Km</h5></div>
                                @endif
                                <div class="col-lg-2 col-xs-12"> <span>Sparing Time</span><h5>{{$compord->sparingTime}}</h5></div>
                                <div class="col-lg-2 col-xs-12"> <span>Complete Time</span><h5>{{$compord->completeTime}}</h5></div>
                                <div class="col-lg-2 col-xs-12"> <span>Acear Completed</span><h5>{{$compord->AcearCompleted}}</h5></div>
                            </div>
                        </div>
                        @endforeach


                    </div>
               
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            </div>
            
        </div>
    </div>
</div>




   
  </section>


