@extends('welcome')

@section('products')




<!-- ======= Products Section ======= -->
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
     
      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
            <h4>TOP RATED TOOLS</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>HACKING COURSES</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>HACKING SERVICES</h4>
          </a>
        </li><!-- End tab nav item -->


      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-starters">

          <div class="tab-header text-center">
            <p>PRODUCTS</p>
            <h3>HACKING TOOLS</h3>
          </div>

          <div class="row gy-5">

           @foreach ($products as $product)
             
            <div class="col-lg-4 menu-item">
              {{-- <a href="products image/call spoofing.png" class="glightbox"><img src="products image/call spoofing.png"
                  class="menu-img img-fluid" alt=""></a> --}}

                  <a href="{{ url($product->image)}}" class="glightbox"><img src="{{ url($product->image)}}"  class="menu-img img-fluid" alt=""></a>
                  {{-- <p class="ingredients">
                    {{  $product->description}}
                  </p> --}}
              <h4>{{$product->name}}</h4>
             
              <p class="price">
                <del> <small>   ${{$product->old_price}}</small></del>
                <span>  {{$product->off}}</span>
                <br>
                <span>  ${{$product->price}}</span>
              </p>

              <a href="{{ url('add-to-cart/'.$product->id) }}" class="add-to-cart btn-success btn btn-sm" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Add to cart</a>
            

            </div><!-- Menu Item -->
            
           @endforeach

{{-- 
            @if($price)
            <del><small>{{ $price }}</small></del>
        @else
            <span style="display: none;">30% off</span>
        @endif --}}

          </div>
        </div>
        <!-- End Starter Menu Content -->




        
        <div class="tab-pane fade" id="menu-breakfast">

          <div class="tab-header text-center">
            <p>COURSES</p>
            <h3>TOP HACKING COURSES</h3>
          </div>

          <div class="row gy-5">

            @foreach ($courses as $course)
             
            <div class="col-lg-4 menu-item">
              {{-- <a href="products image/call spoofing.png" class="glightbox"><img src="products image/call spoofing.png"
                  class="menu-img img-fluid" alt=""></a> --}}

                  <a href="{{ url($course->image)}}" class="glightbox"><img src="{{ url($course->image)}}"  class="menu-img img-fluid" alt=""></a>

              <h4>{{$course->name}}</h4>
              <p class="ingredients">
                {{$course->description}}
              </p>
              <p class="price">
                <del> <small>   ${{$course->old_price}}</small></del>
                <span>  {{$course->off}}</span>
                <br>
                <span>  ${{$course->price}}</span>
              </p>
              <a href="{{ url('add-to-cart/'.$product->id) }}" class="add-to-cart btn-success btn btn-sm" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Add to cart</a>
            </div>
            
           @endforeach
           <!-- Menu Item -->



         

          </div>
        </div>
        <!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
            <p>HIRE US</p>
            <h3>BEST PENETRATION TESTERS</h3>
          </div>

          <div class="row gy-5">

            @foreach ($hireus as $hire)
             
            <div class="col-lg-4 menu-item">
              {{-- <a href="products image/call spoofing.png" class="glightbox"><img src="products image/call spoofing.png"
                  class="menu-img img-fluid" alt=""></a> --}}

                  <a href="{{ url($hire->image)}}" class="glightbox"><img src="{{ url($hire->image)}}"  class="menu-img img-fluid" alt=""></a>

              <h4>{{$hire->name}}</h4>
              <p class="ingredients">
                {{$hire->description}}
              </p>
              <p class="price">
                <del> <small> ${{$hire->old_price}}</small></del>
                <span>  {{$hire->off}}</span>
                <br>
                <span>  ${{$hire->price}}</span>
              </p>
              <a href="{{ url('add-to-cart/'.$product->id) }}" class="add-to-cart btn-success btn btn-sm" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Add to cart</a>
            </div>
            
           @endforeach
           <!-- Menu Item -->

            







          </div>
        </div><!-- End Lunch Menu Content -->

      </div>

    </div>
  </section><!-- End Menu Section -->




@endsection