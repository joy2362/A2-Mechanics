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
                            <img class="card-img-top" src="{{$blog->attachment}}" alt="Card image cap">
                        </div>
                        <h4 class="font-weight-bold">{{$blog->name}}</h4>
                        <span>
                            <i class="icofont-user"></i> Admin
                        </span>
                        <span>
                            <i class="icofont-wall-clock"></i> {{$blog->created_at->format('M d Y') }}
                        </span>
                        <span>
                            <i class="icofont-comment"></i> 12 Comments
                        </span>
                        <p>{!! $blog->description !!}</p>
                        <hr>
                        <div class="row">
                            <div class="col-9">

                            </div>
                            <div class="col-3">
                                <span>
                                    <a href="https://api.whatsapp.com/send?text={{route('blog',$blog->id)}}" data-action="share/whatsapp/share"
                                       target="_blank">
                                              <i class="icofont-whatsapp text-success"></i>
                                        </a>

                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('blog',$blog->id)}}" target="_blank">
                                      <i class="icofont-facebook"></i>
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?url={{route('blog',$blog->id)}}" target="_blank">
                                      <i class="icofont-twitter"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <h4 class="pt-5">Comments</h4>
                    <div class="boxs row ">
                        <div class="col-10">
                            <h4>John Williams</h4>
                            <p><i>jan, 2 2022</i></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>

                    <div class="box">
                        <h4>Leave a Reply</h4>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder=" Your Name" id="name">
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
                                <input type="submit" value="Search" class="btn btn-primary">
                            </div>
                        </form>
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach($category as $row)
                                    <li><a href="{{url('/blogs?category='.$row->id)}}">{{$row->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <h4>Recent posts</h4>
                        @foreach($recent_blog as $row)
                        <div class="row">
                            <div class="col-4 d-flex py-3">
                                <img class="card-img-top" src="{{$row->attachment}}" alt="Card image cap"  style="object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <a href="{{route('blog',$row->id)}}" class="text-dark">{{\Illuminate\Support\Str::limit($row->name , 75)}} <span style="border-radius: 10px; font-size: 10px; padding: 5px;" class="bg-uniform"><i>{{$row->created_at->format('M d Y') }}</i></span></a><br>
                            </div>
                        </div><hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection