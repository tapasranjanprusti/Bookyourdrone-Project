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
<a href="{{route('Admin.createAssigndrone')}}" class="btn">Assign Drone</a>

<table class="table table-bordered">
      <thead>
        <tr>
        <th class="tblthcss">SiNo</th>
          <th class="tblthcss">Asign Date</th>
          <th class="tblthcss">Drone Model</th>
          <th class="tblthcss">Pilot</th>
         
          <th class="tblthcss">Action</th>
        </tr>
      </thead>
      <tbody>
      @php
        $i=1;
        @endphp
      @foreach($allAssignDrone as $assDrone)
        <tr>
        <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$assDrone->created_at->format('d-m-Y')}}</td>
          <td class="tbltdcss">{{$assDrone->model_name}}</td>
          <td class="tbltdcss">{{$assDrone->name}}</td>
        
          <td class="tbltdcss">
            <!-- <a href="{{ route('Admin.adminusershow', ['id' => $assDrone->id]) }}"><i class="fa fa-eye"></i></a> -->
            <a href="{{ route('Admin.adminuseredit', ['id' => $assDrone->id]) }}"><i class="fa fa-edit"></i></a>
            <a href="{{ route('Admin.adminuserdelete', ['id' => $assDrone->id]) }}" class="delete-btn"><i class="fa fa-trash"></i></a>
        </td>

        @php
        $i++;
        @endphp
        @endforeach
       

      </tbody>
    </table>
   
  </section>