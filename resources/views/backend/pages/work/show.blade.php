@extends('backend.layout.master')
@section('title')
    <title>View Work</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">View work
                <a href="{{route('admin.work.index')}}" class="float-end btn btn-sm btn-success">All Works</a>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class=" mb-3 fw-bold text-md">{{$work->title}}</h4>
                            <p class="card-text"> Description</p>
                            <p class="card-text"> {!! $work->description !!}</p>
                            <p class="card-text">Images</p>
                            <p class="card-text">
                                @foreach($work->attachments as $row)
                                    <a href="{{$row}}"><img src="{{$row}}" alt="" height="100" width="100"></a>
                                @endforeach
                            </p>
                            <p class="card-text">Keywords</p>
                            <p class="card-text">
                                @foreach($work->tags as $row)
                                    <span class="badge bg-secondary">{{$row->name}}</span>
                                @endforeach
                            </p>
                            <p class="card-text">Meta Description</p>
                            <p class="card-text"> {!! $work->meta_description !!}</p>
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
