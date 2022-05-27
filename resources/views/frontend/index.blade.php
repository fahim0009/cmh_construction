@extends('frontend.layouts.master')
@section('content')





    <section class="banner">
        <img src="{{asset('frontend/slider/'.\App\Models\Slider::first()->photo)}}" class="bannerPhoto">
        <div class="container h-100">
            <div class="row p-0 h-100 m-0">
                <div class="col-md-6 p-0 leftBlock"></div>
                <div class="col-md-6 p-0 position-relative  d-flex align-items-center justify-content-center">
                    <div class="w-100 p-4 slideText ">
                        <h1 class="text-white sinking-bold display-5">{{\App\Models\Slider::first()->title}}</h1>
                        <p class=" text-white sinking-light para">{{\App\Models\Slider::first()->caption}}
                        </p>
                    </div>
                </div>
            </div>
            <a href="{{ route('getquote')}}" class="quote">
                <img src="{{asset('assets/images/arrow.png')}}" class="arrowDown">
                Get a quote
            </a>
        </div>
    </section>






    <section class="linkUp bg-secondary p-3">
        <div class="container">
            <div class="row text-center">
                <div class="links">
                    <a href="{{ route('commercial')}}">Commercial</a>|
                    <a href="{{ route('residential')}}">Residential</a>|
                    <a href="{{ route('newbuild')}}">New Build</a>|
                    <a href="{{ route('developing')}}">Developing</a>
                </div>
            </div>
        </div>
    </section>

   
    <section class=" pt-2 pb-2 steps">
        <div class="container px-4" id="featured-3">

            <div class="row pt-5 pb-3">
                <div class="col-md-5">
                    <h1 class="sectitle pb-2 text-uppercase  sinking-bold fw-bold">
                        <span> Our</span>
                        <span> Latest </span>
                        <span> Projects </span>
                    </h1>
                </div>
                <div class="col-md-4 pb-3 lh" style="position: relative;">
                    <small class=" textAdjust sinking-light text-theme" style="line-height:17px !Important">
                        <p>
                        {!!\App\Models\Master::where('softcode','=','homepage')->first()->details!!}</p>
                    </small>
                </div>
            </div>
            
            <img src="{{asset('assets/images/bg.png')}}" class="bgPhoto">
        </div>
       
        </div>
    </section>
    <section class="border-top  py-0 projects">
        <div class="container px-4 mt-3">
            
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


                @foreach (\App\Models\Property::limit(9)->get() as $data)
                    <div class="feature col">
                        <div class="project-box shadow-sm">
                            <a href="{{ route('property-details', $data->id)}}" style="text-decoration:none;">
                                <div class="photo">
                                    <div class="tag">{{ $data->category}}</div>
                                    <img src="{{ asset('images/property/'.$data->image) }}" class="img-fluid">
                                    <div class="bottomInfo">
                                        <div><span class="iconify" data-icon="clarity:map-marker-solid"></span> {{ $data->location}}</div>
                                        <div><span class="iconify" data-icon="ant-design:camera-filled"></span> {{ $data->view}}</div>
                                    </div>
                                </div>
                                <h4 class="title">{{ $data->title}}</h4>
                            </a>
                        </div>

                    </div>
                @endforeach

            

            </div>
        </div>

    </section>

    @include('frontend.inc.contact')
@endsection

@section('script')

@endsection