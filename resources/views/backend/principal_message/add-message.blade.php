@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Principal Message</h1>
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
                                <h3>Add Message

                                    <a class="btn btn-success float-right btn-sm" href="{{route('principals.view')}}"><i class="fa fa-list"></i>Message List</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body" >





                                <form method="POST" action="{{route('principals.store')}}" id="myForm" enctype="multipart/form-data" >
                                    @csrf
                                    @include('backend.layouts.message')



                                    <div class="form-row">
                                        <div class=" form-group col-md-12">
                                            <label for="short_title" > Title</label>

                                            <input type="text" name="title" class="form-control">
                                        </div>




                                        <div class=" form-group col-md-4">
                                            <label for="image" >Image</label>

                                            <input type="file" name="image" class="form-control"id="image">
                                        </div>

                                        <div class=" form-group col-md-2">

                                            <img id="showImage" src="{{url('public/backend/image/no_img.png')}}" style="width: 150px;height: 160px;border: 1px solid#000;" >
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

$('.date-picker').datepicker({
format: 'yy/mm/dd',
autoclose: true,
todayHighlight: true
});
