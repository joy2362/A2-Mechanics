@extends('backend.layout.master')
@section('title')
    <title>New Work</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Add new work
                <a href="{{route('admin.work.index')}}" class="float-end btn btn-sm btn-success">All Works</a>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('admin.work.store')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" class="form-control" name="description" rows="4" ></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Images</label>
                                    <input class="form-control" multiple type="file" id="image" name="image[]" accept="image/*" required>
                                    <small>You can add multiple image</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tags" class="form-label">Keywords</label>
                                    <input name="tags"  id="tags" placeholder="write some meta tag" value="" >
                                    <small>press Enter to add tag</small>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" class="form-control" name="meta_description" rows="4"  placeholder="write some meta description"></textarea>
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
