@extends('backend.layout.master')
@section('title')
    <title>Owner</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Owner Information</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Owner Image</h5>
                        </div>

                        <div class="card-body text-center">
                            <div style="position: relative; width: 150px; height: 150px">
                                <img  src="{{ $Founder_image }}" alt="{{$Founder_name}}" class="img-fluid rounded-circle mb-2" style="width:100%; height:100%;  overflow: hidden;" />
                                <button style="bottom: 0;right:0; position: absolute;border-radius: 50%;width: 35px;height: 35px" data-bs-toggle="modal" data-bs-target="#changeImage" class="btn btn-primary btn-sm"> <i class="align-middle" data-feather="camera"></i></button>
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="changeImage" tabindex="-1" aria-labelledby="changeImageLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" action="{{route('admin.founder.image.change')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changeImageLabel">Change Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Image" accept="image/*">
                                        <label for="image">Image</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Update Owner Information</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.founder.update',1) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="name">Owner Name</label>
                                        <input type="text" class="form-control"  id="name" name="name" required value="{{$Founder_name}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="designation">Owner Designation</label>
                                        <input type="text" class="form-control"  id="designation" name="designation" required value="{{$Founder_designation}}">
                                        @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group g-2 mb-3">
                                        <label for="message">Owner Message</label>
                                        <textarea type="text" class="form-control"  id="message" name="message">{{$Founder_message}}</textarea>

                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
            $('#message').summernote({
                height: 200,
            });
        });
    </script>
@endsection
