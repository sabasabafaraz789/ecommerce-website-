@extends('dashboard')

@section('content')

    <div class="container">
        @if (session('success'))
        <h6 class="alert alert-warning mb-3">{{ session('success') }}</h6>  
        @endif
        <h1>Admin Update</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;"></div>

                    <div class="card-body">

                        <form method="post" action="{{ url('/admin/updateusers', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                          

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror"  name="name" value="{{ $user->name }}">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ $user->email }}">


                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>


                           





                               
                            
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror"  name="password"   value="{{ $user->password }}">


                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="confirmpassword" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="confirmpassword" type="password" class="form-control  @error('confirmpassword') is-invalid @enderror"  name="confirmpassword">

                                    @error('confirmpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                            </div>



    
                  
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                          
                           


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



