@extends('welcome')
@section('cart')
<div class="container">
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
{{--                @foreach($product as $products)--}}
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                                        class="fas fa-angle-down mt-1"></i></a></p>
                        </div>
                    </div>
                    @if(isset($product))
                    @foreach($product as $pro)

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img
                                        src="{{ asset($pro['item']['image']) }}"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">{{ $pro['item']['name'] }}</p>
                                    {{-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p> --}}
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <a href="{{route('decrease',['id'=>$pro['item']['id']])}}" class="btn btn-primary">-</a>

                                    {{-- <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button> --}}
                                    <span id="form1" min="0" name="quantity" value="" type="number"
                                          class="form-control form-control-sm"  style="width:25px; border:none">{{ $pro['qty'] }}</span>
                                    {{-- <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button> --}}
                                    <a href="{{route('increase',['id'=>$pro['item']['id']])}}" class="btn btn-primary">+</a>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0" >${{ $pro['item']['price'] }}</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    {{-- <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="col-12">
                        <h3>$ {{ $totalPrice }}</h3>
                    </div>
                    @else
                        <h1>No Item </h1>
                   @endif
                    
                        <form  action="{{ route('payment') }}" 
                        method="post"  >
                            @csrf
                         
                            <input type="hidden" name="amount" value="{{ $totalPrice }}"> 
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Proceed to Pay') }}
                                    </button>
                                </div>
                            </div>
                        </form>







                     


                       
                        

          

                </div>
            </div>
        </div>
    </section>


  

</div>

@endsection
