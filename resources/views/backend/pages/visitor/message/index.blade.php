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
                                <table class="table table-border" id="feedback">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>type</th>
                                        <th>Status</th>
                                        <th >Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($feedback as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->subject}}</td>
                                            <td>{{$row->message}}</td>
                                            <td>{{$row->type}}</td>
                                            <td>{{$row->status}}</td>
                                            <td class="d-flex flex-column ">
                                                <button class="m-2 btn btn-sm btn-success edit_button"  value="{{$row->id}}"  >View</button>
                                                <form class="d-flex flex-column" action="{{route('admin.question.destroy',$row->id)}}" method="post">
                                                    <button class="  m-2 btn btn-sm btn-danger delete_button" type="submit" value="{{$row->id}}" >Delete </button>
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
        <div class="modal fade" id="show_feedback" tabindex="-1" aria-labelledby="show_feedback_Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add_category_Label">Visitor Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" class="form-control" name="message" rows="4" readonly></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function(){

            function ajaxsetup(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            }

            $('#feedback').DataTable(
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

            $(document).on('click','.edit_button',function(e){
                e.preventDefault();
                let id = $(this).val();
                console.log(id);
                ajaxsetup();
                $.ajax({
                    type:'get',
                    url:"/admin/visitor/feedback/"+id,
                    dataType:'json',
                    success: function(response){
                        if(response.status === 200){
                            $('#name').val(response.feedback.name);
                            $('#email').val(response.feedback.email);
                            $('#subject').val(response.feedback.subject);
                            $('#message').val(response.feedback.message);
                            $('#show_feedback').modal('show');
                        }
                    }
                })
            });
        });
    </script>
@endsection
