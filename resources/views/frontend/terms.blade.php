@extends('frontend.layouts.master')
@section('content')

<section class="breadcrumb contact mb-0">
    <div class="inner text-center px-4">
        <h2>{{\App\Models\Master::where('softcode','=','terms')->first()->hardcode}}</h2>
    </div>
</section>


<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">



                <div class="col-lg-12 py-5">
                    <p class="sinking">{!!\App\Models\Master::where('softcode','=','terms')->first()->details!!}</p>
                </div>


            </div>
        </div>
    </div>

    
    
</footer>


@endsection

@section('script')

@endsection