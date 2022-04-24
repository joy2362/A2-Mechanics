@extends('frontend.layouts.main')
@section('content')

    <section class="section-bg section_about mt-3">
        <div class="container " >
            <!-- centering title with text-center class -->
            <h2 class="font-weight-bold text-primary text-center">{{$work_page->title}}</h2>
            <p>{!! $work_page->sub_title !!}</p>
            <hr style="width: 40%; color: blue;">
        </div>
    </section>

    <section id="services">
        <div class="container py-3 ">
                @foreach($work as $row)
                @if(($loop->index+1)%2 == 1)
                       <div class="row shadow">
                            <div class="col-md-6 col-12 bg"  >
                                <a href="{{route('single.work',$row->id)}}">
                                    <img class="card-img-top" src="{{$row->attachments[0]}}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="col-md-6 col-12 box">
                                <h4 class="font-weight-bold">
                                    <a href="{{route('single.work',$row->id)}}">{{$row->title}}</a>
                                </h4>
                                <hr>
                                <p>{!! $row->description !!}
                                    <span class="text-primary font-weight-bold" id="showAbout">
                                <a href="{{route('single.work',$row->id)}}">See more</a>
                            </span>
                                    <br>
                                </p>
                                <!--  share url -->
                                <span>
                            <i class="px-3">share with...</i>
                            <a href="https://api.whatsapp.com/send?text={{route('single.work',$row->id)}}"  data-action="share/whatsapp/share"
                               target="_blank">
                                  <i class="icofont-whatsapp text-success"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{route('single.work',$row->id)}}" target="_blank">
                              <i class="icofont-facebook"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{route('single.work',$row->id)}}" target="_blank">
                              <i class="icofont-twitter"></i>
                            </a>
                        </span>
                            </div>
                        </div>
                    @else
                    <div class="row shadow">
                        <div class="col-md-6 col-12 box">
                            <h4 class="font-weight-bold">
                                <a href="{{route('single.work',$row->id)}}">{{$row->title}}</a>
                            </h4>
                            <hr>
                            <p>{!! $row->description !!}
                                <span class="text-primary font-weight-bold" id="showAbout">
                            <a href="{{route('single.work',$row->id)}}">See more</a>
                        </span>
                                <br>
                            </p>
                            <!--  share url -->
                            <span>
                        <i class="px-3">share with...</i>
                        <a href="https://api.whatsapp.com/send?text={{route('single.work',$row->id)}}"  data-action="share/whatsapp/share"
                           target="_blank">
                              <i class="icofont-whatsapp text-success"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{route('single.work',$row->id)}}" target="_blank">
                          <i class="icofont-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{route('single.work',$row->id)}}" target="_blank">
                          <i class="icofont-twitter"></i>
                        </a>
                    </span>
                        </div>
                        <div class="col-md-6 col-12 bg"  >
                            <a href="{{route('single.work',$row->id)}}">
                            <img class="card-img-top" src="{{$row->attachments[0]}}" alt="Card image cap">
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach

        </div>
    </section>

@endsection

@section('secipt')
    <script type="text/javascript">

    </script>
@endsection