@extends('backend.layout.master')
@section('title')
    <title>Visitor Question</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Visitor Question</h1>
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
                                        <th>Question</th>
                                        <th>type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($question as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->question}}</td>
                                            <td>{{$row->type}}</td>
                                            <td>{{$row->status}}</td>
                                            <td>
                                                <form action="{{route('admin.question.destroy',$row->id)}}" method="post">
                                                    @if($row->AttachmentFile)
                                                        <a href="{{$row->AttachmentFile}}" download target="_blank" class="m-2 btn btn-sm btn-primary ">Attachment</a>
                                                        @endif
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

        $("#checkedAll").change(function() {
            if (this.checked) {
                $(".checkSingle").each(function() {
                    this.checked=true;
                    $("#checkoutbtn").removeClass("invisible");

                });
            } else {
                $(".checkSingle").each(function() {
                    this.checked=false;
                    $("#checkoutbtn").addClass("invisible");
                });
            }
        });

        $(".checkSingle").change(function() {
            if (this.checked) {
                $("#checkoutbtn").removeClass("invisible");
            }else{
                $("#checkoutbtn").addClass("invisible");
            }
        });
    </script>
@endsection
