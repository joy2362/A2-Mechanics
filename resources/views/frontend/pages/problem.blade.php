@extends('frontend.layouts.main')
@section('content')
    <section class="section-bg section_about">
        <div class="container">
            <div class="col">
                <!-- centering title with text-center class -->
                <h2 class="font-weight-bold text-primary text-center">Ask a Problem</h2>
                <hr style="width: 40%; color: blue;">
            </div>
        </div>
    </section>

    <section id="our_team_problem">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 col-10 offset-1">
                    <form>
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" name="fname"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Question/Problem</label>
                            <!-- making textarea bigger -->
                            <textarea class="form-control" name="question" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Submit" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <h4 class="font-weight-bold">How to apply padding?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
            </div>
            <div>
                <h4 class="font-weight-bold">How to apply Jquery</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
            </div>
        </div>
    </section>
@endsection