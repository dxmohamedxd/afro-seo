
@include('layout.header')
<div class="container-xxl bg-white p-0 ">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg bg-light px-4 px-lg-5 py-3 py-lg-4">
                <a href="" class=" navbar-brand p-0">
                    <p class="m-0"><img src="img/logo-5.png" width='70px' ></p>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('index')}}"  class="nav-item nav-link active">{{ __('messages.home_page')}}</a>
                        <a href="{{route("about")}}"  class="nav-item nav-link">{{ __('messages.about')}}</a>
                        <a href="{{route('services')}}" class="nav-item nav-link">{{__('messages.service')}}</a>
                        <a href="{{route('project')}}" class="nav-item nav-link">{{ __('messages.project')}}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.pages')}}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('team')}}" class="dropdown-item">{{__('messages.team')}}</a>
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="nav-item nav-link">{{__('messages.contact')}}</a>

                        <div class="nav-item dropdown ">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.lang')}}</a>
                            <div class="dropdown-menu m-0 ">
                              <select class="form-control  changeLang ">
                                    <option value="en"  {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="ar"  {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>عربي</option>
                             </select>
                             </div>
                        </div>
                    </div>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">{{__("messages.version")}}</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-primary hero-header mb-3">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">All in one SEO tool need to grow your business rapidly</h1>
                            <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
       </div>
             
              <div>
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">All in one SEO tool need to grow your business rapidly</h1>
                            <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
  
