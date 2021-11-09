

@extends('frontend.layouts.master')
@section('content')<br>

    <section class="baner">

        {{--<img src="{{url('public/frontend/image/s1.png')}}" style="width:100%;">--}}

    </section>

    <!--about us-->

     <section class="l_notice">

         <div class="container">
             <div class="row">

                 <div class="col-md-12">
                     <table class="table latest_notice">
                         <thead>
                         <tr>
                             <th>Sl</th>
                             <th>Title</th>
                             <th>Post Date</th>
                             <th>Download</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($allData as $key=>$lnotice)
                             <tr>
                                 <td>{{$key+1}}</td>
                                 <td>{{$lnotice->title}}</td>
                                 <td>{{$lnotice->post_date}}</td>

                                 <td>
                                     <a href="public/upload/notice_images/{{($lnotice->lnotice_download)}}" download="{{($lnotice->lnotice_download)}}">
                                         <button type="button" class="btn btn-primary">
                                             <i class="glyphicon glyphicon-download">
                                             </i>Download</button>
                                     </a>
                                 </td>
                                 {{--<td>{{($etender->t_download)}}</td>--}}
                             </tr>

                         @endforeach
                         </tbody>
                     </table>
                 </div>


             </div>
         </div>
     </section><br>





@endsection