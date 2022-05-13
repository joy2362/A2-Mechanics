@extends('frontend.layouts.main')
@section('head')
    <meta content="{{$terms_page->meta_description}}" name="description">
    <meta content="{{$terms_tag}}" name="keywords">
    <title>{{$terms_page->title. ' - '.$App_Name}}</title>
@endsection
@section('content')
    <!-- ==== terms start here === -->
    <section id="contact" class="contact" style="padding-top: 150px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>{{$terms_page->title}}</span></h3>
                <p class="text-center">{{$terms_page->sub_title}}</p>
            </div>
            <div class="row p-5">
                <p>{!! $terms_and_condition !!}</p>
            </div>
        </div>
    </section>
@endsection