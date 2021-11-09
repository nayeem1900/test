<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="{{asset('frontend/css/4bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="{{asset('frontend/js/4bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/3jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/3.5.1jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/3bootstrap.min.css')}}">
    <script src="{{asset('frontend/js/3bootstrap.min.js')}}"></script>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }

    </style>
</head>
<body>

<body>
<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        @foreach($errors->all() as $error)<br/>
                            <strong>{{$error}} </strong>
                            @endforeach

                        </div>
                        @endif


                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label><br>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >


                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label><br>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >


                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


</body>
</html>