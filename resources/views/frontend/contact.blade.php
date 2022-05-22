@extends('frontend.layouts.master')
@section('content')
<section class="breadcrumb contact mb-0">
    <div class="inner text-center px-4">
        <h2>Contact Us</h2>
    </div>
</section>
<section class="infoBox py-5">
   <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row mb-5">
                <div class="col-md-12" >
                    <div class="row p-4 m-0"style="background: #dddddd;">
                        <div class="ermsg"></div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="name">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder=" ">
                            </div>
                        </div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="name">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder=" ">
                            </div>

                        </div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder=" ">
                            </div>
                        </div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="email">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder=" ">
                            </div>
                        </div>


                        <div class="col-md-12 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="#">Message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" id="submit" value="Send Message" class="btn bg-theme  text-white mt-3">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4" style="background-color: #ddd;">
             <h4 class="text-center bg-theme text-white p-2">Contact Address</h4>
             <div class="my-3">
                <b>{{\App\Models\CompanyDetail::first()->company_name}}</b> <br>
                <span class="sinking-light">
                    {{\App\Models\CompanyDetail::first()->address}}
                </span>

                <h5 class="mt-4 ">Opening Hours</h5>
                <small class="sinking-light">  {{\App\Models\CompanyDetail::first()->google_play_link}}</small>

             </div>
            </div>
         </div>
    </div>

   </div>
</section>

<section class=" ">
    <div class="container">
        <div class="row mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810622145!2d-0.24168183442752736!3d51.52877184100475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1649830428355!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>





@endsection

@section('script')
<script>
     $(document).ready(function () {


 //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

            //  make mail start
            var url = "{{URL::to('/contact-submit')}}";
            $("#submit").click(function(){

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
@endsection
