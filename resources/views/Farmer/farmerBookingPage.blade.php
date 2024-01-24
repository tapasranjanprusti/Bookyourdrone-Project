@include('Farmer.navbar')



<style>



.bookcls{
    background-color: white;
    border-radius: 17px;
}



.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
/* .d-flex {
  display: flex;
  flex-direction: row;
  background: #f6f6f6;
  border-radius: 0 0 5px 5px;
  padding: 25px;
} */
form {
  flex: 4;
}
.Yorder {
  flex: 2;
}
.title {
  background: -webkit-gradient(
    linear,
    left top,
    right bottom,
    color-stop(0, #5195a8),
    color-stop(100, #70eaff)
  );
  background: -moz-linear-gradient(top left, #5195a8 0%, #70eaff 100%);
  background: -ms-linear-gradient(top left, #5195a8 0%, #70eaff 100%);
  background: -o-linear-gradient(top left, #5195a8 0%, #70eaff 100%);
  background: linear-gradient(to bottom right, #5195a8 0%, #70eaff 100%);
  border-radius: 5px 5px 0 0;
  padding: 20px;
  color: #f6f6f6;
}
h2 {
  margin: 0;
  padding-left: 15px;
}
.required {
  color: red;
}
label,
table {
  display: block;
  margin: 15px;
}
label > span {
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}
input[type="text"],
input[type="tel"],
input[type="email"],
select {
  width: 70%;
  height: 30px;
  padding: 5px 10px;
  margin-bottom: 10px;
  border: 1px solid #dadada;
  color: #888;
}
select {
  width: 72%;
  height: 45px;
  padding: 5px 10px;
  margin-bottom: 10px;
}
.Yorder {
  margin-top: 15px;
  height: 600px;
  padding: 20px;
  border: 1px solid #dadada;
}
table {
  margin: 0;
  padding: 0;
}
th {
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr > td:nth-child(1) {
  text-align: left;
  color: #2d2d2a;
}
tr > td:nth-child(2) {
  text-align: right;
  color: #52ad9c;
}
td {
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
  width: 144px;
}

p {
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder > div {
  padding: 15px 0;
}

.button {
  width: 94%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #52ad9c;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
.button:hover {
  cursor: pointer;
  background: #428a7d;
}
.bdrrmv{
    border: none!important;
    outline: none;

}
   @media only screen and (max-width: 414px) {
            body {
                font-size: 14px; 

            }

            .d-flex {
                flex-direction: column; /* Stack content vertically */
            }

            .container {
                padding: 15px; /* Add some padding to content */
                 width: 350px;
            }

            /* Adjust specific elements for smaller screens */
            .title h2 {
                font-size: 20px;
            }

            label > span {
                width: 100%;
                margin-bottom: 5px;
            }
            .main-content{
            	padding: 0px!important;
            }

            /* ... Adjust other styles as needed ... */
            select {
    width: 100%;
    height: 36px;
    margin-bottom: 2px;
}

input[type="text"], input[type="tel"], input[type="email"], select {
    width: 100%;
    height: 40px;
    }
 /*         .button {
            margin-top: auto; 
            width: auto; 
            align-self: flex-end; 
            margin-right: 15px;
        }*/






        }



</style>
@if(auth()->guard('farmer')->check())
{{--{{auth()->guard('farmer')->user()}}--}}

<div class="main-content" style="padding: 71px;">
<div class="container">
  <div class="title">
    <h2>Book your Product</h2>
  </div>
  <div class="d-flex">
  <form action="{{route('farmer.create_order')}}" method="post" enctype="multipart/form-data">
                    @csrf
                   
    <label>
        <span class="fname">Crop<span class="required">*</span></span>
        <select class="" id="cropsNm" name="cropsNm" required>
                        <option value="">Select Crop</option>
                        @foreach($all_crop as $crop)
                        <option value="{{$crop->id}}">{{$crop->crop_name}}</option>
                        @endforeach
                    </select>
                    <img src="" alt="Crop Image" id="cropImage" style="max-width: 100px; display: none;">
      </label>
      

      <label>
        <span class="fname">Land Range(Acres) Price<span class="required">*</span></span>
        <select class="" id="landNm" name="landNm" required>
        <option value="">Select Land</option>
                        @foreach($all_land as $land)
                        <option value="{{$land->id}}">{{$land->frm_lnd}} to {{$land->to_lnd}}</option>
                        @endforeach
                    </select>
      </label>
      <label>
    <span class="fname">Specific Land(Acres) price<span class="required">*</span></span>
    <div id="dynamicSelectContainer">
    <select class="" id="" name="" required>
        <option value="">Select Specific Land</option>
    </select>
    </div>
   
</label>

      <!-- <label>
        <span class="fname">Land(Acres)<span class="required">*</span></span>
      <div id="dynamicSelectContainer"></div>
      </label> -->
      <label>
        <span class="fname">Working Days: <span class="required"></span></span>
        <input type="text" name="workingDay" id="workingDay" >
      </label>
      <label>
        <span class="fname">Book Date From: <span class="required"></span></span>
         <input type="text" name="bookDateFrom" id="bookDateFrom">
      </label> 
      <label>
        <span class="fname">Book To: <span class="required"></span></span>
         <input type="text" name="bookDateto" id="bookDateto" value="" >
      </label> 
     
      <label>
        <span class="fname">Name <span class="required">*</span></span>
        <input type="text" name="fname" value="{{auth()->guard('farmer')->user()->name}}">
      </label>
     
     
    
      <label>
        <span>Street Address <span class="required">*</span></span>
        <input type="text" name="streetnm" placeholder="House number and street name" required>
      </label>
     
      <label>
        <span>Village<span class="required">*</span></span>
        <input type="text" name="villageNm" value="{{auth()->guard('farmer')->user()->village}}" required>
      </label>
      <label>
        <span>Panchayat <span class="required">*</span></span>
        <input type="text" name="panchayatNm" value="{{auth()->guard('farmer')->user()->panchayat}}" required>
      </label>
      <label>
        <span>Postcode / ZIP <span class="required">*</span></span>
        <input type="text" name="pinCode" value="{{auth()->guard('farmer')->user()->pin}}" required>
      </label>
      <label>
        <span>Phone <span class="required">*</span></span>
        <input type="tel" name="mobnum" value="{{auth()->guard('farmer')->user()->mob}}" required>
      </label>
      <label>
        <span>Email Address <span class="required"></span></span>
        <input type="email" name="emladd" value="{{auth()->guard('farmer')->user()->email}}">
      </label>
      <input type="hidden" name="drone_id" id="drone_id" value="{{$drone_id}}">
      <input type="hidden" name="alltotal" id="alltotal" value="">
      <input type="hidden" name="advpayment"  value="500">
      <input type="hidden" name="userunicCode" value="{{auth()->guard('farmer')->user()->user_code}}">

      <input class="button" type="submit" value="Place Order">

    

      </form>
    @endif
    <div class="Yorder">
      <table>
        <tr>
          <th colspan="2">Your order</th>
        </tr>
        <tr>
          <td>Drone (Model)</td>
          <td>{{$dronmodel}}</td>
        </tr>
        <tr>
          <td>Crop</td>
          <td><input class="bdrrmv" type="text" id="cropval"></td>
        </tr>
        <tr>
          <td>Land</td>
          <td><input class="bdrrmv" type="text" id="landval"></td>
        </tr>
        <tr>
          <td>Subtotal</td>
          <td><input class="bdrrmv" type="hidden" id="price"><input class="bdrrmv" type="text" id="finalprice"></td>
        </tr>
        
      </table><br>
      <span class="required">For Booking You Pay Minimum ₹<input class="bdrrmv" type="text" id="advprice" value="500"></span>

    
  
    
     
    </div>
  </div>
</div>

</div>

@include('Farmer.footer')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
 $(document).ready(function () {

  var drone_id = $('#drone_id').val();


  $.ajax({
                url: '{{ route('farmer.getDroneBookDate') }}',
                type: 'GET',
                data: { drone_id: drone_id },
                success: function (response) {
                    console.log(response);
              var disabledDatesArray = response;

    $("#bookDateFrom").datepicker({
        dateFormat: 'dd-mm-yy',
        beforeShowDay: function (date) {
            var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
            return [disabledDatesArray.indexOf(string) == -1];
        }
    });
                    
                   
                    
                
                },
                error: function (error) {
                    console.log(error);
                }
            });


    $('#cropsNm, #landNm').on('change', function () {
        var cropId = $('#cropsNm').val();
        var landId = $('#landNm').val();
      

      
        
        if (cropId !== '' && landId !== '') {
            $.ajax({
                url: '{{ route('farmer.getPriceData') }}',
                type: 'GET',
                data: { cropId: cropId, landId: landId },
                success: function (response) {
                    console.log(response);
                 
                    $('#price').val(response.price);
                    // $('#alltotal').val(response.price);
                    $('#cropval').val(response.crop_name);
                    $('#landval').val(response.frm_lnd + ' to ' + response.to_lnd);
                    var imagePath = '{{ asset('images/CropImage') }}/' + response.image;
                    $('#cropImage').attr('src', imagePath);
                    $('#cropImage').show();
                    $('#workingDay').val(response.working_day);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });


    document.getElementById("landNm").addEventListener("change", function() {
    var selectedValue = this.value;
    var selectedOption = this.options[this.selectedIndex];

    if (selectedValue !== "") {
        var range = selectedOption.text.match(/\d+\sto\s(\d+)/);
        if (range && range.length === 2) {
            var start = parseInt(range[0]);
            var end = parseInt(range[1]);

            var dynamicSelect = document.createElement("select");
            dynamicSelect.id = "dynamicSelect";
            dynamicSelect.name = "dynamicSelect";
            dynamicSelect.required = true;

            var defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "Select Land Range";
            dynamicSelect.appendChild(defaultOption);

            for (var i = start; i <= end; i++) {
                var option = document.createElement("option");
                option.value = i;
                option.text = i;
                dynamicSelect.appendChild(option);
            }

            var container = document.getElementById("dynamicSelectContainer");
            container.innerHTML = ""; // Clear previous contents
            container.appendChild(dynamicSelect);
        }
    } else {
        document.getElementById("dynamicSelectContainer").innerHTML = "";
    }
});

$('#dynamicSelectContainer').on('change', '#dynamicSelect', function () {
  var specificland = parseInt($(this).val());
    var landrangprice = parseInt($('#price').val());

    if (!isNaN(specificland) && !isNaN(landrangprice)) {
        var result = specificland * landrangprice;
        $('#finalprice').val(result);
        $('#alltotal').val(result);
       
      }
        });








 
 
      $('#bookDateFrom, #workingDay').on('change', function () {
    var startDate = $('#bookDateFrom').val();
    var workingDays = parseInt($('#workingDay').val());

    if (startDate && !isNaN(workingDays)) {
        var endDate = calculateEndDate(startDate, workingDays);
        $('#bookDateto').val(endDate);
    }
});

function calculateEndDate(startDate, workingDays) {
    var dateParts = startDate.split('-');
    var day = parseInt(dateParts[0], 10) - 1;
    var month = parseInt(dateParts[1], 10) - 1; 
    var year = parseInt(dateParts[2], 10);

    var currentDate = new Date(year, month, day);
    var dayMs = 24 * 60 * 60 * 1000;

    for (var i = 0; i < workingDays; i++) {
        currentDate.setTime(currentDate.getTime() + dayMs);
    }

    var newDay = String(currentDate.getDate()).padStart(2, '0');
    var newMonth = String(currentDate.getMonth() + 1).padStart(2, '0');
    var newYear = currentDate.getFullYear();

    return newDay + '-' + newMonth + '-' + newYear;
}
        });

</script>



