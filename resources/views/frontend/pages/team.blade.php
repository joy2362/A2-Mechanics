@extends('frontend.layouts.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">Our Team</h2>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container ">
            <div class="section-title">
            </div>

            <div class="row my-3">
                <!-- changing team leader img styles  -->
                <div class="col-md-6 d-flex justify-content-center" >
                    <img class="img-fluid rounded-pill" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" style="height: 330px;">
                </div>
                <div class="col-md-6 py-5">
                    <h5>Dr. John Smith</h5>
                    <h4 class="font-weight-bold">Team Leader</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-12 pb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="card shadow m-auto members"  style="width: 14rem;">

                        <div class="position-relative">
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap">
                            <div  class="teams" >
                                <p class="card-text py-2  text-center">CEO</p>
                            </div>
                        </div>

                        <div class="card-body text-center" >
                            <h6 class="card-title ">Mrs. Cecilia</h6>
                            <!--  2114023124 -->
                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-12  pb-5">
                    <div class="card shadow m-auto members" style="width: 14rem;" data-aos="fade-down" data-aos-delay="100">
                        <div class="position-relative">
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap">
                            <div class="teams"> <p class="card-text py-2 pl-3 text-center">WEB PROGRAMMER.</p></div>
                        </div>

                        <div class="card-body text-center">
                            <h6 class="card-title ">Dr. James Williams</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12  pb-5">
                    <div class="card shadow m-auto members" style="width: 14rem;" data-aos="fade-right" data-aos-delay="100">
                        <div class="position-relative">
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap">
                            <div class="teams" > <p class="card-text py-2 pl-3 text-center">WEB DESIGNER.</p></div>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title ">Lovely Evelyn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12  pb-5">
                    <div class="card shadow m-auto members"  style="width: 14rem;" data-aos="fade-right" data-aos-delay="100">

                        <div class="position-relative">
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap">
                            <div class="teams" >
                                <p class="card-text py-2 pl-3 text-center">WEB DESIGNER.</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h6 class="card-title ">Lovely Evelyn</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection