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
<a href="{{route('Admin.addDronePage')}}" class="btn">Add Drone</a>

<table class="table table-bordered">
      <thead>
        <tr>
        <th class="tblthcss">SiNo</th>
          <th class="tblthcss">Created At</th>
          <th class="tblthcss">Dronr Model</th>
          <th class="tblthcss">District</th>
          <th class="tblthcss">Price</th>
          <th class="tblthcss">Action</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($all_drone as $drone)
        <tr>
          <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$drone->created_at->format('d-m-Y')}}</td>
          <td class="tbltdcss">{{$drone->model_name}}</td>
          <td class="tbltdcss">{{$drone->district_name}}</td>
          <td class="tbltdcss">{{$drone->price}}</td>
          <td class="tbltdcss">
          @if ($drone->status == 1)
      <a href="{{ route('Admin.toggleDroneStatus', ['id' => $drone->id]) }}" class="btn btn-success" style="background-color: #40b902;">Active</a>
    @else
      <a href="{{ route('Admin.toggleDroneStatus', ['id' => $drone->id]) }}" class="btn btn-danger" style="background-color: #a72857;">Inactive</a>
    @endif

    <a href="{{ route('Admin.DroneStock', ['id' => $drone->id]) }}" class="btn btn-danger" style="background-color: #a72857;">Stock</a>

          </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
        <!-- Add more rows if needed -->
      </tbody>
    </table>
   
  </section>