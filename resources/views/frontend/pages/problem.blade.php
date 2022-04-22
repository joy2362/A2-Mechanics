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
                    <form method="post" action="{{route('problem.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full name</label>
                            <input type="text" id="name" name="name"  class="form-control">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"  class="form-control">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="question">Question/Problem</label>
                            <textarea class="form-control" id="question" name="question" rows="5"></textarea>
                            @error('question')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Attachment</label>
                            <input type="file" id="attachment" name="attachment" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            @foreach($faq as $row)
            <div>
                <h4 class="font-weight-bold">{{$row->question}}</h4>
                <p>{{$row->answer}}</p>
            </div>
            @endforeach
            {!! $faq->links() !!}
        </div>
    </section>
@endsection