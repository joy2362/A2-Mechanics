@extends('frontend.layouts.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">Contact Us</h2>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>

    <!-- ==== contact start here === -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 col-10 col-lg-12 m-auto">
                            <div class="info-box mb-4 cap">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p><br>
                                <i class="bx bx-envelope "></i>
                                <h3>Email Us</h3>
                                <p>contact@tech.com</p><br>
                                <i class="bx bx-phone-call "></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 px-5 py-4 align-items-center d-flex" data-aos="fade-up" data-aos-delay="100">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" placeholder="fullname" id="name">
                                    <p id="error"></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" style="height: 150px;" id="msg"></textarea>
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-primary" id="submit" >
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

@endsection