@extends('backend.layout.master')
@section('title')
    <title>Edit Admin</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Edit admin
                <a href="{{route('admin.user.index')}}" class="float-end btn btn-sm btn-success">All Admin</a>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('admin.user.update',$admin->id)}}">
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$admin->name}}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$admin->email}}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Current Avatar</label>
                                    <br>
                                    <a href="{{$admin->avatar}}"><img src="{{$admin->avatar}}" alt="" height="100" width="100" /></a>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Avatar</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
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

    </script>
@endsection
