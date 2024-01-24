<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/table.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>

<body>

  <div class="menu-btn">
    <i class="fas fa-bars"></i>
  </div>

  <div class="side-bar">

    <header>

      <div class="close-btn">

        <i class="fas fa-times"></i>
      </div>
      @if(auth()->guard('Admin')->check())
      <img src="{{ asset('images/AdminImage/' . auth()->guard('Admin')->user()->image) }}" class="dashuser" alt="">

    
<h3 style="text-align: center;">{{auth()->guard('Admin')->user()->name}}</h3>
@endif 
      
     
    </header>
    <div class="menu">
      @if(auth()->guard('Admin')->user()->role == '1')
      <div class="item"><a href="{{route('Admin.dashboardIndexPage')}}"><i class="fas fa-gem"></i>Dashboard</a></div>

      <div class="item">
        <a class="sub-btn"><i class="fas fa-chalkboard-teacher"></i>Master<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="{{route('Admin.droneIndexPage')}}" class="sub-item">Drone</a>
          <a href="{{route('Admin.cropIndexPage')}}" class="sub-item">Crops</a>
          <a href="{{route('Admin.landIndexPage')}}" class="sub-item">Land</a>
          <a href="{{route('Admin.priceIndexPage')}}" class="sub-item">Price</a>
   
        </div>
      </div>

      <div class="item">
        <a class="sub-btn"><i class="fas fa-user"></i>Users<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="{{route('Admin.AdminUserIndex')}}" class="sub-item">Admins</a>
          <a href="{{route('Admin.FarmerUserIndex')}}" class="sub-item">Farmers</a>
          <a href="{{route('Admin.createUserIndex')}}" class="sub-item">Create User</a>
        </div>
      </div>

      <div class="item"><a href="{{route('Admin.assignDrone')}}"><i class="fas fa-info-circle"></i>Assign Drone</a></div>



      <!-- <div class="item"><a href="{{route('Admin.OrderIndex')}}"><i class="fas fa-cart-plus"></i>Orders</a></div> -->

   <!--    <div class="item"><a href="{{route('Admin.OrderIndex')}}"><i class="fas fa-th"></i>Forms</a></div>
 -->
      <div class="item">
        <a class="sub-btn"><i class="fas fa-bell"></i>Tickets<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
        <a href="{{route('Admin.reviewTickets')}}" class="sub-item">Review</a>
          <a href="{{route('Admin.refundTickets')}}" class="sub-item">Refund</a>
          <a href="{{route('Admin.complainTickets')}}" class="sub-item">complain</a>
          <a href="{{route('Admin.enquiryTickets')}}" class="sub-item">Enquiry</a>
          <a href="{{route('Admin.otherTickets')}}" class="sub-item">other</a>
        </div>
      </div>
      @endif

  <!--     <div class="item">
        <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="#" class="sub-item">Sub Item 01</a>
          <a href="#" class="sub-item">Sub Item 02</a>
        </div>
      </div> -->

       
      <div class="item">
        <a class="sub-btn"><i class="fas fa-user"></i>Orders<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
        @if(auth()->guard('Admin')->user()->role == '1')
          <a href="{{route('Admin.assignOrderIndex')}}" class="sub-item">Assign Order</a>
          <a href="{{route('Admin.OrderIndex')}}" class="sub-item">All Orders</a>
          <a href="{{route('Admin.pilotCompletedOrder')}}" class="sub-item">Completed Order</a>
          @endif
          @if(auth()->guard('Admin')->user()->role == '5' || auth()->guard('Admin')->user()->role == '6')

          <a href="{{route('Admin.pilotAssignorder')}}" class="sub-item">Assiened Order</a>
          <a href="{{route('Admin.pilotCompletedOrder')}}" class="sub-item">Completed Order</a>

          @endif
        </div>
      </div>
      @if(auth()->guard('Admin')->user()->role == '5' || auth()->guard('Admin')->user()->role == '6')
      <div class="item"><a href="{{route('Admin.maintenace')}}"><i class="fas fa-info-circle"></i>Maintenance</a></div>
      @endif

      <div class="item"><a href="{{route('Admin.logout')}}"><i class="fas fa-info-circle"></i>Logout</a></div>
    </div>
  </div>
  <!-- <section class="main">
    <h1 style="color: black;">DashBoard Content</h1>
  </section> -->

  <script type="text/javascript">
    $(document).ready(function() {
        $('.side-bar').addClass('active');
      //jquery for toggle sub menus
      $('.sub-btn').click(function() {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });
      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function() {
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });
      $('.close-btn').click(function() {
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
  </script>

</body>

</html>