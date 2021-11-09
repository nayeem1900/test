@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Add User

                                    <a class="btn btn-success float-right btn-sm" href="{{route('users.view')}}"><i class="fa fa-list"></i>User List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <form method="POST" action="{{route('users.store')}}" id="myForm">
                                    @csrf
                                    @include('backend.layouts.message')

                                    <div class="form-row">
                                        <div class="form-group col-md-4">

                                        <label for="usertype">role</label>

                                            <select name="usertype" id="usertype" class="form-control">
                                                <option value="">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="operator">Operator</option>
                                                <option value="employee">Employee</option>

                                            </select>

                                        </div>




                                    <div class="form-group col-md-4">
                                        <label for="name"> Name</label>
                                        <input type="text" name="name" class="form-control">



                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>

                                        <input type="email" name="email" class="form-control">
                                    </div>

                                        <div class="form-group col-md-4">
                                            <label for="password">Password</label>

                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="password">Confirm Password</label>

                                            <input type="password" name="password2" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">


                                            <input type="submit" value="submit"  class="btn btn-primary">
                                        </div>

                                    </div>

                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>




    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "usertype": {
                        required: true,
                    },
                    "name": {
                        required: true,

                    },
                    "password": {
                        required: true,
                        minlength:6

                    },
                    "password2": {
                        required: true,
                        equalTo:'#password',


                    },
                    "email": {
                        required: true,
                        email:true,

                    }
                },

                messages: {
                    name:{
                        required:'Please Enter User Name',
                    },
                    role:{
                        required:'Please Enter User Role',
                    },
                    email:{
                        required:'Please Enter User Email',
                    }


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>



@endsection