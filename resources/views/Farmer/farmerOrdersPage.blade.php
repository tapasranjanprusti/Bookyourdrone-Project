@include('Farmer.navbar')
<style>
    .odrbtncls{
        background-color: #9100ff;
    color: white;
    font-size: 13px;
    border-radius: 0px;
    padding: 7px 10px;
    }
    .maincard{
        margin-top: 78px;
        margin-top: 78px;
        box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255), 0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
    padding: 23px;
    background-color: white;
    }
    body{
        background-color: #212121;
    }


    ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type :none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}

 @media only screen and (max-width: 414px) {
  .resgd{
        margin-bottom: 5px;
  }
  .oddt{
    padding-left: 85px!important;
  }

  }

   @media only screen and (max-width: 414px) {
            .modal-dialog {
                width: 90%; 
            }

            .modal-content {
                padding: 10px; 
            }

             .progtrckr {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .progtrckr li {
                text-align: center;
                margin-bottom: 10px;
            }
                        ol.progtrckr[data-progtrckr-steps="5"] li {
    width: 100%;
}
        }



    

</style>
<div class="main-content" style="padding: 25px;    margin-top: -3px;">
@foreach($all_order as $order)
<div class="card maincard">
    <div class="row">
        <div class="col-lg-2 resgd"><button type="subbmit" class="btn btn-md odrbtncls">{{$order->orderId}}</button></div>
        <div class="col-lg-2 "></div>
        <div class="col-lg-2"></div>
   <!--      <div class="col-lg-2"><a href="{{route('farmer.orderCancel',['id'=>$order->id])}}"><button type="submit" class="btn btn-default" style="background-color:#fb641b; color:white; "><i class="fa fa-remove" style="color:white;">
    </i>Cancel Order</button></a></div> -->
      <div class="col-lg-2 resgd">
    <button type="button" class="btn btn-info btn-lg modalclassclick" data-toggle="modal" data-target="#myModal2" id="cancelOrderBtn" data-order-id="{{$order->orderId}}" style="background-color:#fb641b; color:white; "><i class="fa fa-remove" style="color:white;">
    </i>Cancel Order</button>
</div>



        <div class="col-lg-2 resgd">
            <a href="{{route('farmer.userNeedHelp',['id'=>$order->orderId])}}"><button type="subbmit" 
        class="btn btn-default">
            <i class="fa fa-question-circle" aria-hidden="true"></i> Need Help </button></a>
        </div>
        <div class="col-lg-2 resgd"><a href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-map-marker" aria-hidden="true"></i>  Order Status</button></a></div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <p style="margin-top: 34px;">@if($order->user_cancel_status == '1')
            {{'ORDER CANCELED'}}

        @endif</p>
        </div>
        <div class="col-lg-3 col-sm-12">
        <p style="margin-top: 34px;">@if($order->user_cancel_status == '1')
            {{'order has been canceled.'}}

        @endif </p>
        </div>
        <div class="col-lg-3 col-sm-12 oddt" style="padding-left: 129px;">
        <a href="{{route('farmer.orderDetails', ['id' => $order->orderId])}}">
             <button style="margin-top:25px;" type="button" class="btn btn-success">Order Details</button></a>
        </div>

</div>
</div>
@endforeach
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order Status</h4>
      </div>
      <div class="modal-body">
        
      <ol class="progtrckr" data-progtrckr-steps="5">
  <li class="progtrckr-done">Order Processing</li>

  <li class="progtrckr-done">Pre-Production</li>

  <li class="progtrckr-done">In Production</li>

  <li class="progtrckr-todo">Shipped</li>

  <li class="progtrckr-todo">Delivered</li>
</ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cancel your Order</h4>
        </div>
        <form action="{{route('farmer.orderCancel')}}" method="POST">
            @csrf
         <div class="modal-body">
        <input type="hidden" id="orderInput" name="orderInput" readonly>
         
                      <div class="form-group" >
                        <label style="margin-bottom: 15px;">Reason for cancellation</label>
                          <select class="col-sm-12 myDropdown" name="reason" id="reason" style="height:40px; width:100%;">
                       
                              <option>Select reason</option>
                              <option>The delivery is delayed</option>
                              <option>Order placed by mistake</option>
                              <option>Extended delivery time is too long</option>
                              <option>Item Price/Shipping cost is to high</option>
                              <option>Need to change shipping address</option>
                              <option>My reason is not listed</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label style="margin-bottom: 15px;">Message</label>
                          <textarea class="form-control" type="text" row="3" name="message" id="message"></textarea>
                    </div>
              
    </div>
        <div class="modal-footer">
         <input type="submit" value="Confirm Cancellation" style="background-color: orangered;color: white;border: unset;}">
        </div>
    </form>
      </div>
    </div>
  </div>
<!-- </div> -->

<!-- <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
 -->
<script>

$(document).ready(function() {
   
    $(".modalclassclick").on("click", function() {
        
        var orderId = $(this).data("order-id");
        // alert(orderId);
        
     
        $("#orderInput").val(orderId);
        
    
        // alert('clicked');
    });
});
</script>