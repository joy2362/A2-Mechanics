@extends('frontend.layouts.main')
@section('content')
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">About Us</h2>
                <hr style="width: 40%; color: blue;">

            </div>
        </div>
    </section>

    <section id="about" >
        <div class="container px-4">
            <div class="section-title">

            </div>

            <div class="row">
                <div class="col-md-6 m-auto">
                    <!-- rounded corner img -->
                    <img src="{{asset('frontend/img/web.jpg')}}" class="cap img-fluid rounded">
                </div>
                <div class="col-md-6 py-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,

                    </p>
                    <p id="aboutContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                    <p id="hideAbout" style="display: none;" class="text-primary font-weight-bold"> Hide More</p>
                </div>
            </div>
        </div>
    </section>


    <section id="team">
        <div class="container ">
            <div class="section-title">

            </div>

            <div class="row my-3">
                <!-- changing team leader img styles  -->

                <div class="col-md-6 py-5 text-center">
                    <h5>Dr. John Smith</h5>
                    <h4 class="font-weight-bold">Founder</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center" >
                    <img class="img-fluid rounded" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" style="height: 330px;">
                </div>
            </div>
        </div>
    </section>
@endsection