@extends('frontend.layouts.main')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">Blog</h2>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>


    <section id="blog" class="blog">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-12 px-4 py-4" >
                    <div class="box shadow">
                        <div class="blog-img">
                            <img class="card-img-top" src="{{asset('frontend/img/portfolio/2.jpg')}}" alt="Card image cap">
                        </div>
                        <h4 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                        <span><i class="bx bxl-twitter"></i> John</span><span><i class="bx bxl-twitter"></i> Jan 1, 2020</span><span><i class="bx bxl-twitter"></i> 12 Comments</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco labJoris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4>Et quae Iure vel ut odit alisa</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <div class="blog-img">
                            <img class="card-img-top" src="{{asset('frontend/img/portfolio/1.jpg')}}" alt="Card image cap">
                        </div>
                        <h4>Et quae Iure vel ut odit alisa</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <hr>
                        <div class="row">
                            <div class="col-9">
                                <span class="px-1 py-4"><i class="icofont-user"></i></i> Business</span><span class="px-1 py-4"><i class="icofont-wall-clock"></i> Creative, Tips, Marketing</span><span class="px-1 py-4"><i class="icofont-comment"></i>12 Comments</span>
                            </div>
                            <div class="col-3">
              <span>
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
                    </div>
                    <div class="box row shadow">
                        <div class=" col-4" style="border-radius: 100%;">
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-1.jpg')}}" alt="Card image cap" style="border-radius: 100%;">
                        </div>
                        <div class="col-8">
                            <h4>John Williams</h4>
                            <span>
               <a href="https://twitter.com/LunoGlobal"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/LunoGlobal"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/LunoGlobal"><i class="icofont-instagram"></i></a>
              </span>
                            <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</i></p>
                        </div>
                    </div>
                    <h4 class="pt-5">Comments</h4>
                    <div class="boxs row ">
                        <div class=" col-2" >
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-1.jpg')}}" alt="Card image cap" >
                        </div>
                        <div class="col-10">
                            <h4>John Williams <span><i class="icofont-reply">Reply</i></span></h4>
                            <p><i>jan, 2 2022</i></p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="boxs row ">
                        <div class=" col-2" >
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-2.jpg')}}" alt="Card image cap" >
                        </div>
                        <div class="col-10">
                            <h4>John Williams <span><i class="icofont-reply">Reply</i></span></h4>
                            <p><i>jan, 2 2022</i></p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="boxs row ">
                        <div class=" col-2" >
                            <img class="card-img-top" src="{{asset('frontend/img/team/team-3.jpg')}}" alt="Card image cap" >
                        </div>
                        <div class="col-10">
                            <h4>John Williams <span><i class="icofont-reply">Reply</i></span></h4>
                            <p><i>jan, 2 2022</i></p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>

                    <div class="box">
                        <h4>Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="fullname" class="form-control" placeholder="Your fullname" id="name">
                                        <p id="error"></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" id="email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="Website" class="form-control" placeholder=" Your Website" id="Website">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="msg" style="height: 100px;" id="msg" placeholder=" Your Comments"></textarea>
                            </div>
                            <div class="form-group">

                                <input type="submit" name="comment" class="btn btn-primary" id="submit" value="Post Comments" >
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4 col-12  ">
                    <div class="box shadow  px-3 py-4">
                        <!-- removing extra padding -->
                        <h4 class="p-0">Search</h4>
                        <form>
                            <!-- inline search bar -->
                            <div class="form-group d-flex">
                                <input type="text" name="search" placeholder="Search..." class="w-75" />
                                <input type="submit" name="submit"value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <!-- removing extra padding of span -->
                                <li><a href="#">General <span class="p-0">(25)</span></a></li>
                                <li><a href="#">Lifestyle <span class="p-0">(12)</span></a></li>
                                <li><a href="#">Travel <span class="p-0">(5)</span></a></li>
                                <li><a href="#">Design <span class="p-0">(22)</span></a></li>
                                <li><a href="#">Creative <span class="p-0">(8)</span></a></li>
                                <li><a href="#">Educaion <span class="p-0">(14)</span></a></li>
                            </ul>

                        </div>
                        <h4>Recent posts</h4>
                        <div class="row">
                            <div class="col-4 d-flex py-3">
                                <img class="card-img-top" src="{{asset('frontend/img/portfolio/2.jpg')}}" alt="Card image cap"  style="object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <a href="blogs.html" class="text-dark">Lorem ipsum dolor sit amet <span style="border-radius: 10px; font-size: 10px; padding: 5px;" class="bg-uniform"><i>Jan 1 2020</i></span></a><br>

                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-4 d-flex py-3">
                                <img class="card-img-top" src="{{asset('frontend/img/portfolio/3.jpg')}}" alt="Card image cap"  style="object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <a href="blogs.html" class="text-dark">Lorem ipsum dolor sit amet <span style="border-radius: 10px; font-size: 10px; padding: 5px;" class="bg-uniform"><i>Jan 1 2020</i></span></a><br>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4 d-flex py-3">
                                <img class="card-img-top" src="{{asset('frontend/img/portfolio/1.jpg')}}" alt="Card image cap"  style="object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <a href="blogs.html" class="text-dark">Lorem ipsum dolor sit amet <span style="border-radius: 10px; font-size: 10px; padding: 5px;" class="bg-uniform"><i>Jan 1 2020</i></span></a><br>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4 d-flex py-3">
                                <img class="card-img-top" src="{{asset('frontend/img/portfolio/2.jpg')}}" alt="Card image cap"  style="object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <a href="blogs.html" class="text-dark">Lorem ipsum dolor sit amet <span style="border-radius: 10px; font-size: 10px; padding: 5px;" class="bg-uniform"><i>Jan 1 2020</i></span></a><br>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection