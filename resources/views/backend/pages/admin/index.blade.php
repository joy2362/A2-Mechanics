@extends('backend.layout.master')
@section('title')
    <title>Our Admin</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Our Admin
                <a href="{{route('admin.user.create')}}" class="float-end btn btn-sm btn-success">Add new</a>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($admin as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>

                                                <form action="{{route('admin.user.destroy',$row->id)}}" method="post">
                                                  @if(auth()->user()->id == 1)
                                                        <a class="m-2 btn btn-sm btn-success" disabled href="{{route('admin.user.edit',$row->id)}}">Edit</a>
                                                        <button class="m-2 btn btn-sm btn-danger delete_button" type="submit" value="{{$row->id}}" >Delete</button>
                                                    @else
                                                        <a style="pointer-events: none; display: inline-block;" class="m-2 btn btn-sm btn-success" disabled href="{{route('admin.user.edit',$row->id)}}">Edit</a>
                                                        <button disabled class="m-2 btn btn-sm btn-danger delete_button" type="submit"  value="{{$row->id}}" >Delete</button>
                                                      @endif
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
