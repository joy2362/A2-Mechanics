@extends('frontend.layouts.main')
@section('content')


    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title -->
                <h2 class="font-weight-bold text-primary text-center">Our works</h2>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>



    <section id="services">
        <div class="container ">
            <div class="section-title">
                <h4 class="font-weight-bold ">INTERNSHIP</h4>
            </div>
            <div class="row">
                <div class="col-md-12 col-12 "  >
                    <img class="card-img-top" id="viewImg" src="{{asset('frontend/img/portfolio/portfolio-8.jpg')}}" alt="Card image cap" >
                </div>
                <div class="col-md-12 col-12  box">
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
                                        <img class="d-block w-100" src="{{asset('frontend/img/1.jpg')}}" alt="First slide" id="imgOne">
                                    </div>
                                    <div class="col">
                                        <img class="d-block w-100" src="{{asset('frontend/img/2.jpg')}}" alt="First slide" id="imgTwo">
                                    </div>
                                    <div class="col">
                                        <img class="d-block w-100" src="{{asset('frontend/img/3.jpg')}}" alt="First slide" id="imgThree">
                                    </div>

                                    <div class="col">
                                        <img class="d-block w-100" src="{{asset('frontend/img/5.jpg')}}" alt="First slide" id="imgFour">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Description</h4>
            <p class="text-jusitify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>
                <span>
                    <i class="px-3">share with...</i>
                    <a href="https://api.whatsapp.com/send?text=www.google.com"      data-action="share/whatsapp/share"
                       target="_blank">
                          <i class="icofont-whatsapp text-success"></i>
                    </a>

                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://gogle.com" target="_blank">
                      <i class="icofont-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=https://google.com" target="_blank">
                      <i class="icofont-twitter"></i>
                    </a>
                </span>
            </p>
        </div>
    </section>
@endsection