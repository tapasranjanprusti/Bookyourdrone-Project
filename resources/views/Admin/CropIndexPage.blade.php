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
<a href="{{route('Admin.addCropPage')}}" class="btn">Add Crops</a>

<table class="table table-bordered">
      <thead>
        <tr>
          <th class="tblthcss">Si No</th>
          <th class="tblthcss">Date</th>
          <th class="tblthcss">Crop NAme</th>
          <th class="tblthcss">Crop Image</th>
          
        </tr>
      </thead>
      <tbody>
      @php 
      $i=1;
      @endphp
      

      @foreach($allcrop as $crops)
  

     
        <tr>
          <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$crops->created_at->format('d-m-Y')}}</td>
          <td class="tbltdcss">{{$crops->crop_name}}</td>
          <td class="tbltdcss"><img class="viewcropImg" src="{{ asset('images/CropImage/' . $crops->image) }}" alt="" style=""></td>
        </tr>
        @php 
        $i++;
        @endphp
       @endforeach
      </tbody>
    </table>
   
  </section>