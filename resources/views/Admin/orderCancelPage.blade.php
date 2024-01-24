
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


<table class="table table-bordered" id="dataTable">
      <thead>
        <tr>
        <th class="tblthcss">SiNo</th>
          <th class="tblthcss">Mobile Number</th>
          <th class="tblthcss">Order Id</th>
          <th class="tblthcss">Customer Name</th>
          <th class="tblthcss">Cancel Reason</th>
          <th class="tblthcss">Action</th>
        </tr>
      </thead>
      <tbody>
      	@php
      	$i=1;
      	@endphp
      	@foreach($totalCancelOrder as $cancelord)

        <tr>
          <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$cancelord->phone}}</td>
          <td class="tbltdcss">{{$cancelord->orderId}}</td>
          <td class="tbltdcss">{{$cancelord->name}}</td>
          <td class="tbltdcss">{{$cancelord->cancel_reason}}</td>
          <td class="tbltdcss">
          	<a href=""><button type="button" style="    background-color: red;
    color: white;
    border: unset;
    padding: 6px;"><i class="fa fa-undo fa-4x float-left" style="
    font-size: 13px;
"></i>&nbsp; Refund</button></a>
         

          </td>
        </tr>

        @php
        $i++;
        @endphp
     
       @endforeach
      </tbody>
    </table>
   
  </section>

</div>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      dom: 'Bfrtip', // B for buttons
      buttons: [
        'csv', 'pdf', 'excel'
      ]
    });

    $(".delete-btn").on("click", function(event) {
            event.preventDefault(); // Prevent the default behavior of the link

            // Show the confirmation popup
            if (confirm("Are you sure you want to delete this item?")) {
                // If the user confirms the deletion, redirect to the delete route
                window.location.href = $(this).attr("href");
            }
        });
  });
</script>