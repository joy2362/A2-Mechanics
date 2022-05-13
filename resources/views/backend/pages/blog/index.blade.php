@extends('backend.layout.master')
@section('title')
    <title>Blogs</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Blogs
                <a href="{{route('admin.blog.create')}}" class="float-end btn btn-sm btn-success">Add new</a>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-border" id="datatable1">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blog as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td><a href="{{$row->attachment}}"><img src="{{$row->attachment}}" alt="" width="100" height="100"> </a></td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->category->name}}</td>
                                            <td>{{$row->status}}</td>
                                            <td>
                                                <form action="{{route('admin.blog.destroy',$row->id)}}" method="post">
                                                    <a class="m-2 btn btn-sm btn-primary" href="{{route('admin.blog.show',$row->id)}}">View</a>
                                                    <a class="m-2 btn btn-sm btn-info" href="{{route('admin.comment.index',$row->id)}}">comments</a>
                                                    <a class="m-2 btn btn-sm btn-success" href="{{route('admin.blog.edit',$row->id)}}">Edit</a>
                                                    <button class="m-2 btn btn-sm btn-danger delete_button" type="submit" value="{{$row->id}}" >Delete</button>
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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

            $('#datatable1').DataTable(
                {
                    "order":false
                }
            );

            $(document).on('click','.delete_button',function(e){
                e.preventDefault();
                var form =  $(this).closest("form");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });

        });

    </script>
@endsection
