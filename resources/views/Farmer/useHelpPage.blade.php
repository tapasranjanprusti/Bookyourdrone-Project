@include('Farmer.navbar')

<style>
body{
     background-color: #212121;
    
}
   
</style>

<div id="Contact" class="Contactsection col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px; margin-top: 96px;">
  <div class="container-fluid" id="showsearch">
    <div class="well">
        <span style="color:red; padding-left:15px; ">All fields are mandatory to fill-up!!</span>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
        <form action="{{route('farmer.createComplain')}}" method="post" enctype="multipart/form-data">
                    @csrf
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <input type="hidden" value="{{$order_id}}" name="order_id">
            <div class="form-group1">
                <label>Full Name</label>
              <input type="text" class="form-control" pattern="^[a-zA-Z ]*$" required="required" placeholder="Enter Your Name" name="full_name">
            </div>
          </div>

           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group1">
                <label>Email Id</label>
              <input type="email" class="form-control" placeholder="Enter your email id" required="required" name="email">
            </div>
          </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group1">
                <label>Mobile Number</label>
              <input type="text" class="form-control" minlength="10" maxlength="10" placeholder="
        Enter your mobile number" required="required" pattern="^[0-9]*$" name="mobile">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group1">
                <label>Requested For</label>
              <select class="col-sm-12 myDropdown" style="height:35px; width: 100%;" name="request_type" required="required">
                <option selected="" disabled="" value="">Select Request Type</option>
                <option value="1">Feedback</option>
                <option value="2">Complain</option>
                <option value="3">Enquiry</option>
                <option value="4">Refund</option>
                <option value="5">Other</option>
              </select>
            </div>
          </div>
        </div>
        
        
    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right: 30px; padding-left: 30px;">
          <div class="form-group1">
              <label>Message</label>
            <textarea type="text" class="form-control" rows="4" required="required" placeholder="Enter message" name="message"></textarea>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 13px;
    text-align: center;">
          <input type="submit" value="submit" style="color: white;
    background-color: green;border:unset;">
  </div>
            </div>


          







      </div>
      </form>
  
</div>
</div>
<!--<p style="color:orange;">Varnak E-Commerce Solutions Pvt Ltd (placekart.com) B/34 BDA DUPLEX Baramunda Colony, Bhubaneswar,Odisha,India</p>-->
</div>
