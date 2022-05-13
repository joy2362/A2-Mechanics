@extends('backend.layout.master')
@section('title')
    <title>Category</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Category
                <a href="#" class="float-end btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_Category">Add Category</a>
            </h1>
            <!-- Modal for add  -->
            <div class="modal fade" id="add_Category" tabindex="-1" aria-labelledby="add_Category_Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="add_category_Label">Add Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="addCategoryForm">
                            <div class="modal-body">
                                <ul class="alert alert-danger d-none" id="save_errorList"></ul>
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
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
            <div class="modal fade" id="edit_category" tabindex="-1" aria-labelledby="edit_category_Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit_category_Label">Edit Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="editCategoryForm">
                            <div class="modal-body">
                                <ul class="alert alert-danger d-none" id="edit_errorList"></ul>
                                <div class="form-group mb-3">
                                    <label for="edit_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="edit_name" name="name" required>
                                    <input type="hidden" id="edit_id" name="id" >
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
                                            <th>Name</th>
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

            fetchCategory();
            function fetchCategory(){
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
                    ajax:"{{route('admin.category.index')}}",
                    columns:[
                        {data:"id",name:'ID'},
                        {data:"name",name:'Name'},
                        {data:"status",name:'status'},
                        {data:"actions",name:'Actions'},
                    ]
                });
            }

            $(document).on('click','.edit_button',function(e){
                e.preventDefault();
                let id = $(this).val();

                ajaxsetup();
                $.ajax({
                    type:'get',
                    url:`/admin/category/${id}/edit`,
                    dataType:'json',
                    success: function(response){
                        if(response.status === 200){
                            $('#edit_id').val(response.category.id);
                            $('#edit_name').val(response.category.name);
                            $('#edit_category').modal('show');
                        }
                    }
                })
            });

            $(document).on('submit','#addCategoryForm',function(e){
                e.preventDefault();
                let formData = new FormData($('#addCategoryForm')[0]);
                ajaxsetup();
                $.ajax({
                    type:'post',
                    enctype: 'multipart/form-data',
                    url:"{{route('admin.category.store')}}",
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

                            $('#addCategoryForm')[0].reset();
                            $('#add_Category').modal('hide');

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

            $(document).on('submit','#editCategoryForm',function(e){
                e.preventDefault();
                let  id = $('#edit_id').val();
                let editFormData = new FormData($('#editCategoryForm')[0]);
                editFormData.append('_method', 'PUT');
                ajaxsetup();
                $.ajax({
                    type:'post',
                    enctype: 'multipart/form-data',
                    url:`/admin/category/${id}`,
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

                            $('#editCategoryForm').find('input[name="name"]').val('');

                            $('#edit_category').modal('hide');
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
                            url:`/admin/category/${id}`,
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
