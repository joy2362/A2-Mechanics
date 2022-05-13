@extends('backend.layout.master')
@section('title')
    <title>View Blog</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">View Blog
                <a href="{{route('admin.blog.index')}}" class="float-end btn btn-sm btn-success">All Blog</a>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class=" mb-3 fw-bold text-md">{{$blog->name}}</h3>
                            <p class="card-text fw-bold"> Category</p>
                            <p class="card-text">{{$blog->category->name}}</p>
                            <p class="card-text fw-bold"> Description</p>
                            <p class="card-text"> {!! $blog->description !!}</p>
                            <p class="card-text fw-bold">Image</p>
                            <p class="card-text">
                                <a href="{{$blog->attachment}}"><img src="{{$blog->attachment}}" alt="" height="100" width="100"></a>
                            </p>
                            <p class="card-text fw-bold">Keywords</p>
                            <p class="card-text">
                                @foreach($blog->tags as $row)
                                    <span class="badge bg-secondary">{{$row->name}}</span>
                                @endforeach
                            </p>
                            <p class="card-text fw-bold">Meta Description</p>
                            <p class="card-text"> {!! $blog->meta_description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('script')
    <script>
    </script>
@endsection
