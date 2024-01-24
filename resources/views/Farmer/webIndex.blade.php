@include('Farmer.navbar')
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
  .carousel-item {
  transform: scale(1);
  max-height: 100vh;
  min-height: calc(100vh-180px);
  overflow: hidden;
}
.sliderTitle {
  font-family: Roboto;
  font-size: 50px;
  display: none;
  top: calc(50vh - height);
  left: -10vw;
  color: white;
  position: absolute;
  transition: all 0.5s;
  background-color: rgba(0, 0, 0, 0.3);
  padding: 5px 15px;
}
.active .sliderTitle {
  display: block;
  top: 50vh;
  left: 10vw;
}
.sliderSubtitle {
  display: none;
  top: 50vh;
  left: -10vw;
  color: white;
  position: absolute;
  transition: all 0.5s;
  background-color: rgba(0, 0, 0, 0.3);
  padding: 5px 15px;
}
.active .sliderSubtitle {
  display: block;
  top: 50vh;
  margin-top: 100px;
  left: 10vw;
}
#carouselExampleIndicators {
  position: relative;
  /* min-height: 100vh; */
}
.containerVideobg {
  background-color: var(--second);
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: -2;
  padding: 0 !important;
  max-height: 100vh;
  overflow: hidden;
}
.videoSliderBackground {
  margin: 0px;
  padding: 0px;
  width: 100%;
  height: 100%;
  min-width: 100vh;
  min-height: 100vh;
}
.videoSlider {
  margin-left: auto;
  margin-right: auto;
  margin-top: 180px;
  width: 40%;
  transition: all 0.5s;
  border: 10px solid var(--primary);
  background-color: var(--primary);
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.3);
}
.elVideo {
  width: 100%;
  height: 100%;
}

.active .videoSlider {
  /* margin-top: 0; */
  margin-top: -89px;
  width: 100%;
  border: none;
  box-shadow: none;
}

.carousel-indicators li::marker{
  display:none;
}

@media (max-width: 768px) {

  .containerVideobg {
    display: none;
    /* Adjust other styles as needed */
  }
  /* #carouselExampleIndicators {
    display: none;
 
  } */
}

/* foront drone animation css */
#tophero {
  width: 100%;
  height: 100vh;
  /* position: absolute; */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(https://thihomehealthcare.com/bookyourdrone/public/assets/images/farmingimg.jpg)!important;
  background-position: center!important;
  background-size: cover!important;
  background-repeat: no-repeat;
}
#drone-box {
  margin: 150px auto;
  transition: 2s;
  width: 200px;
  position: relative;
  transition: 2s;
}
.drone-pic {
  width: 100%;
}
.left-pic {
  width: 80px;
  top: 0;
  left: -11px;
  position: absolute;
  animation: rotation 0.2s linear infinite;
}
.right-pic {
  width: 80px;
  top: 0;
  right: -11px;
  position: absolute;
  animation: rotation 0.2s linear infinite;
}
@keyframes rotation {
  100% {
    transform: rotateY(360deg);
  }
}



/* end front drone css */

/* about us css */
img {
  width: 100%;
  max-width: 100%;
  object-fit: cover;
  object-position: 50% 50%;
  height: 100%;
}

.aboutimg {
  display: flex;
  .item {
    flex: 1 1 100%;
  }
  .item + .item {
    padding-left: 10px;
  }
  .item-flex {
    display: flex;
    flex-direction: column;
  }
  .item-flex {
    img + img {
      margin-top: 10px;
    }
  }
  .item-flex-img {
    height: 40%;
    margin-bottom: 10px;
  }
  .item-flex-img-big {
    height: 60%;
    margin-bottom: 10px;
    
  }
}

/* css end */



.clients-slider {
  width: 100%; /* Set the width of the slider */
  margin: 0 auto; /* Center the slider within the container */
}

.client-card {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.img-fluid {
  width: 100%; /* Make the image fill the card */
  border-radius: 10px 10px 0 0; /* Rounded corners on top */
}

.card-text {
  padding: 15px;
  text-align: center;
  background-color: #fff; /* Background color for the text area */
  border-radius: 0 0 10px 10px; /* Rounded corners on bottom */
}



.review_wrap {
  padding: 20px;
  border-radius: 5px;
  position: relative;
  outline: none;
  border: 1px solid #ccc;
  text-align: left;
  /* width: 25%; */
  min-height: 235px;
  a {
    color: #333;
    text-decoration: none;
  }
  .review_head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    @media only screen and (max-width: 991px) {
      flex-wrap: wrap;
    }

    a {
      display: flex;
      align-items: center;
      outline: none;
      @media only screen and (max-width: 991px) {
        width: 100%;
      }

      &:focus {
        color: #444444;
      }
    }

    img {
      height: 35px;
      width: 33px;
    }

    .rating_star {
      display: flex;
      justify-content: center;
      @media only screen and (max-width: 991px) {
        margin-top: 20px;
        width: 100%;
      }

      img {
        width: 35px;
        height: 32px;
        display: inline-block;
      }
    }
  }

  .review_comment {
    display: flex;
    flex-wrap: wrap;

    p {
      height: 90px;
      overflow: hidden;
      text-overflow: ellipsis;

      &.active {
        height: auto;
        overflow: auto;
      }
    }

    a {
      width: 100%;
      color: #4292f9;
      font-weight: bold;
    }
  }

  h3 {
    display: inline-block;

    padding-top: 5px;
    margin: 0;

    span {
      font-size: 16px;
    }
  }
}
.feedback_title {
  display: inline-block !important;
  font-size: 22px;
  margin-bottom: 20px;
  margin-top: 0;
  border-bottom: none !important;
  @media only screen and (min-width: 991px) {
    font-size: 30px;
  }
}


.swaipersliderwidth{
  width:200px !important; 
}



</style>

<section style="padding:0px;">




  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>
  </ol>
  <div id="carrousel" class="carousel-inner">
    <!-- Carousel item  1 -->
    <div data-pause="true" data-interval="10000" class="carousel-item active">
      <div class="videoSlider">


        <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="{{ asset('assets/videos/frontBanner1.mp4') }}" id='video-slider-1'>
        </video>
      </div>
    </div>
    <!-- end of carousel item 1-->
    <!-- Carousel item  2 -->
    <div data-pause="true" data-interval="10000" class="carousel-item">
      <div class="videoSlider">

        
        <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="{{ asset('assets/videos/frontBanner2.mp4') }}" id='video-slider-2'>
        </video>
      </div>
    </div>
    <!-- end of carousel item 2-->
    <!-- Carousel item  3 -->
    <div data-pause="true" data-interval="10000" class="carousel-item">
      <div class="videoSlider">


        <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="{{ asset('assets/videos/frontBanner3.mp4') }}" id='video-slider-3'>
        </video>
      </div>
    </div>
    <!-- end of carousel item 3-->

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
  <div class="container-fluid containerVideobg">
    <video width="100%" class="videoSliderBackground" loop="loop" autoPlay playsInline muted src="https://terra-1-g.djicdn.com/851d20f7b9f64838a34cd02351370894/Shot%20on%20%E8%A7%86%E9%A2%91%E8%B0%83%E6%95%B4/1.mov" id="video-slider-background"></video>
  </div>
</div>



  <!-- video -->
  <!-- End Hero Section -->


</section>

 <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div id="banner">
        <div id="drone-box">
        <img src="https://i.postimg.cc/XJHDYkJZ/drone.png" class="drone-pic">
        <img src="https://i.postimg.cc/PJCVpvpS/drone-left.png" class="left-pic">
        <img src="https://i.postimg.cc/j2Bgzqyt/drone-right.png" class="right-pic">
        </div>
        </div>
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Impact</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div>

        </div>
      </div>
    </div>

    </div>
  </section> -->
  



  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p >Darubrahma Automation Robotics Pvt. Ltd., revolutionizing agriculture with advanced drone solutions, precision spraying, and a comprehensive Kisan Drone One Stop Solution for sustainable farming.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6">
            <h3 style="color:red;">Voluptatem dignissimos provident quasi corporis</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Welcome to Darubrahma Automation Robotics Private Limited, leading the charge in agricultural innovation since our establishment on August 29, 2019, in Bhubaneswar, Odisha. We specialize in drone solutions, covering over 30,000 acres across Odisha and neighboring states. Partnering with 20,000+ farmers, our advanced drone technology optimizes crop management for various crops.</p>
            <p>Our focus is on precision in pesticide spraying, ensuring enhanced yields while minimizing environmental impact. With competitive rates of 400 to 450 per acre, tailored to Odisha's agricultural landscape, we are committed to delivering high-quality, cost-effective solutions.</p>
            <!-- <p>Join us in transforming agriculture with our comprehensive Kisan Drone One Stop Solution, offering B2B and B2C drone models, specialized services, and user-friendly solutions through our "BOOK YOUR DRONE" Mobile Application. We prioritize sustainability, validated by OUAT Bhubaneswar and in collaboration with partners like CTTC Bhubaneswar, Dabri Tea State, and IPL.</p>
            <p>At Darubrahma, we're not just revolutionizing agriculture; we're pioneering advancements, uniting technology and farming practices for a sustainable, prosperous future. Join us on this transformative journey.</p> -->

          </div>


<div class="col-lg-6">
<div class="aboutimg">
  <div class="item">
    <img src="{{ asset('assets/images/aboutimg1.jpeg') }}" alt="" />
  </div>
  <div class="item item-flex">
    <img class="item-flex-img-big" src="{{ asset('assets/images/aboutusimg2.jpeg') }}" alt="" />
    <img class="item-flex-img" src="{{ asset('assets/images/aboutimg3.jpeg') }}" alt="" />
  </div>
  <div class="item item-flex">
    <img class="item-flex-img" src="{{ asset('assets/images/aboutimg4.jpeg') }}" alt="" />
    <img class="item-flex-img-big" src="{{ asset('assets/images/aboutusimg5.jpeg') }}" alt="" />
  </div>
 </div>
</div>
<div class="col-lg-12">
         
            <p>Join us in transforming agriculture with our comprehensive Kisan Drone One Stop Solution, offering B2B and B2C drone models, specialized services, and user-friendly solutions through our "BOOK YOUR DRONE" Mobile Application. We prioritize sustainability, validated by OUAT Bhubaneswar and in collaboration with partners like CTTC Bhubaneswar, Dabri Tea State, and IPL.</p>
            <p>At Darubrahma, we're not just revolutionizing agriculture; we're pioneering advancements, uniting technology and farming practices for a sustainable, prosperous future. Join us on this transformative journey.</p>

          </div>



        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr1.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Rice Field In Sambalpur</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr2.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Rice Field In Bragada</div>
          </div>            
        </div>


        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr3.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Rice Field In Cuttack</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr4.png') }}" class="img-fluid" alt="">
            <div class="card-text">Chilly Field In Ganjam </div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr5.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Cashew Tree In Khordha</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr6.png') }}" class="img-fluid" alt="">
            <div class="card-text">Sugarcane In Jajpur</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr7.png') }}" class="img-fluid" alt="">
            <div class="card-text">Tomato Field In Jagatsinghpur</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr8.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Flower Garden In Dhenkanal</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr9.png') }}" class="img-fluid" alt="">
            <div class="card-text">Water million Field  In Gujrat</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr10.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Sunflower Field In Andra Pradesh</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr11.png') }}" class="img-fluid" alt="">
            <div class="card-text"> Mango Tree In Madhya Pradesh</div>
          </div>            
        </div>

        <div class="swiper-slide swaipersliderwidth">
            <div class="client-card">
            <img src="{{ asset('images/mr12.jpg') }}" class="img-fluid" alt="">
            <div class="card-text">Tea Estate In West Bengal</div>
          </div>            
        </div>

           
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('assets/images/happyclientimg.jpeg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Take the leap towards agricultural excellence with Darubrahma Automation Robotics Private Limited. Embrace the future of farming by availing our cutting-edge drone technology and automation solutions. Whether you're a farmer seeking to optimize pesticide spraying for increased yields or a stakeholder in the agricultural sector aiming for enhanced efficiency, our expertise is tailored to meet your unique needs. Contact us today to explore how our services can elevate your farming operations. Join hands with us in ushering a new era of sustainable, tech-driven agriculture. Let's cultivate success together—call us now to embark on a journey towards precision, productivity, and profitability in your agricultural endeavours.</p>
        <!-- <a class="cta-btn" href="#">Call To Action</a> -->
      </div>
    </section><!-- End Call To Action Section -->


    <!-- -------------our services content start--------------------------- -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p style="color:red;">Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
          <div class="review_wrap">
  <div class="review_head">
    <a href="#" target="_blank">
      <h3>Spraying</br><span> </span></h3>
    </a>
  </div>
  <div class="review_comment">
    <p>
    Darubrahma Automation Robotics Pvt. Ltd. employs cutting-edge drone spraying for precise and efficient application of pesticides, fertilizers, and agricultural inputs, offering targeted spraying, reduced environmental impact, and improved cost-effectiveness. Drones ensure optimal coverage, early disease detection, and resource-efficient farming, contributing to enhanced crop yields and sustainable agriculture. In various applications like farm spraying, mosquito control, algae management, and locust control, drones, operating approximately 40 times faster than manual labor, significantly enhance operational efficiency. Their ability to reach inaccessible areas, provide uniform spraying, and eliminate human exposure to hazardous chemicals makes them invaluable in agricultural, pest control, and environmental management practices.
    </p>
    <a href="#" class="read_more"></a>
  </div>
</div>


          </div>

          <div class="col-lg-4 col-md-6">
          <div class="review_wrap">
  <div class="review_head">
    <a href="#" target="_blank">
      <h3>Crop disease analysis</br><span> </span></h3>
    </a>
  </div>
  <div class="review_comment">
    <p>
    Crop disease analysis is a crucial component of modern agriculture, employing innovative technologies to detect and assess diseases affecting crops. At Darubrahma Automation Robotics Pvt. Ltd., we lead in utilizing advanced methods such as drone imagery and artificial intelligence for efficient crop disease analysis.
Through high-resolution drone cameras and AI algorithms, we enable farmers to identify and analyze crop diseases with precision. This proactive approach allows for early detection, reducing the risk of widespread infestations and minimizing crop damage.
Our technology provides farmers with real-time insights into the health of their crops, allowing for timely intervention and targeted treatment. By leveraging crop disease analysis, Darubrahma Automation Robotics Pvt. Ltd. contributes to sustainable agriculture practices, ensuring optimal crop yields while minimizing the use of pesticides and promoting environmental stewardship.
    </p>
    <a href="#" class="read_more"></a>
  </div>
</div>


          </div>

          <div class="col-lg-4 col-md-6">
          <div class="review_wrap">
  <div class="review_head">
    <a href="#" target="_blank">
      <h3>Crop Monitoring</br><span> </span></h3>
    </a>
  </div>
  <div class="review_comment">
    <p>
    Crop monitoring is a vital practice in modern agriculture, and at Darubrahma Automation Robotics Pvt. Ltd., we leverage cutting-edge technology to revolutionize this process. Through the use of drones equipped with high-resolution cameras and advanced sensors, we provide farmers with real-time and accurate insights into the health and growth of their crops.
Our drone-based crop monitoring system enables precise assessments of crop conditions, identifying potential issues such as diseases, nutrient deficiencies, or pest infestations early on. This proactive approach empowers farmers to take timely corrective actions, optimizing resource utilization and maximizing yields.
By combining artificial intelligence and data analytics, we offer comprehensive crop analytics, allowing farmers to make informed decisions regarding irrigation, fertilization, and pest control. Darubrahma Automation Robotics Pvt. Ltd. is dedicated to enhancing agricultural efficiency and sustainability through innovative crop monitoring solutions.
    </p>
    <a href="#" class="read_more"></a>
  </div>
</div>


          </div>

          <div class="col-lg-4 col-md-6">
          <div class="review_wrap">
  <div class="review_head">
    <a href="#" target="_blank">
      <h3>Sport Treatment</br><span> </span></h3>
    </a>
  </div>
  <div class="review_comment">
    <p>
    In the realm of agriculture, Darubrahma Automation Robotics Pvt. Ltd. pioneers a unique approach by applying sports treatment principles to crop management using advanced drone technology. Our innovative agricultural drone solutions integrate sports treatment methodologies to optimize crop health and yield.
Utilizing drones equipped with high-resolution cameras and sensors, we conduct comprehensive assessments of crop conditions. Drawing parallels from sports science, our approach involves tailored treatments for crops, addressing nutrient deficiencies, diseases,and stress factors. This personalized approach ensures precision in agricultural interventions, enhancing plant health and maximizing yields.
Darubrahma Automation Robotics Pvt. Ltd. extends the benefits of sports treatment principles to agriculture, offering farmers a progressive and effective way to elevate crop performance, ultimately contributing to sustainable and efficient farming practices.
    </p>
    <a href="#" class="read_more"></a>
  </div>
</div>


          </div>

          <div class="col-lg-4 col-md-6">
          <div class="review_wrap">
  <div class="review_head">
    <a href="#" target="_blank">
      <h3>Fields and Soil Analyses</br><span> </span></h3>
    </a>
  </div>
  <div class="review_comment">
    <p>
    Field and soil analyses are fundamental to modern agriculture, and at Darubrahma Automation Robotics Pvt. Ltd., we employ advanced technologies to enhance this critical aspect of farming. Using drones equipped with specialized sensors and cameras, we conduct detailed analyses of fields and soil.
Our drone-based technology enables precise mapping of fields, providing farmers with valuable insights into crop health, soil composition, and nutrient levels. Through sophisticated data analytics, we offer comprehensive reports that guide farmers in making informed decisions about irrigation, fertilization, and crop management.
Darubrahma Automation Robotics Pvt. Ltd. is committed to revolutionizing agriculture by delivering accurate and actionable information through innovative field and soil analyses, ultimately optimizing farm productivity and sustainability.
    </p>
    <a href="#" class="read_more"></a>
  </div>
</div>


          </div>

          <div class="col-lg-4 col-md-6">
          <div class="review_wrap">
  <div class="review_head">
    <a href="#" target="_blank">
      <h3>Crop Health Assessment</br><span> </span></h3>
    </a>
  </div>
  <div class="review_comment">
    <p>
    Crop Health Assessment is a pivotal component of modern agriculture, and Darubrahma Automation Robotics Pvt. Ltd. is a forefront player in utilizing advanced technologies for this purpose. Employing drones equipped with high-resolution cameras and sophisticated sensors, we provide real-time, accurate insights into the condition of crops.
Our state-of-the-art Crop Health Assessment system enables precise monitoring of crops, allowing early detection of diseases, nutrient deficiencies, and other stress factors. By utilizing artificial intelligence and data analytics, we offer farmers actionable data for informed decision-making, optimizing crop management practices, and ensuring sustainable agricultural practices.
Darubrahma Automation Robotics Pvt. Ltd. is dedicated to advancing agricultural efficiency by empowering farmers with cutting-edge solutions for comprehensive Crop Health Assessment.
    </p>
    <a href="#" class="read_more"></a>
  </div>
</div>


          </div>


        </div>
      </div>
    </section>




    <!-- ----------our services----------------------------- -->

   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p style="color:red;">Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sarah Thompson</h3>
                      <h4>Farm Owner </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Darubrahma Automation Robotics has been a game-changer for my farm. Their drone technology has not only optimized our spraying services but has also made a significant impact on our overall sustainability efforts. The personalized training provided alongside their top-notch equipment has empowered our team, resulting in increased yields and reduced environmental impact. I highly recommend Darubrahma for their commitment to excellence in agriculture.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy2.avif" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Dr. James Martinez</h3>
                      <h4>Agronomist</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Darubrahma Automation Robotics has exceeded my expectations in delivering precision agriculture solutions. Their innovative drone technology has allowed us to implement data-driven strategies seamlessly. The attention to detail in their services, along with a strong commitment to sustainability, makes them a standout choice. I highly recommend Darubrahma for their dedication to advancing agriculture through cutting-edge technology.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Alex Nguyen</h3>
                      <h4>Farm Manager </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Our collaboration with Darubrahma Automation Robotics has been a game-changer for our farm. Their drone technology has streamlined our operations, providing unmatched efficiency in spraying services. The combination of high-quality equipment and personalized training has empowered our team to adapt to modern farming practices successfully. Darubrahma is a reliable and forward-thinking partner for any farm seeking to embrace the latest agricultural technology.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Dr. Emily Harper</h3>
                      <h4>Environmental Officer </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Darubrahma Automation Robotics has demonstrated a strong commitment to sustainable agriculture. Their precision drone spraying services have not only improved our farm's productivity but also significantly reduced the environmental impact of our practices. Working with Darubrahma has been a positive experience, and I highly recommend their services to those looking to implement environmentally conscious farming practices.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Dr. Priya Patel</h3>
                      <h4>Crop Scientist </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Working with Darubrahma Automation Robotics has been a scientifically enriching experience. Their drone technology seamlessly integrates with our research initiatives, providing valuable data for crop analysis and improvement. The precision in their spraying services and their commitment to sustainable agriculture align perfectly with our goals. Darubrahma is a reliable partner for those at the forefront of agricultural innovation.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Mark Thompson</h3>
                      <h4>Precision Agriculture Specialist </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Darubrahma Automation Robotics stands out in the field of precision agriculture. Their drone technology has significantly enhanced our ability to optimize resource utilization. The comprehensive services, coupled with advanced equipment, have made a tangible impact on our operational efficiency. Darubrahma is the go-to partner for anyone serious about adopting precision agriculture practices.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Anna Chang (AgTech Startup)</h3>
                      <h4>Chief Technology Officer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Collaborating with Darubrahma Automation Robotics has been instrumental in bringing cutting-edge technology to our AgTech startup. Their drone solutions have seamlessly integrated into our platform, providing valuable insights for our users. The reliability of their technology and their commitment to innovation make Darubrahma a key partner in driving the future of agriculture technology.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jonathan Turner</h3>
                      <h4>Large-Scale Farm Operator  </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Darubrahma Automation Robotics has become an integral part of our large-scale farming operations. Their drone technology has revolutionized our spraying services, leading to increased efficiency and cost-effectiveness. The reliability of their equipment and their commitment to customer support make them a trusted partner in our pursuit of agricultural excellence.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


            
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="https://thihomehealthcare.com/bookyourdrone/public/assets/images/boy4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Maria Hernandez</h3>
                      <h4>Rural Community Leader </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Darubrahma Automation Robotics has made a positive impact on our rural community. Their accessible drone solutions and commitment to training have empowered local farmers, bringing about a positive shift in our agricultural practices. Darubrahma's dedication to sustainable and inclusive farming aligns with our community values, making them a valuable partner for the future.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p style="color:red">Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Product</li>
              <li data-filter=".filter-product">Brochuare</li>
              <li data-filter=".filter-branding">Business Card</li>
              <li data-filter=".filter-books">Catalog</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p style="color:red;">Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Walter White</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p style="color:red;">Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p style="color:red">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    What services does your agriculture drone company provide?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  We provide drone spraying services for precise pesticide and fertilizer application, high-quality drone sales, and personalized training programs for farmers.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    How does drone spraying benefit my crops?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Drone spraying ensures precise and efficient application of pesticides and fertilizers, minimizing waste and optimizing crop protection.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Can I purchase drones from your company?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Absolutely! We provide high-quality drones designed specifically for agriculture, available for purchase.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    What makes your drones suitable for farming?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Our drones are equipped with advanced technology for precision agriculture, user-friendly interfaces, and durability to meet the demands of farm operations.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Do you offer training for operating agricultural drones?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Yes, we provide personalized training programs to ensure farmers can effectively operate and integrate our drones into their daily practices.                  </div>
                </div>
              </div><!-- # Faq item-->


              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                    <span class="num">6.</span>
                    How long is the training program, and what does it cover?
                  </button>
                </h3>
                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Training duration varies, but it typically covers drone operation, maintenance, safety protocols, and integration into farming practices.
                 </div>
              </div></div><!-- # Faq item-->


              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                    <span class="num">7.</span>
                    What kind of support do you provide after purchasing a drone?
                  </button>
                </h3>
                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  We offer ongoing technical support, ensuring that our customers have the assistance they need for optimal drone performance.                </div>
              </div></div><!-- # Faq item-->


              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                    <span class="num">8.</span>
                    Can your drones be used for organic farming
                  </button>
                </h3>
                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Yes, our drone solutions can be adapted for use in organic farming, providing precise and eco-friendly applications.                </div>
              </div></div><!-- # Faq item-->


              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
                    <span class="num">9.</span>
                    How do your drone spraying services contribute to sustainability?
                  </button>
                </h3>
                <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Our drone spraying services minimize environmental impact by precisely targeting areas that require treatment, reducing overall chemical usage.                </div>
              </div></div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10">
                    <span class="num">10.</span>
                    Are your drones compatible with precision agriculture software?
                  </button>
                </h3>
                <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Absolutely, our drones are designed for seamless integration with precision agriculture software, providing farmers with valuable data insights.             
                 </div></div></div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-11">
                    <span class="num">11.</span>
                    What sets your company apart from other agriculture drone providers?
                  </button>
                </h3>
                <div id="faq-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Our company prioritizes innovation, sustainability, and customer support, ensuring that our solutions meet the diverse needs of farmers.             
                 </div></div></div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-12">
                    <span class="num">12.</span>
                    Can your drones be used for large-scale farming operations?
                  </button>
                </h3>
                <div id="faq-content-12" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Yes, our drones are suitable for farms of all sizes, from small-scale to large-scale operations.               
                </div>
              </div></div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-13">
                    <span class="num">13.</span>
                    How does your drone spraying service work?
                  </button>
                </h3>
                <div id="faq-content-13" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Our drone spraying service utilizes advanced technology to precisely apply pesticides and fertilizers to crops, ensuring optimal coverage and minimizing waste.               
                </div>
              </div></div><!-- # Faq item-->


              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-14">
                    <span class="num">14.</span>
                    How much does your drone spraying service cost?
                  </button>
                </h3>
                <div id="faq-content-14" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  The cost for our spraying service is Rs 400 per acre. Different crop types may have varying service charges based on specific requirements.               
                </div>
              </div></div><!-- # Faq item-->



              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-15">
                    <span class="num">15.</span>
                    Are there additional charges for spraying different types of crops?
                  </button>
                </h3>
                <div id="faq-content-15" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Yes, there may be variations in service charges based on the specific needs and characteristics of different crop types.               
                </div>
              </div></div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-16">
                    <span class="num">16.</span>
                    How long does the drone spraying service take?
                  </button>
                </h3>
                <div id="faq-content-16" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  The duration of our drone spraying service 7 minutes per acres and also it depends on factors such as the size of the area and the type of crop. We ensure efficient and timely operations.               
                </div>
              </div></div><!-- # Faq item-->




            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- <script>
    $("#hero").mousemove(function (e) {
  var moveX = (e.pageX * -1) / 2 + 300;
  var moveY = (e.pageY * -1) / 3 + 120;
  $("#drone-box").css({
    transform: "translate3d(" + moveX + "px," + moveY + "px,0)"
  });
});
  </script> -->
  <script>
  $("#hero").mousemove(function (e) {
    var containerWidth = $(this).width();
    var containerHeight = $(this).height();
    var droneWidth = $("#drone-box").width();
    var droneHeight = $("#drone-box").height();

    var moveX = Math.min(Math.max((e.pageX - containerWidth / 2) / 2, -containerWidth / 4 + droneWidth / 2), containerWidth / 4 - droneWidth / 2);
    var moveY = Math.min(Math.max((e.pageY - containerHeight / 3) / 3, -containerHeight / 3), 0);

    $("#drone-box").css({
      transform: "translate3d(" + moveX + "px," + moveY + "px,0)"
    });
  });
</script>

<script>
  function read_more() {
  var readmore = $(".read_more");
  var comment = $(".review_comment p").text();

  //goes through each index of the array of 'review_comment p'
  $(".review_comment p").each(function (i) {
    //calculates height of comment variable
    var commentheight = $(this).height();
    //calculates scroll height of comment on each div
    var scrollcommentheight = $(".review_comment p")[i].scrollHeight;
    console.log("This is the comment height" + " - " + commentheight);
    console.log("This is the scroll height" + " - " + scrollcommentheight);
    //if comment height is same as scroll height then hide read more button
    if (commentheight == scrollcommentheight) {
      $(this).siblings(readmore).hide();
    }
    //otherwise read more button shows
    else {
      $(this).siblings(readmore).text("Read More");
    }
  });

  readmore.on("click", function () {
    var $this = $(this);
    event.preventDefault();

    $this.siblings(".review_comment p").toggleClass("active");

    if ($this.siblings(".review_comment p").text().length < 230) {
      $this.text("Read More");
    }
    if ($(".review_comment p").hasClass("active")) {
      $this.text("Read Less");
    } else {
      $this.text("Read More");
    }
  });
}

$(function () {
  //Calling function after Page Load
  read_more();
});

</script>


  @include('Farmer.footer')
