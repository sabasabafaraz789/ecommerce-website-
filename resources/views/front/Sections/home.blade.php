@extends('welcome')

@section('home')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Securing the Digital World From<br>Digital Threats</h2>
          <p data-aos="fade-up" data-aos-delay="100">Our cyber team is here to assist the world by providing the best
            solutions against cyber crimes.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{url('/team')}}" class="btn-book-a-table">Reach us</a>
           
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/main.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

@endsection