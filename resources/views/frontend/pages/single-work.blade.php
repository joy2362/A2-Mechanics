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
                <h4 class="font-weight-bold ">{{$work->title}}</h4>
            </div>
            <div class="row">
                <div class="col-md-12 col-12 "  >
                    <img class="card-img-top" id="viewImg" src="{{$work->attachments[0]}}" alt="Card image cap" >
                </div>
                <div class="col-md-12 col-12  box">
                    <div class="owl-carousel owl-theme">
                        @foreach ($work->attachments as $row)
                            <div class="item mx-2">
                               <img src="{{$row}}" alt="" class="selectImg" >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <h4>Description</h4>
            <p class="text-jusitify">{!! $work->description !!}</p>
            <p>
                <span>
                    <i class="px-3">share with...</i>
                    <a href="https://api.whatsapp.com/send?text={{route('single.work',$work->id)}}" data-action="share/whatsapp/share"
                       target="_blank">
                          <i class="icofont-whatsapp text-success"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('single.work',$work->id)}}" target="_blank">
                      <i class="icofont-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{route('single.work',$work->id)}}" target="_blank">
                      <i class="icofont-twitter"></i>
                    </a>
                </span>
            </p>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function changeImg(param) {
            $('#viewImg').attr("src", param);
        }

        $(document).ready(function(){
            $('.owl-carousel').owlCarousel();
            $(document).on('click','.selectImg',function(e){

                console.log($(this).attr("src"));
                $('#viewImg').attr("src", $(this).attr("src"));
            });
        });
    </script>
@endsection