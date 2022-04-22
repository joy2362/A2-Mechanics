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
            <div class="row my-3">
                <!-- changing team leader img styles  -->
                <div class="col-md-6 d-flex justify-content-center" >
                    <img class="img-fluid rounded-pill" src="{{$Founder_image}}" alt="Card image cap" style="height: 330px;">
                </div>
                <div class="col-md-6 py-5">
                    <h5>{{$Founder_name}}</h5>
                    <h4 class="font-weight-bold">{{$Founder_designation}}</h4>
                    <p>{{$Founder_message}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($team as $row)
                    <div class="col-md-3 col-12 pb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="card shadow m-auto members"  style="width: 14rem;">
                            <div class="position-relative">
                                <img class="card-img-top" src="{{$row->avatar}}" alt="Card image cap">
                                <div  class="teams" >
                                    <p class="card-text py-2  text-center">{{$row->designation}}</p>
                                </div>
                            </div>

                            <div class="card-body text-center" >
                                <h6 class="card-title ">{{$row->name}}</h6>
                                <!--  2114023124 -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection