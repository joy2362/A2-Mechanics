@extends('backend.layout.master')
@section('title')
    <title>Edit Blog</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Edit Blog
                <a href="{{route('admin.blog.index')}}" class="float-end btn btn-sm btn-success">All Blog</a>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('admin.blog.update',$blog->id)}}">
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" id="category" name="category" required >
                                        @foreach($category as $row)
                                            @if($blog->category_id == $row->id)
                                                <option selected value="{{$row->id}}">{{$row->name}}</option>
                                            @else
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endif

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"  value="{{$blog->name}}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" class="form-control" name="description" rows="4" >{!! $blog->description !!}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Current Image</label>
                                    <br>
                                    <a href="{{$blog->attachment}}"><img src="{{$blog->attachment}}" alt="" height="100" width="100" /></a>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tags" class="form-label">Meta Tags</label>
                                    <input name="tags"  id="tags" placeholder="write some meta tag" value="{{$tags}}" >
                                    <small>press "Enter" or "tab" to add tag</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" class="form-control" name="meta_description" rows="4"  placeholder="write some meta description">{!! $blog->meta_description !!}</textarea>
                                </div>

                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("#tags").selectize({
                delimiter: ",",
                persist: false,
                create: function (input) {
                    return {
                        value: input,
                        text: input,
                    };
                },
            });

            $('#description').summernote({
                height: 200,
            });
        });
    </script>
@endsection
