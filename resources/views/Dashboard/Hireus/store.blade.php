@extends('dashboard')

@section('content')

    <div class="container">
        @if (session('success'))
        <h6 class="alert alert-warning mb-3">{{ session('success') }}</h6>  
        @endif
        <h1>Hireus Add</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"  style="text-align: center;"></div>

                    <div class="card-body">


                        <form method="POST" action="{{url('/admin/storehireus')}}"  enctype="multipart/form-data">



                        @csrf

                           







                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name="image"  required autocomplete="image" >

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>
    
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
    
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="old_price" class="col-md-4 col-form-label text-md-end">{{ __('old_price') }}</label>
    
                                <div class="col-md-6">
                                    <input id="old_price" type="text" class="form-control @error('old_price') is-invalid @enderror" name="old_price" value="{{ old('old_price') }}" required autocomplete="old_price" autofocus>
    
                                    @error('old_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="off" class="col-md-4 col-form-label text-md-end">{{ __('off') }}</label>
    
                                <div class="col-md-6">
                                    <input id="off" type="text" class="form-control @error('off') is-invalid @enderror" name="off" value="{{ old('off') }}" required autocomplete="off" autofocus>
    
                                    @error('off')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                          


                            <div class="row mb-3">
                                <label for="discription" class="col-md-4 col-form-label text-md-end">{{ __('discription') }}</label>
    
                                <div class="col-md-6">
                                    <input id="discription" type="text" class="form-control @error('discription') is-invalid @enderror" name="discription" value="{{ old('discription') }}" required autocomplete="availability" autofocus>
    
                                    @error('discription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
