
<footer id="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <a class="navbar-brand" href="{{ route('homepage')}}">
                            <img src="{{url('images/company/'.\App\Models\CompanyDetail::first()->company_logo)}}" class="p-1 img-fluid mx-auto" width="250px">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('homepage')}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about')}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('terms')}}">Terms & Conditions</a></li>
                            {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('privacy')}}">Privacy policy</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact ">
                        <h4>Contact Us</h4>
                        <p>{!!\App\Models\CompanyDetail::first()->address!!} <br> <strong>Phone:</strong>
                            {{\App\Models\CompanyDetail::first()->phone1}} <br> <strong>Email:</strong> {{\App\Models\CompanyDetail::first()->email1}}<br> </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3 class="text-uppercase">About FALCON</h3>
                        <p>{{\App\Models\CompanyDetail::first()->footer_link}}</p>
                        <div class="social-links mt-3">
                            <a href="{{\App\Models\CompanyDetail::first()->twiter}}" class="twitter">
                                <span class="iconify" data-icon="bxl:twitter"></span>
                            </a>
                            <a href="{{\App\Models\CompanyDetail::first()->facebook}}" class="facebook">
                                <span class="iconify" data-icon="bxl:facebook"></span>
                            </a>
                            <a href="{{\App\Models\CompanyDetail::first()->instagram}}" class="instagram">
                                <span class="iconify" data-icon="bxl:instagram-alt"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright text-white"> © Copyright <strong>
                    <span>Company</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
