@extends('frontend.layouts.master')
@section('content')

<section class="project-details my-5">
    <div class="container">
        <h2 class="text-theme"><span class="iconify  " data-icon="bxs:hand-right"></span> {{$property->title}}</h2> <br>
        <div class="row">
            <div class="col-md-9">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                      @foreach (\App\Models\PropertyImage::where('property_id','=', $property->id)->get() as $key => $img)

                      @php
                          $allowed = array('gif', 'png', 'jpg', 'jpeg', 'gif', 'svg');
                          $filename = $img->image;
                          $ext = pathinfo($filename, PATHINFO_EXTENSION);
                      @endphp

                      @if (!in_array($ext, $allowed))
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$key}}" class="active" aria-current="true" aria-label="Slide 1">
                          <video width="100" height="80" controls>
                            <source src="{{asset('images/property/'.$img->image)}}" type="video/ogg">.
                          </video>
                        </button>
                      @else
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$key}}" class="active" aria-current="true" aria-label="Slide 1">
                          <img src="{{ asset('images/property/'.$img->image) }}" class="d-block w-100" alt="...">
                        </button>
                          
                      @endif

                        

                      @endforeach
                      

                    </div>

                    <div class="carousel-inner">

                      @foreach (\App\Models\PropertyImage::where('property_id','=', $property->id)->get() as $key => $img)

                      @php
                          $allowed = array('gif', 'png', 'jpg', 'jpeg', 'gif', 'svg');
                          $filename = $img->image;
                          $ext = pathinfo($filename, PATHINFO_EXTENSION);
                      @endphp

                      @if (!in_array($ext, $allowed))

                      <div class="carousel-item {{ $key==0 ? 'active' : '' }}" data-bs-interval="10000">
                        <video width="320" height="240" controls>
                          <source src="{{asset('images/property/'.$img->image)}}" type="video/ogg">.
                        </video>
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>

                      @else


                      <div class="carousel-item {{ $key==0 ? 'active' : '' }}" data-bs-interval="10000">
                        <img src="{{ asset('images/property/'.$img->image) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                          
                      @endif

                      @endforeach

                      
                      {{-- <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('assets/images/2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/images/3.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                      </div> --}}
                    </div>
                     
                  </div>
                <h3 class="mt-5 text-theme text-capitalize">About this property</h3> <hr> <br>
                 <div class="row">
                     
                     <div class="col-md-12">
                        <p class="text-muted">
                            {!! $property->description !!}
                        </p>
                     </div>
                 </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center bg-theme text-white p-2">Our Projects</h4>
                <div class="row projectLoader">
                    <div class="d-flex flex-column shadow-sm mb-3  py-2 more-project">
                        <a href="#" class="text-decoration-none">
                            <img src="./images/1.jpg" class="img-fluid mb-2">
                            <h5> Taylor Close</h5>
                        </a>
                    </div>
                    <div class="d-flex flex-column shadow-sm mb-3  py-2 more-project">
                        <a href="#" class="text-decoration-none">
                            <img src="./images/1.jpg" class="img-fluid mb-2">
                            <h5> Taylor Close</h5>
                        </a>
                    </div> 
                </div>
            </div>
        </div>

    </div>
</section>



@endsection

@section('script')

@endsection