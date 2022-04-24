@extends('frontend.layouts.main')
@section('head')
    <meta content="{{$home_page->meta_description}}" name="description">
    <meta content="{{$home_tag}}" name="keywords">
    <title>{{$home_page->title. ' - '.$App_Name}}</title>
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image: url('{{$Hero_section_image}}')">
{{--    Hero_section_image--}}
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>{{$App_Name}}</span>
        </h1>
        <h2>{{$Hero_section_message}}</h2>
        <div class="d-flex">
            <a href="{{route('contact')}}" class="btn-get-started scrollto">Contact us</a>
            <a href="{{$Youtube_link}}" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
        </div>
    </div>
</section>
<!-- End Hero -->
<section id="services">
    <div class="container ">
        <div class="section-title">
            <h2>{{$work_page->title}}</h2>
            <p>{!! $work_page->sub_title !!}</p>
        </div>
            <div class="owl-carousel owl-theme">
                @foreach ($work as $row)
                    <div class="item mx-2">
                        <a href="{{route('single.work',$row->id)}}"><img src="{{$row->attachments[0]}}" alt=""></a>
                    </div>
                    @endforeach
            </div>

        <div style="float: right; padding: 10px 10px;"><a href="{{route('work')}}" >Read More</a></div>
    </div>
</section>

<section id="about" class="section-bg">
    <div class="container px-4">
        <div class="section-title">
            <h2>{{$about_page->title}}</h2>
            <p>{!! $about_page->sub_title !!}</p>

        </div>

        <div class="row">
            <div class="col-md-6 " data-aos="zoom-out" data-aos-delay="100">
                <img src="{{$About_Us_Image}}" class="cap img-fluid rounded">
            </div>
            <!-- showing about content on click in home page -->
            <div class="col-md-6 py-3">
                <p>{!! $About_Us !!}</p>
                <a href="{{route('about')}}" class="text-primary font-weight-bold"> Read More</a>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="blog">
    <div class="container ">
        <div class="section-title">
            <h2>{{$blog_page->title}}</h2>
            <p>{!! $blog_page->sub_title !!}</p>
        </div>
        <div class="row">
            @foreach($blog as $row)
                <div class="col-md-4 col-12 pb-5" >
                    <a href="{{route('blog',$row->id)}}" >
                        <div class="card shadow m-auto"  >
                            <img class="card-img-top" src="{{$row->attachment}}" alt="Card image cap">
                            <div class="card-body cap" style="transition: all 0.3s;" >
                                <h4 class="card-title">{{$row->name}}</h4>
                                <p class="card-text">{!!   \Illuminate\Support\Str::limit($row->description, 150)  !!} </p>
                                <p>Read more</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="team">
    <div class="container text-center ">
        <div class="section-title">
            <h2>{{$team_page->title}}</h2>
            <p>{!! $team_page->sub_title !!}</p>
        </div>
        <div class="row">
            @foreach($team as $row)
                <div class="col-md-4 col-12  pb-5">
                    <div class="card shadow m-auto  members"  data-aos="fade-down" data-aos-delay="100">
                        <div class="position-relative">
                            <img class="card-img-top" src="{{$row->avatar}}" alt="Card image cap">
                            <div class="teams" > <p class="card-text py-2">{{$row->designation}}</p></div>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$row->name}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==== contact start here === -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{$contact_page->title}}</h2>
            <p>{!! $contact_page->sub_title !!}</p>
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
                        <input type="submit" value="Send" class="btn btn-primary" id="submit" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel();
        });
    </script>
@endsection