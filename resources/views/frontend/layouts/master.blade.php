<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link name="favicon" type="image/x-icon" href="{{ asset(\App\Models\CompanyDetail::first()->fav_icon) }}" rel="shortcut icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMH</title>
    <link rel="icon" href="{{ asset('assets/images/favi.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('css')
</head>

<body>
    

        <!-- header part  -->


   
    @include('frontend.inc.header')
	

	@yield('content')

    @include('frontend.inc.footer')




    

    <!-- footer part here  -->
    
    <script src="{{ asset('assets/js/bootstrap-5.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/iconify.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script>
     $(document).ready(function () {


 //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

            //  make mail start
            var url = "{{URL::to('/contact-submit2')}}";
            $("#submit2").click(function(){


                    var fname= $("#fname").val();
                    var lname= $("#lname").val();
                    var email= $("#email").val();
                    var phone= $("#phone").val();
                    var message= $("#message").val();
                    $.ajax({
                        url: url,
                        method: "POST",
                        data: {fname,lname,email,phone,message},
                        success: function (d) {
                            if (d.status == 303) {
                                $(".ermsg").html(d.message);
                            }else if(d.status == 300){
                                $(".ermsg").html(d.message);
                                window.setTimeout(function(){location.reload()},2000)
                            }
                        },
                        error: function (d) {
                            console.log(d);
                        }
                    });

            });
            // send mail end


});
</script>

    @yield('script')
</body>

</html>