
@extends('frontend.layouts.master')
@section('content')

<!--Top Section-->



<!--header section-->

<!--Marque section-->
<section class="marquee">
    <div class="marquee">
        <marquee>সবাইকে মাস্ক পরে বিদ্যালয়ে আসার জন্য বিশেষ ভাবে অনুরোধ করা হল।</marquee>

    </div>

</section>
<!--slider section ctrl+? mark shortcut-->
<section class="slider">
    <div class="container">
        @include('frontend.layouts.slider')
    </div>
</section><br>
<!--slider bellow image-->
<section class="bellow_image">
  <div class="container">

         <div class="row">
             <img src="{{asset('public/frontend/image/admission_baner.jpg')}}" style="width: 2200px" height="850px">
         </div>


  </div>

</section>


<!--mission vission-->
<section class="mission_vission">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 style="padding-top: 15px; padding-bottom: 5px; border-bottom: 1px solid #000000; width: 70%; font-size: 16px;" >Islami Bank Model School & College</h3>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('public/frontend/image/left.png')}}" style="border: 1px solid #ddd;padding: 5px;
background: #EFEE03;border-radius: 30px; float: left; margin-right: 10px; ">
                <p style="text-align: justify;"><strong>WHO WE ARE :</strong>
                  {{$about_school->title}}

                </p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/backend/image/'.$principal_message->image)}}" style="border: 1px solid #ddd;padding: 5px;
background: #EFEE03;border-radius: 30px; float: left; margin-right: 10px; width: 225px" height="225px" ;>
                <p style="text-align: justify;"><strong>Principal Message</strong>
                   {{$principal_message->title}}
                </p>
            </div>
        </div>

    </div>
</section>
<!--Column Notice bord-->
<section class="notice_board">
    <div class="container">
        <div class="row notice_board">

            <div class="col-md-6">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Notice</div>
                    <div class="card-body">
                        <marquee direction="up"> <h5 class="card-title">Admission on Going</h5>
                            <p class="card-text"><a href=""> Everyone will come to school wear mask.</a> </p>

                            <p class="card-text1"><a href="">পরিবারের কেউ অসুস্থ হলে শিক্ষককে জানান। </a> </p>
                        </marquee>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                       Importants Link
                    </div>
                    <ul class="list-group list-group-flush link">
                       <a href="http://ibfbd.org/">   Islami Bank Foundation </a>
                        <a href="https://dhakaeducationboard.gov.bd/">   Islami Bank Foundation </a>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>

        </div>


    </div>


</section>


<!--our service-->
<section class="services">
    <div class="container" style="padding-top: 15px;">

        <ul class="nav nav-tabs">
            @php
            $count_service = 0;
            @endphp
            @foreach($facilities as $key=> $facility)
            <li class="nav-item">
                <a href="#{{$facility->id}}" class="nav-link @if($count_service == 0){ active } @endif "data-bs-toggle="tab">{{$facility->short_title}}</a>
            </li>
                @php
                $count_service++
                @endphp
            @endforeach

        </ul>

        <div class="tab-content">
            @php
                $count_service = 0;
            @endphp
            @foreach($facilities as $facility)
            <div id="{{$facility->id}}" class="tab-pane container @if($count_service==0){ active } @endif">
                <h3>{{$facility->short_title}}</h3>
                <p>{{$facility->logng_title}}</p>
            </div>
                @php
                    $count_service++
                @endphp
            @endforeach



        </div>

    </div>

</section>

<!--footer-->


<!--go to up-->
@endsection



