@extends('frontend.layouts.main')
@section('head')
    <meta content="{{$about_page->meta_description}}" name="description">
    <meta content="{{$about_tag}}" name="keywords">
    <title>{{$about_page->title. ' - '.$App_Name}}</title>
@endsection
@section('content')
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">{{$about_page->title}}</h2>
                <p class="text-center">{!! $about_page->sub_title !!}</p>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>

    <section id="about" >
        <div class="container px-4">

            <div class="row">
                <div class="col-md-6 m-auto">
                    <!-- rounded corner img -->
                    <img src="{{$About_Us_Image}}" alt="about us" class="cap img-fluid rounded">
                </div>
                <div class="col-md-6 py-3">
                    <p> {!! $About_Us !!} </p>
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
                    <h5>{{$Founder_name}}</h5>
                    <h4 class="font-weight-bold">{{$Founder_designation}}</h4>
                    <p>{{$Founder_message}}</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center" >
                    <img class="img-fluid rounded" src="{{$Founder_image}}" alt="Card image cap" style="height: 330px;">
                </div>
            </div>
        </div>
    </section>
@endsection