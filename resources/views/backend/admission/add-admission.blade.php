@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Admission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Add Admission

                                    <a class="btn btn-success float-right btn-sm" href="{{route('admissions.view')}}"><i class="fa fa-list"></i>Admission List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="POST" action="{{route('admissions.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')



                                    <div class="form-row">
                                        <div class=" form-group col-md-6">
                                            <label for="title" >Class</label>

                                            <input type="text" name="class" class="form-control">
                                        </div>



                                        <div class=" form-group col-md-6">
                                            <label for="admission_fee" >Admission Fee</label>

                                            <input type="text" name="admission_fee" class="form-control"id="t_date">
                                        </div>
                                        <div class=" form-group col-md-6">
                                            <label for="session_fee" >Session Fee</label>

                                            <input type="text" name="session_fee" class="form-control"id="t_date">
                                        </div>
                                        <div class=" form-group col-md-6">
                                            <label for="date" >Salary</label>

                                            <input type="text" name="salary" class="form-control"id="t_date">
                                        </div>
                                        <div class=" form-group col-md-6">
                                            <label for="date" >Half Yearly Fee</label>

                                            <input type="text" name="half_yearly_fee" class="form-control"id="t_date">
                                        </div>
                                        <div class=" form-group col-md-6">
                                            <label for="date" >Middle Phase Exam Fee</label>

                                            <input type="text" name="middle_fee" class="form-control"id="t_date">
                                        </div>





                                        <div class="form-group col-md-6" style="padding-top:30px;">
                                            <input type="submit" value="submit" class="btn btn-primary">

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






@endsection