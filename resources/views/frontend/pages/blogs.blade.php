@extends('frontend.layouts.main')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">Blogs</h2>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-12 " >
                    @foreach($blog as $row)
                    <div class="box shadow  py-4">
                        <div class="blog-img">
                            <img class="card-img-top" src="{{$row->attachment}}" alt="Card image cap">
                        </div>
                        <h4 class="font-weight-bold">{{$row->name}}</h4>
                        <span class="px-3 py-4"><i class="icofont-user"></i> Admin</span><span class="px-3 py-4"><i class="icofont-wall-clock"></i> {{$row->created_at->format('M d Y') }}</span><span class="px-3 py-4"><i class="icofont-comment"></i>12 Comments</span>
                        <p class="text-justify px-3">
                            {!! \Illuminate\Support\Str::limit($row->description, 150)  !!}
                        </p>
                        <a href="{{route('blog',$row->id)}}" class="btn btn-primary">Read more</a>
                    </div>
                    @endforeach
                        @if($selected_category != 0 )
                   {!! $blog->links() !!}
                        @endif
                </div>
                <div class="col-md-4 col-12  ">
                    <div class="box shadow  px-3 py-4">
                        <!-- removing extra padding -->
                        <h4 class="p-0">Search</h4>
                        <form method="get" action="{{url('/blogs')}}">
                            <!-- inline search bar -->
                            <div class="form-group d-flex">
                                <input type="text" name="search" class="w-75" />
                                <input type="submit" value="Search" class="btn btn-primary" />
                            </div>
                        </form>
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <!-- removing extra padding of span -->
                                @foreach($category as $row)
                                    @if($selected_category == $row->id)
                                        <li ><a style="font-weight: bolder; font-size: 20px" href="{{url('/blogs?category='.$row->id)}}">{{$row->name}}</a></li>
                                    @else
                                        <li><a href="{{url('/blogs?category='.$row->id)}}">{{$row->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>

                        </div>
                        <h4>Recent posts</h4>
                            @foreach($recent_blog as $row)
                            <div class="row">
                                <div class="col-4 d-flex py-3">
                                    <img class="card-img-top" src="{{$row->attachment}}" alt="Card image cap" style="object-fit: cover;">
                                </div>
                                <div class="col-8">
                                    <a href="{{route('blog',$row->id)}}" class="text-dark">{{\Illuminate\Support\Str::limit($row->name , 75)}} <span style="border-radius: 10px; font-size: 10px; padding: 5px;" class="bg-uniform"><i>{{$row->created_at->format('M d Y') }}</i></span></a><br>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection