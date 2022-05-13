@extends('backend.layout.master')
@section('title')
    <title>Team Member</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Team Member
                <a href="#" class="float-end btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_Team">Add Team Member</a>
            </h1>
            <!-- Modal for add  -->
            <div class="modal fade" id="add_Team" tabindex="-1" aria-labelledby="add_Team_Label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="add_admin_Label">Add Team Member</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="addTeamForm">
                            <div class="modal-body">
                                <ul class="alert alert-danger d-none" id="save_errorList"></ul>

                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="avatar" class="form-label">Avatar</label>
                                    <input class="form-control" type="file" id="avatar" name="avatar" accept="image/*" required>
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
            <div class="modal fade" id="edit_team" tabindex="-1" aria-labelledby="edit_team_Label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit_admin_Label">Edit Team member</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="editTeamForm">
                            <div class="modal-body">
                                <ul class="alert alert-danger d-none" id="edit_errorList"></ul>

                                <div class="form-group mb-3">
                                    <label for="edit_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="edit_name" name="name" required>
                                    <input type="hidden" id="edit_id" name="id" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="edit_designation" name="designation" required>
                                </div>
                                <div class="form-group mb-3">
                                    <p  class="form-label">Current Avatar</p>
                                    <a href="#" class="edit_img_link"><img src="#" width="100px" height="100px" alt="image" class="edit_img_preview"></a>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="edit_avatar" class="form-label">Avatar</label>
                                    <input class="form-control" type="file" id="edit_avatar" name="avatar" accept="image/*" >
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
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Designation</th>
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

            fetchTeam();
            function fetchTeam(){
                ajaxsetup();
                $('#datatable1').DataTable({
                    responsive: true,
                    language: {
                        searchPlaceholder: 'Search...',
                        sSearch: '',
                        lengthMenu: '_MENU_ items/page',
                    },

                    processing: true,
                    serverSide:true,
                    ajax:"{{route('admin.team.index')}}",
                    columns:[
                        {data:"id",name:'ID'},
                        {data:"logo",name:'Avatar'},
                        {data:"name",name:'Name'},
                        {data:"designation",name:'Email'},
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
                    url:`/admin/team/${id}/edit`,
                    dataType:'json',
                    success: function(response){
                        if(response.status === 200){
                            $('#edit_id').val(response.team.id);
                            $('#edit_name').val(response.team.name);
                            $('#edit_designation').val(response.team.designation);
                            $('.edit_img_preview').attr("src",response.team.avatar);
                            $('.edit_img_link').attr("href",response.team.avatar);
                            $('#edit_team').modal('show');

                        }
                    }
                })



            });

            $(document).on('submit','#addTeamForm',function(e){
                e.preventDefault();

                let formData = new FormData($('#addTeamForm')[0]);

                ajaxsetup();
                $.ajax({
                    type:'POST',
                    enctype: 'multipart/form-data',
                    url:"{{route('admin.team.store')}}",
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
                            location.reload();
                            $('#add_Team').modal('hide');

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

            $(document).on('submit','#editTeamForm',function(e){
                e.preventDefault();
                let  id = $('#edit_id').val();

                let editFormData = new FormData($('#editTeamForm')[0]);
                editFormData.append('_method', 'PUT');
                ajaxsetup();

                $.ajax({
                    type:'post',
                    enctype: 'multipart/form-data',
                    url:`/admin/team/${id}`,
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

                            location.reload();
                            $('#edit_team').modal('hide');

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
                            url:`/admin/team/${id}`,
                            dataType:'json',
                            success: function(response){
                                if(response.status == 404){
                                    Swal.fire(
                                        'Error!',
                                        response.message,
                                        'error'
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
