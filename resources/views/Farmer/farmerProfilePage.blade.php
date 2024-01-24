@include('Farmer.navbar')
<style>
  body{
    background-color: #212121;
    padding: 30px;
  }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aboutSection" style="padding-left: 0px;padding-right: 0px;">
  <div class="container-fluid" id="showsearch">
    <div class="row">
      <div class="col-sm-12" style="margin-top: 71px;">
        <div class="well"> 
                                                                  
          <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="col-lg-2 col-md-2 col-sm-2" style="padding-left:0px;padding-right:0px;">
                <img src="{{ asset('images/FarmerImage/' . $alluserdetails->image) }}" style="    height: 94px;width: 94px;border-radius: 50px;">
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 usernameSection" style="padding-left:0px;">
                <h6>Welcome,</h6>
                                <h5 class="username">{{$alluserdetails->name}}</h5>
                                <h5 class="username">{{$alluserdetails->user_code}}</h5>
                              </div>
            </div>
         <!--    <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="pull-right">
                <h6 style="margin-top: 20px;color: blue;letter-spacing: 1px;font-weight: bold;cursor: pointer;" id="editProfile"><span class="glyphicon glyphicon-edit"></span> Edit Profile</h6>
              </div>
            </div> -->
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h4 class="accountheading">Profile Details</h4>
            </div>
          </div>
          
          <form action="#" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">

              <div class="form-group">
                <label>Name:</label>
                                <input type="text" class="form-control" id="ufname" value="{{$alluserdetails->name}}" disabled=""> 
                              </div>
            </div>
        
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="form-group">
                <label>Mobile Number:</label>
                                <input type="text" class="form-control" minlength="10" maxlength="10" pattern="^[0-9]*$" id="umobile" value="{{$alluserdetails->mob}}" disabled=""> 
                              
              </div>
            </div>
          
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="form-group">
                <label>Email:</label>
                                <input type="text" class="form-control" readonly="" id="uemail" value="{{$alluserdetails->email}}" disabled=""> 
                               
              </div>
            </div>
            
            <br>
          </div>
                    <div class="form-group" id="editForm" style="display: none;">
                <button type="button" id="uptBtn" class="btn btn-warning" style="margin-top: 10px;">Save</button>
                <button type="button" id="canelHide" class="btn btn-danger">Cancel</button>
            </div>          
            
          </form>


          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h4 class="accountheading">Edit Address</h4>
            </div>
     
          </div>

     <!--      <div class="well addnewaddress" >
            <div class="row">
             <form action="https://tarkaarimart.in/UserController/user_new_address?user=8249507765" method="post">
              <div class="col-sm-12">
                <h3 class="addnewaddressheading">Add New Address</h3>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" placeholder="Enter name" id="new_name" name="new_name" pattern="^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$" required="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="text" class="form-control" placeholder="Enter mobile no." id="new_mobile" name="new_mobile" minlength="10" maxlength="10" pattern="^[0-9]*$" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Pincode</label>
                      <input type="text" class="form-control" placeholder="Enter pincode" id="new_pin" name="new_pin" pattern="[0-9]{6}" maxlength="6" required="">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Emailid</label>
                      <input type="text" class="form-control" placeholder="Enter email id" id="locality" name="new_locality" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="form-group">
                      <label> Address</label>
                      <textarea type="text" class="form-control" placeholder="Enter address" id="address" name="new_address" required=""></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Country</label>
                 
                      <select name="new_country" required="" class="countries form-control" id="">
                                              <option value="">Select Country</option>
                                               <option value="India">India</option>
                                            </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>State</label>
                       <select class="form-control st" required="" name="new_state" onchange="selct_district(this.value)" id="listBox"><option value="Select State">Select State</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Puducherry">Puducherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Singapore">Singapore</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option></select> 
                     
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>City / District</label>
                     
                        <select class="form-control" name="new_city" required="" id="secondlist">
                                                  <option value="">Select District</option>
                                              </select>
                    </div>                
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Landmark</label>
                      <input type="text" class="form-control" placeholder="Landmark (Optional)" id="landmark" name="new_landmark">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Alternate Number</label>
                      <input type="text" class="form-control" placeholder="Enter alternate number (Optional)" id="alt_no" name="new_alt_no" pattern="^\d{10}$">
                    </div>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Address Type</label><br>
                      <label class="radio-inline"><input type="radio" name="optradio" value="Home">Home</label>
                      <label class="radio-inline"><input type="radio" name="optradio" value="Office">Office</label>
                      <label class="radio-inline"><input type="radio" name="optradio" value="Other">Other</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-warning">Save</button>
                <a href=""><button type="button" class="btn btn-danger">Cancel</button> </a>
                </div>
              </div>
              </form>
            </div>
          </div> -->


          <div class="well editaddress" style="display: none"> 
            <div class="row">
              <div class="col-sm-12">
                <h3 class="addnewaddressheading">Edit Address</h3>
                <div class="row">
                     <form action="https://tarkaarimart.in/UserController/update_user_data" method="post">
                     <input type="hidden" id="u_id" name="user_id">  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" pattern="^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$" placeholder="Enter name" id="name" name="name">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="text" class="form-control" placeholder="Enter mobile number" id="mob" name="mobile" minlength="10" maxlength="10" pattern="^[0-9]*$" required="">
                    </div>
                  </div>
                </form></div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Pincode</label>
                      <input type="text" class="form-control" placeholder="Enter pincode" id="pincode" name="pincode" pattern="[0-9]{6}">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Nearest Location</label>
                      <input type="text" class="form-control" required="" placeholder="Enter nearest location" id="local" name="locality">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="form-group">
                      <label> Address</label>
                      <textarea type="text" class="form-control" required="" placeholder="ENter Address" id="add" name="address"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Country</label>
                      <select name="edit_country" required="" class=" form-control" id="e_country1">
                                              <option value="">Select Country</option>
                                               <option value="India">India</option>
                                            </select>
                    </div>
                  </div>
        
                  
              
                
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="state11">
                    <div class="form-group">
                      <label>State</label>
             
                      <input type="text" class="form-control" pattern="^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$" placeholder="Enter State" name="state" required="" aria-required="true" id="listBox1">
                    </div>
                  </div>
                </div>
                <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="city1">
                    <div class="form-group">
                      <label>City / District</label>
                
                    <input type="text" class="form-control" pattern="^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$" placeholder="Enter your city" name="city" required="" aria-required="true" id="cityy">
                    </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Landmark</label>
                    <input type="text" class="form-control" placeholder="Landmark (Optional)" id="land" name="landmark">
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Alternate Number</label>
                      <input type="text" class="form-control" placeholder="Enter alternate (Optional) phone number" id="alt" name="alternate" pattern="^\d{10}$">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label>Address Type</label><br>
                      <label class="radio-inline"><input type="radio" name="optradio" id="home" value="Home">Home</label>
                      <label class="radio-inline"><input type="radio" name="optradio" id="office" value="Office">Office</label>
                      <label class="radio-inline"><input type="radio" name="optradio" id="other" value="Other">Other</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-warning">Update </button>
                <a href=""><button type="button" class="btn btn-danger"> Cancel</button> </a>
                </div>
                 
              </div>
            </div>
          </div>


          <div class="well addtrss_edit">
            <div class="row">
              <div class="col-sm-12">
            <!--     <div class="pull-right">
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-vertical"></span></a>
                  <ul class="dropdown-menu  addressDropdown" style="background-color: white;">
                    <li><a href="#" class="editAdd" onclick="edit_address('21377')" style="color: black;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
                    <li><a href="https://tarkaarimart.in/UserController/delete_address?id=21377user=8249507765  " onclick="return ConfirmDelete();" style="color: black;"> <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a> </li>
                  </ul>
                </li>
              </div> -->
          <h5><span class="label label-default"></span></h5>
          <label>{{$alluserdetails->name}}</label>
          <label>{{$alluserdetails->mob}}</label><br>
                          at-gadramunda po-chindaguda,
                                      800013,
                                        netaji colony,
                        <br>
                            Patna,
                                        Bihar,
                                          India                     
          </div>
          </div>
        </div>
                      

      </div>
      
          </div>      
    </div>
  </div>
</div>

