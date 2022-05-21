@extends('frontend.layouts.master')
@section('content')

<section class="breadcrumb contact mb-0">
    <div class="inner text-center px-4">
        <h2>New Build</h2>
        <!-- <small><a href="" >Your Builders London</a>  /  Contact Your Builders London Ltd</small> -->
    </div>
</section>

<section class="border-top  py-0 projects">
    <div class="container px-4 mt-3">
        
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">



            @foreach (\App\Models\Property::where('category','=', 'New Build')->limit(9)->get() as $data)
                    <div class="feature col">
                        <div class="project-box shadow-sm">
                            <a href="{{ route('property-details', $data->id)}}" style="text-decoration:none;">
                                <div class="photo">
                                    <div class="tag">New Build</div>
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





@endsection

@section('script')

@endsection