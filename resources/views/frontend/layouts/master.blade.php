<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Islami Bank Model School and College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=" {{asset('public/frontend/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script src=" {{asset('public/frontend/js/b63bb1dcf5.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
@include('frontend.layouts.top')
@include('frontend.layouts.header')
@yield('content')

@include('frontend.layouts.footer')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="gotoup">
                <img src="{{asset('frontend/image/scrolup.jpg')}}" style="width: 40px; height: 40px;">
            </div>
        </div>
    </div>

</div>
<script src=" {{asset('public/frontend/js/jquery-3.6.0.min.js')}} " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(window).scroll(function () {
            if($(this).scrollTop()>300){
                $('.gotoup').fadeIn();
            }else {
                $('.gotoup').fadeOut();
            }
        });
        $('.gotoup').click(function () {
            $('html,body').animate({scrollTop:0},500);
        });
    });
</script>



<script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<script src=" {{asset('public/frontend/js/3.5.1jquery.min.js')}}"></script>
</body>
</html>