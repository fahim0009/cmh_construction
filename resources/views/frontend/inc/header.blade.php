<!-- header -->
<section class="siteHeader">

<nav class="navbar navbar-expand-lg   py-0  shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage')}}">
            <img src="{{url('images/company/'.\App\Models\CompanyDetail::first()->company_logo)}}" class="p-1 img-fluid mx-auto" width="180px">
        </a>
        <button class="navbar-toggler border" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="iconify text-danger" data-icon="charm:menu-hamburger"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                
            <ul class="navbar-nav ms-auto navCustomRight">
                <li class="nav-item simple-link m-1">
                    <a href="{{ route('homepage')}}" class="nav-link rounded">Home</a>
                </li>
                <li class="nav-item simple-link m-1">
                    <a href="{{ route('residential')}}" class="nav-link rounded">Residential</a>
                </li>
                <li class="nav-item simple-link m-1">
                    <a href="{{ route('commercial')}}" class="nav-link rounded">Commercial</a>
                </li>
                
                <li class="nav-item m-1 ">
                    <a class="nav-link rounded "
                        style="background-color: #00404D; font-family: 'Sinkin Sans-light-300'; font-weight: normal;"
                        href="{{ route('contact')}}">Contact us</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>
</section>