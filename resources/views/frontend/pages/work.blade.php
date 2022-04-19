@extends('frontend.layouts.main')
@section('content')

    <section class="section-bg section_about mt-3">
        <div class="container " >
            <!-- centering title with text-center class -->
            <h2 class="font-weight-bold text-primary text-center">Our Works</h2>
            <hr style="width: 40%; color: blue;">
        </div>
    </section>

    <section id="services">
        <div class="container py-3 ">
            <div class="section-title">
            </div>
            <div class="row shadow">
                <div class="col-md-6 col-12 bg"  >
                    <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" ondblclick="showCard()">
                </div>
                <div class="col-md-6 col-12  box">
                    <h4 class="font-weight-bold"><a href="works_view.html">Internship</a></h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        <span class="text-primary font-weight-bold" id="showAbout"><a href="works_view.html">See more option...</a></span> <br>
                        <!-- <span id="aboutContent" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</span>
                        <span id="hideAbout" style="display: none;" class="text-danger font-weight-bold">Hide More</span> -->
                    </p>

                    <span>

        <!--  share url changed -->
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
                </div>
            </div>

            <div class="row mt-3 shadow">
                <div class="col-md-6 col-12  box">
                    <h4 class="font-weight-bold"><a href="works_view.html">Scholarship</a></h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        <span class="text-primary font-weight-bold" id="showAbout2"><a href="works_view.html">See more option...</a></span> <br>
                        <!--  <span id="aboutContent2" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat.</span>
                         <span id="hideAbout2" style="display: none;" class="text-danger font-weight-bold">Hide More</span> -->
                    </p>

                    <span>

        <!--  share url changed -->
                <i class="px-3">share with...</i>
                <a href="https://api.whatsapp.com/send?text=www.google.com"  data-action="share/whatsapp/share"
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
                </div>
                <div class="col-md-6 col-12 bg"  >
                    <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" ondblclick="showCard()">
                </div>
            </div>

            <div class="row mt-3 shadow">
                <div class="col-md-6 col-12 bg"  >
                    <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" ondblclick="showCard()">
                </div>
                <div class="col-md-6 col-12  box">
                    <h4 class="font-weight-bold"><a href="works_view.html">Web Developer</a></h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        <span class="text-primary font-weight-bold" id="showAbout3"><a href="works_view.html">See more option...</a></span> <br>
                        <!-- <span id="aboutContent3" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</span>
                        <span id="hideAbout3" style="display: none;" class="text-danger font-weight-bold">Hide More</span> -->
                    </p>

                    <span>

        <!--  share url changed -->
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
                </div>
            </div>

            <div class="row mt-3 shadow">
                <div class="col-md-6 col-12  box">
                    <h4 class="font-weight-bold"><a href="works_view.html">Web Designer</a></h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        <span class="text-primary font-weight-bold" id="showAbout4"><a href="works_view.html">See more option...</a></span> <br>
                        <!--  <span id="aboutContent4" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat.</span>
                         <span id="hideAbout4" style="display: none;" class="text-danger font-weight-bold">Hide More</span> -->
                    </p>

                    <span>

        <!--  share url changed -->
                <i class="px-3">share with...</i>
                <a href="https://api.whatsapp.com/send?text=www.google.com"  data-action="share/whatsapp/share"
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
                </div>
                <div class="col-md-6 col-12 bg"  >
                    <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" ondblclick="showCard()">
                </div>
            </div>
        </div>
    </section>

@endsection

@section('secipt')
    <script type="text/javascript">
        function showCard(){
            window.location.replace("works_view.html");
        }
    </script>
@endsection