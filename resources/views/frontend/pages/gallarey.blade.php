

@extends('frontend.layouts.master')
@section('content')<br>

<section class="baner">

    {{--<img src="{{url('public/frontend/image/s1.png')}}" style="width:100%;">--}}

</section>

<!--Grid-->
<section class="grid">
  <div class="container">
      @foreach($gallareys as $gallarey)


       {{--   <div class="card-group">
              <div class="card">
                  <img src="{{asset('backend/image/' .$gallarey->image)}}" class="card-img-top" alt="...">
                  <div class="card-body">


                  </div>
              </div>
          </div>--}}




      <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
              <div class="card">

                     <img src="{{asset('public/backend/image/' .$gallarey->image)}}" class="card-img-top" alt="...">


              </div>
          </div>


      </div>





       @endforeach

  </div>




</section><br>






@endsection