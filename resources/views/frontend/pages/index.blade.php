@extends('frontend.layouts.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>{{$App_Name}}</spa>
        </h1>
        <h2>We Are Your Partners in Software Development</h2>
        <div class="d-flex">
            <a href="contact.html" class="btn-get-started scrollto">Contact us</a>
            <a href="https://www.youtube.com/watch?v=7ovC50IYzxo" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
        </div>
    </div>
</section><!-- End Hero -->



<section id="services">
    <div class="container ">
        <div class="section-title">
            <h2>Our works</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, .</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <div class="row">

                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100"  src="{{asset('frontend/img/1.jpg')}}" alt="First slide"></a>
                        </div>
                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/2.jpg')}}" alt="First slide"></a>                </div>
                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/3.jpg')}}" alt="First slide"></a>                </div>

                        <div class="col" id="teamView">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/5.jpg')}}" alt="First slide"></a>                </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="row">

                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/2.jpg')}}" alt="second slide"></a>
                        </div>
                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/3.jpg')}}" alt="second slide"></a>
                        </div>
                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/5.jpg')}}" alt="second slide"></a>
                        </div>

                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/1.jpg')}}" alt="second slide"></a>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="row">

                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/3.jpg')}}" alt="third slide"></a>                </div>
                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/5.jpg')}}" alt="third slide"></a>                </div>
                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/1.jpg')}}" alt="third slide"></a>                </div>

                        <div class="col">
                            <a href="./pages/works_view.html"><img class="d-block w-100" id="teamview" src="{{asset('frontend/img/2.jpg')}}" alt="third slide"></a>                </div>
                    </div>
                </div>
            </div>

            <!-- changing position and color - 943 & 947 -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="border-radius: 50%; height: 40px; width: 40px; background-color: blue;" >
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="border-radius: 50%; height: 40px; width: 40px; background-color: blue;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span> <!-- removed background color -->
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div style="float: right; padding: 10px 10px;"><a href="our_works.html" >Read More</a></div>
    </div>
</section>

<section id="about" class="section-bg">
    <div class="container px-4">
        <div class="section-title">
            <h2 class="py-2">About Us</h2>
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h4>
        </div>

        <div class="row">
            <div class="col-md-6 " data-aos="zoom-out" data-aos-delay="100">
                <!-- rounded corner img -->
                <img src="{{$About_Us_Image}}" class="cap img-fluid rounded">
            </div>

            <!-- showing about content on click in home page -->
            <div class="col-md-6 py-3">
                <p>{!! $About_Us !!}
                    <!-- change curson icon -->
                </p>
                <a  href="{{route('about')}}" class="text-primary font-weight-bold"> Read More</a>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="blog">
    <div class="container ">
        <div class="section-title">
            <h2>Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            </p>
        </div>
        <!-- changing card-body backrgound on hover - 959 -->
        <div class="row">
            <div class="col-md-4 col-12 pb-5" >
                <a href="./pages/blog.html" >
                    <div class="card shadow m-auto"  >
                        <img class="card-img-top" src="{{asset("frontend/img/portfolio/2.jpg")}}" alt="Card image cap">
                        <div class="card-body cap" style="transition: all 0.3s;" >
                            <h4 class="card-title">World Bank</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>Read more</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-12  pb-5">
                <a href="./pages/blog.html" >
                    <div class="card shadow m-auto" >
                        <img class="card-img-top" src="{{asset('frontend/img/portfolio/1.jpg')}}" alt="Card image cap">
                        <div class="card-body cap" style="transition: all 0.3s;" >
                            <h4 class="card-title">Crypto currency depreciation</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>Read more</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-12  pb-5">
                <a href="./pages/blog.html" >
                    <div class="card shadow m-auto" >
                        <img class="card-img-top" src="{{asset('frontend/img/portfolio/3.jpg')}}" alt="Card image cap">
                        <div class="card-body cap" style="transition: all 0.3s;" >
                            <h4 class="card-title">Software Development</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>Read more</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<section id="team">
    <div class="container text-center ">
        <div class="section-title">
            <h2>Our TEAM</h2>
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt </p>
        <div class="row">
            <div class="col-md-4 col-12 pb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow m-auto  members"  >
                    <div class="position-relative">
                        <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap">
                        <!-- changing designation background color -  969 -->
                        <div class="teams"> <p class="card-text py-2">CEO</p></div>
                    </div>

                    <div class="card-body text-center" >
                        <h4 class="card-title">Mrs. Cecilia</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12  pb-5">
                <div class="card shadow m-auto  members"   data-aos="fade-down" data-aos-delay="100">
                    <div class="position-relative">
                        <img class="card-img-top" src="{{asset('frontend/img/team/team-1.jpg')}}" alt="Card image cap">
                        <div class="teams" > <p class="card-text py-2">WEB PROGRAMMER.</p></div>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">Dr. James Williams</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12  pb-5">
                <div class="card shadow m-auto  members" data-aos="fade-right" data-aos-delay="100">
                    <div class="position-relative">
                        <img class="card-img-top" src="{{asset('frontend/img/team/team-4.jpg')}}" alt="Card image cap">
                        <div class="teams" > <p class="card-text py-2">WEB DESIGNER.</p>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">Lovely Evelyn</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== contact start here === -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <h3><span>Contact Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <div class="row">
            <div class="col-md-4 ">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 col-10 col-lg-12 m-auto">

                        <!-- changing contact info background color on hover -  975 -->
                        <div class="info-box mb-4 cap">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>{{ $Address }}</p><br>
                            <i class="bx bx-envelope "></i>
                            <h3>Email Us</h3>
                            <p>{{$App_Email}}</p><br>
                            <i class="bx bx-phone-call "></i>
                            <h3>Call Us</h3>
                            <p>{{$App_Mobile}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 px-5 py-4 align-items-center d-flex" data-aos="fade-up" data-aos-delay="100">
                <form method="post" action="{{route('feedback.create')}}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Full name" id="name">
                                <p id="error"></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" style="height: 150px;" id="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" id="submit" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection