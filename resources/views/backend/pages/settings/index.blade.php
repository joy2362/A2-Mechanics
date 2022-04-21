@extends('backend.layout.master')
@section('title')
    <title>Setting</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Setting</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">App Logo</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ $App_logo }}" alt="{{$App_Name}}" class="img-fluid rounded-circle mb-2" style="width:150px; height:150px;" />
                            <div>
                                <button data-bs-toggle="modal" data-bs-target="#changeImage" class="btn btn-primary btn-sm">Change Image</button>
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">About Us</h5>
                        </div>
                        <div class="card-body text-center">
                            <a href="{{$About_Us_Image}}"> <img src="{{ $About_Us_Image }}" alt="{{$App_Name}}" class="img-fluid rounded mb-2" style="width:250px; height:150px;" /></a>
                            <div>
                                <button data-bs-toggle="modal" data-bs-target="#changeAboutUsImage" class="btn btn-primary btn-sm">Change Image</button>
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="changeImage" tabindex="-1" aria-labelledby="changeImageLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" action="{{route('admin.setting.logo.change')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changeImageLabel">Change Logo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Image" accept="image/*">
                                        <label for="image">Logo</label>
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

                <!--about us image Modal -->
                <div class="modal fade" id="changeAboutUsImage" tabindex="-1" aria-labelledby="changeAboutUsImageLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" action="{{route('admin.setting.about_us_image.change')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changeAboutUsImageLabel">Change About us Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="aboutUs" name="aboutUs" placeholder="Image" accept="image/*">
                                        <label for="aboutUs">About Us</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Update Application Setting</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('admin.setting.update',1) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control"  id="name" name="name" required value="{{$App_Name}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control"  id="email" name="email" required value="{{$App_Email}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control"  id="phone" name="phone" required value="{{$App_Mobile}}">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="about_us" class="form-label">About Us</label>
                                        <textarea class="form-control" id="about_us" name="about_us" rows="6">{{ $About_Us }}</textarea>
                                        @error('about_us')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control"  id="address" name="address" value="{{$Address}}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control"  id="facebook" name="facebook" value="{{$Facebook}}">
                                        @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control"  id="twitter" name="twitter" value="{{$Twitter}}">
                                        @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="linkedin">Linkedin</label>
                                        <input type="text" class="form-control"  id="linkedin" name="linkedin" value="{{$Linkedin}}">
                                        @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" class="form-control"  id="instagram" name="instagram" value="{{$Instagram}}">
                                        @error('instagram')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="footer_description">Footer Description</label>
                                        <input type="text" class="form-control"  id="footer_description" name="footer_description" value="{{$Footer_Description}}">
                                        @error('footer_description')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="social_network_description">Social Network Description</label>
                                        <input type="text" class="form-control"  id="social_network_description" name="social_network_description" value="{{$Social_Network_Description}}">
                                        @error('social_network_description')
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

@endsection