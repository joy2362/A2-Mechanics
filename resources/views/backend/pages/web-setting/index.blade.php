@extends('backend.layout.master')
@section('title')
    <title>Website Setting</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Website Setting</h1>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Home Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$home->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$home->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$home->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$home_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $home->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update About Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$about->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$about->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$about->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$about_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $about->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Blog Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$blog->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$blog->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$blog->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$blog_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $blog->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Work Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$work->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$work->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$work->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$work_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $work->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Team Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$team->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$team->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$team->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$team_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $team->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Problem Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$problem->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$problem->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$problem->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$problem_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $problem->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Contact Page Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.websetting.update',$contact->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control"  id="title" name="title" required value="{{$contact->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="subtitle">Sub Title</label>
                                        <input type="text" class="form-control"  id="subtitle" name="subtitle" required value="{{$contact->sub_title}}">
                                        @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Keywords</label>
                                        <input name="tags" class="tags"  id="tags" placeholder="write some meta tag"  value="{{$contact_tag}}" >
                                        <small>press Enter to add tag</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea id="meta_description" class="form-control description" name="meta_description" rows="2"  placeholder="write some meta description">{!! $contact->meta_description !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
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
            $(".tags").selectize({
                delimiter: ",",
                persist: false,
                create: function (input) {
                    return {
                        value: input,
                        text: input,
                    };
                },
            });

            $('.description').summernote({
                height: 100,
            });
        });
    </script>
@endsection
