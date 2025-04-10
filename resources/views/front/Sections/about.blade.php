@extends('welcome')

@section('about')



<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>About Us</h2>
        <p>Learn More <span>About Us</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/7.jpg) ;"
          data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            <h4>GET TO US</h4>
            <p>+923086690935</p>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">

              Welcome to Cyberlark Solutions, where innovation meets cybersecurity excellence. At Cyberlark, we take
              pride in being your trusted partner in safeguarding your digital future. As a leading force in the realm
              of cybersecurity, we are dedicated to fortifying businesses against the ever-evolving landscape of cyber
              threats.

              Our Mission:
              At the core of Cyberlark Solutions is a commitment to empowering businesses with robust and cutting-edge
              security solutions. Our mission is to provide comprehensive protection against cyber threats, ensuring
              the resilience and continuity of your operations in an interconnected world.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> Providing SEIM solutions using Splunk Enterprise</li>
              <li><i class="bi bi-check2-all"></i> Threat hunting and promote business continuity </li>
              <li><i class="bi bi-check2-all"></i>Penetration Testing and Vulnerability Assestment.</li>
            </ul>
            <p>
              Expertise that Sets Us Apart:
              Cyberlark Solutions brings together a team of seasoned cybersecurity professionals, each a specialist in
              their domain. From threat intelligence and penetration testing to advanced security analytics, our
              experts work relentlessly to stay one step ahead of cyber adversaries. We understand that security is
              not a one-size-fits-all concept, and that's why we tailor our solutions to fit the unique needs and
              challenges of your business.
            </p>

            <div class="position-relative mt-4">
              <img src="products image/network security.jpg" class="img-fluid" alt="">
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


@endsection