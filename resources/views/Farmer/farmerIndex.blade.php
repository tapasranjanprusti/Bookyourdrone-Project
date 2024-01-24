@include('Farmer.navbar')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Drone Booking</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Booking</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4 posts-list">
    @foreach($alldrone as $drone)
      <div class="col-xl-4 col-md-6">
        <article>

          <div class="post-img">
            <img src="{{ asset('images/DroneImage/' . $drone->image) }}" alt="" class="img-fluid" style="height: 238px;">
          </div>
          <h2 class="title">
          {{$drone->model_name}}
          
          </h2>
          <p class="post-category">{{$drone->spraying_tank}} Litre Spraying tank.Endurance – Upto {{$drone->endurance}} mins
       when loaded at full capacity.Flight range – Upto {{$drone->flight_range}} Kms,
       Height Range – Upto {{$drone->height_range}} (in default mode)</p>

         

          <div class="d-flex align-items-center">
            <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-author-list"><a href="{{route('farmer.FarmerBookPage',['id' => $drone->id,'dronmodel'=>$drone->model_name])}}" class="bkank">Book Here&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</p>
           
            </div>
          </div>

        </article>
      </div>
      @endforeach
    </div>

    <!-- <div class="blog-pagination">
      <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div> -->

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->

@include('Farmer.footer')


