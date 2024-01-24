@include('Dashboard.dashboardHeader')
<style>
  .tblthcss {
    background-color: #33363a!important;
    color: white;
      font-size: 16px;
      padding: 10px;
      background-color: #f2f2f2;
    }

    .tbltdcss {
      color: black;
      font-size: 14px;
      padding: 10px;
    }

    /* Add some additional styling to the table */
    .table {
      border-collapse: collapse;
      width: 100%;
      /* max-width: 600px; */
      margin: 20px auto;
    }

    .table th, .table td {
      border: 1px solid #ddd;
    }

    .table th {
      text-align: left;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #28a745; /* Success color */
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      transition: background-color 0.3s ease;
      float: right;
    margin-bottom: 17px;
    }

    .btn:hover {
      background-color: #218838; /* Darker shade on hover */
    }

    .viewcropImg{
        height: 60px;
    width: 92px;
    }

</style>
<section class="main">
<a href="{{route('Admin.addPricePage')}}" class="btn">Add Price</a>

<table class="table table-bordered">
      <thead>
        <tr>
          <th class="tblthcss">Si No</th>
          <th class="tblthcss">Created Date</th>
          <th class="tblthcss">Crop</th>
          <th class="tblthcss">Land(Acres)</th>
          <th class="tblthcss">Time taking</th>
          <th class="tblthcss">Price</th>
          
        </tr>
      </thead>
      <tbody>

      @php
      $i=1;
      @endphp

      @foreach($all_price as $price)
  
     
        <tr>
          <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$price->created_at->format('d-m-Y')}}</td>
          <td class="tbltdcss">{{$price->crop_name}}</td>
          <td class="tbltdcss">{{$price->frm_lnd}} to {{$price->to_lnd}}</td>
          <td class="tbltdcss">{{$price->working_day}} Day</td>
          <td class="tbltdcss">{{$price->price}}</td>
         
        </tr>
        @php
        $i++
        @endphp
        @endforeach


      </tbody>
    </table>
   
  </section>