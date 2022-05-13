@extends('backend.layout.master')
@section('title')
    <title>Faq</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Faq
                <a href="#" class="float-end btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_Faq">Add Faq</a>
            </h1>
            <!-- Modal for add  -->
            <div class="modal fade" id="add_Faq" tabindex="-1" aria-labelledby="add_Faq_Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="add_category_Label">Add Faq</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="addFaqForm">
                            <div class="modal-body">
                                <ul class="alert alert-danger d-none" id="save_errorList"></ul>
                                <div class="form-group mb-3">
                                    <label for="question" class="form-label">Question</label>
                                    <input type="text" class="form-control" id="question" name="question" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="answer" class="form-label">Answer</label>
                                    <textarea id="answer" class="form-control" name="answer" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end Modal for add-->

            <!-- Modal for update  -->
            <div class="modal fade" id="edit_faq" tabindex="-1" aria-labelledby="edit_faq_Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit_category_Label">Edit Faq</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="editFaqForm">
                            <div class="modal-body">
                                <ul class="alert alert-danger d-none" id="edit_errorList"></ul>
                                <div class="form-group mb-3">
                                    <label for="edit_question" class="form-label">Question</label>
                                    <input type="text" class="form-control" id="edit_question" name="question" required>
                                    <input type="hidden" id="edit_id" name="id" >
                                </div>

                                <div class="form-group mb-3">
                                    <label for="edit_answer" class="form-label">Answer</label>
                                    <textarea id="edit_answer" class="form-control" name="answer" rows="4"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label  class="form-label mr-2">Status: </label>
                                    <input class="form-check-input" type="radio" name="status" id="edit_status_active" value="active" >
                                    <label class="form-check-label" for="edit_status_active">
                                        Active
                                    </label>
                                    <input class="form-check-input" type="radio" name="status" id="edit_status_inactive" value="inactive">
                                    <label class="form-check-label" for="edit_status_inactive">
                                        Inactive
                                    </label>
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
            <!--end Modal for update  -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-border" id="datatable1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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
            function ajaxsetup(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            }
            // $('#answer').summernote({
            //     height: 200,
            // });
            // $('#edit_answer').summernote({
            //     height: 200,
            // });
            fetchFaq();
            function fetchFaq(){
                ajaxsetup();
                $('#datatable1').DataTable({
                    "order": [[ 0, "desc" ]],
                    responsive: true,
                    language: {
                        searchPlaceholder: 'Search...',
                        sSearch: '',
                        lengthMenu: '_MENU_ items/page',
                    },

                    processing: true,
                    serverSide:true,
                    ajax:"{{route('admin.faq.index')}}",
                    columns:[
                        {data:"id",name:'ID'},
                        {data:"question",name:'Question'},
                        {data:"answer",name:'Answer'},
                        {data:"status",name:'status'},
                        {data:"actions",name:'Actions'},
                    ]
                });
            }

            $(document).on('click','.edit_button',function(e){
                e.preventDefault();
                let id = $(this).val();

                $('#edit_faq').modal('show');
                ajaxsetup();
                $.ajax({
                    type:'get',
                    url:"/admin/faq/"+id+"/edit",
                    dataType:'json',
                    success: function(response){
                        if(response.status === 200){
                            $('#edit_id').val(response.faq.id);
                            $('#edit_question').val(response.faq.question);
                            $('#edit_answer').val(response.faq.answer);

                            if(response.faq.status === 'active'){
                                $("#edit_status_active").prop("checked", true);
                            }else{
                                $("#edit_status_inactive").prop("checked", true);
                            }
                        }
                    }
                })
            });

            $(document).on('submit','#addFaqForm',function(e){
                e.preventDefault();
                let formData = new FormData($('#addFaqForm')[0]);
                ajaxsetup();
                $.ajax({
                    type:'post',
                    enctype: 'multipart/form-data',
                    url:"{{route('admin.faq.store')}}",
                    data:formData,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        if(response.status === 400){
                            $('#save_errorList').html("");
                            $('#save_errorList').removeClass("d-none");
                            $.each(response.errors,function(key,err_value){
                                $('#save_errorList').append('<li>'+ err_value+'</li>');
                            });
                        }
                        else if(response.status === 200){
                            $('#save_errorList').html("");
                            $('#save_errorList').addClass("d-none");

                            $('#addFaqForm')[0].reset();
                            $('#add_Faq').modal('hide');

                            $('#datatable1').DataTable().draw();
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1500,
                                toast:true
                            });

                        }
                    }

                })
            });

            $(document).on('submit','#editFaqForm',function(e){
                e.preventDefault();
                let  id = $('#edit_id').val();
                let editFormData = new FormData($('#editFaqForm')[0]);
                editFormData.append('_method', 'PUT');
                ajaxsetup();
                $.ajax({
                    type:'post',
                    enctype: 'multipart/form-data',
                    url:"/admin/faq/"+id,
                    data: editFormData,
                    contentType:false,
                    processData:false,
                    success: function(response){
                        if(response.status === 400){
                            $('#edit_errorList').html("");
                            $('#edit_errorList').removeClass("d-none");
                            $.each(response.errors,function(key,err_value){
                                $('#edit_errorList').append('<li>'+ err_value+'</li>');
                            });
                        }
                        else if(response.status === 200){
                            $('#edit_errorList').html("");
                            $('#edit_errorList').addClass("d-none");

                            $('#editFaqForm').find('input[name="name"]').val('');

                            $('#edit_faq').modal('hide');
                            $('#datatable1').DataTable().draw();
                            Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: false,
                                    timer: 1500,
                                    toast:true
                                }
                            )

                        }
                    }

                })
            });

            $(document).on('click','.delete_button',function(e){
                e.preventDefault();
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
                        let id = $(this).val();
                        ajaxsetup();
                        $.ajax({
                            type:'DELETE',
                            url:"/admin/faq/"+id,
                            dataType:'json',
                            success: function(response){
                                if(response.status == 404){
                                    Swal.fire({
                                            position: 'top-end',
                                            icon: 'error',
                                            title: response.message,
                                            showConfirmButton: false,
                                            timer: 1500,
                                            toast:true
                                        }
                                    )
                                }
                                else{
                                    $('#datatable1').DataTable().draw();
                                    Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: response.message,
                                            showConfirmButton: false,
                                            timer: 1500,
                                            toast:true
                                        }
                                    )
                                }
                            }
                        })
                    }
                })
            });
        })

    </script>
@endsection
