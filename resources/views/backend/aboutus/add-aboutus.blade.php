@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage About us</h1>
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
                                <h3>Add About us

                                    <a class="btn btn-success float-right btn-sm" href="{{route('about_us.view')}}"><i class="fa fa-list"></i>About us List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="POST" action="{{route('about_us.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')



                                    <div class="form-row">
                                        <div class=" form-group col-md-6">
                                            <label for="short_title" >Short Title</label>

                                            <input type="text" name="short_title" class="form-control">
                                        </div>



                                        <div class=" form-group col-md-6">
                                            <label for="long_title" >Long Title</label>

                                            <input type="text" name="long_title" class="form-control">
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