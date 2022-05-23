@extends('frontend.layouts.master')
@section('content')

<section class="breadcrumb mb-0">
    <div class="inner text-center px-4">
        <h2>Contact Your Builders Ltd</h2>
        <small><a href="" >Your Builders London</a>  /  Contact Your Builders London Ltd</small>
    </div>
</section>

<section class="infoBox py-5">
   <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="box text-center">
                        <h5><span class="iconify fs-2" data-icon="carbon:phone-voice-filled"></span> xxx xxx xxxx</h5>
                        <small>Get in touch with us</small>
                    </div>
                </div>
                <div class="col-md-6 ">
                   <div class="box text-center">
                    <h5> <span class="iconify fs-2" data-icon="ic:round-email"></span> info@youedomain.co.uk</h5>
                    <small>Send us an e-mail</small>
                   </div>
                </div>
            </div>
            <br><br>
            <div class="ermsg"></div>
            <div class="row my-5">
                <div class="col-md-12" >
                    <div class="row p-4 m-0"style="background: #dddddd;">
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="qfname">First Name</label>
                                <input type="text" class="form-control" name="qfname" id="qfname" placeholder=" ">
                            </div>
                        </div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="qlname">Last Name</label>
                                <input type="text" class="form-control" name="qlname" id="qlname" placeholder=" ">
                            </div>

                        </div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="email">Email Address</label>
                                <input type="email" class="form-control" name="qemail" id="qemail" placeholder=" ">
                            </div>
                        </div>
                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="email">Phone</label>
                                <input type="text" class="form-control" name="qphone" id="qphone" placeholder=" ">
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="#">Property Located</label>
                                <input type="text" class="form-control" name="qplocated" id="qplocated" placeholder=" ">
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="qmessage">Message</label>
                                <textarea name="qmessage" class="form-control" id="qmessage" cols="30" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <div class="form-group">
                                <label class="label mb-1" for="#">Images/Plans</label>
                                <input type="file" id="qfiles" name="qfiles" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" id="getquote" value="Send Message" class="btn bg-theme  text-white mt-3">
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
                <b>Your Company Ltd</b> <br>
                <span class="sinking-light">
                 162 your exact location <br>
                 London <br>
                </span>

                <h5 class="mt-4 ">Opening Hours</h5>
                <small class="sinking-light">  Monday – Friday: 9am – 5:00pm</small>

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
     var storedFiles = [];
    $(document).ready(function () {

     //header for csrf-token is must in laravel
     $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

                //  make mail start
                var url = "{{URL::to('/contact-getquote')}}";
                $("#getquote").click(function(){

                    var file_data = $('#qfiles').prop('files')[0];
                    var form_data = new FormData();

                    // len_files = $("#qfiles").prop("files").length;
                    // for (var i = 0; i < len_files; i++) {
                    //     var file_data = $("#qfiles").prop("files")[i];
                    //     storedFiles.push(file_data);
                    // }

                    // for(var i=0, len=storedFiles.length; i<len; i++) {
                    //     form_data.append('qfiles[]', storedFiles[i]);
                    // }

                    form_data.append("fname", $("#qfname").val());
                    form_data.append("lname", $("#qlname").val());
                    form_data.append("email", $("#qemail").val());
                    form_data.append("phone", $("#qphone").val());
                    form_data.append("plocated", $("#qplocated").val());
                    form_data.append("message", $("#qmessage").val());
                    form_data.append('qfiles', file_data);


                        $.ajax({
                            url: url,
                            method: "POST",
                            contentType: false,
                            processData: false,
                            data:form_data,
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
