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
        <th class="tblthcss">SI No</th>
          <th class="tblthcss">User Code</th>
          <th class="tblthcss">Order Id</th>
          <th class="tblthcss">Name</th>
          <th class="tblthcss">Email</th>
          <th class="tblthcss">Mobile</th>
          <th class="tblthcss">Message</th>
      
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach($all_complaine as $cmp)
       
        <tr>
        <td class="tbltdcss">{{$i}}</td>
          <td class="tbltdcss">{{$cmp->user_code}}</td>
          <td class="tbltdcss">{{$cmp->order_id}}</td>
          <td class="tbltdcss">{{$cmp->name}}</td>
          <td class="tbltdcss">{{$cmp->email}}</td>
          <td class="tbltdcss">{{$cmp->mob}}</td>
          <td class="tbltdcss">{{$cmp->msg}}</td>
        
    
       @php
       $i++;
       @endphp
   
       @endforeach
      </tbody>
    </table>
   
  </section>


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