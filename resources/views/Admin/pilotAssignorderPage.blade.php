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

</style>
<section class="main">


<table class="table table-bordered">
      <thead>
        <tr>
        <th class="tblthcss">SiNo</th>
          <th class="tblthcss">Delivery Date</th>
          <th class="tblthcss">Order Id</th>
         
          @if (auth()->guard('Admin')->user()->role == '5')
        <th class="tblthcss">Co Pilot Name</th>
      @elseif (auth()->guard('Admin')->user()->role == '6')
        <th class="tblthcss">Pilot Name</th>
        @else
        <th class="tblthcss">Pilot Name</th>
        <th class="tblthcss">Co Pilot Name</th>
       

      @endif
          <th class="tblthcss">Work Status</th>
        </tr>
      </thead>
      <tbody>
        @php 
        $i=1;
        @endphp
        @foreach($assignOrder as $assord)

        <tr>
          <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$assord->date}}</td>
          <td class="tbltdcss">{{$assord->order_id}}</td>
          @if (auth()->guard('Admin')->user()->role == '5')
        <td class="tbltdcss">{{$assord->copilot_name}}</td>
      @elseif (auth()->guard('Admin')->user()->role == '6')
        <td class="tbltdcss">{{$assord->pilot_name}}</td>
        @else
        <td class="tbltdcss">{{$assord->pilot_name}}</td>
        <td class="tbltdcss">{{$assord->copilot_name}}</td>

      @endif
          <!-- <td class="tbltdcss"> 
          <select name="order_status" class="form-control" style="border: unset !important;">
          <option value="Pending">Pending</option>
          <option value="In Progress">In Progress</option>
          <option value="Completed">Completed</option>
        
        </select></td> -->
        <td class="tbltdcss">
          <a href="{{ route('Admin.pilotWorkUpdate', ['id' => $assord->order_id]) }}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
        </td>
          
        </tr>
        @php 
        $i++;
        @endphp
  
       @endforeach
      </tbody>
    </table>
   
  </section>