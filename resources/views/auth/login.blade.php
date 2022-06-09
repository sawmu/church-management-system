<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin</title>
    <link rel="icon" type="image/x-icon" href="{{asset('backend/images/logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('backend/css/themes/lite-purple.min.css')}}" rel="stylesheet" />
</head>
<div class="auth-layout-wrap" style="background-image: url(../../backend/images/photo-wide-4.jpg)">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-4">
                        <div class="auth-logo text-center mb-4"><img src="{{asset('backend/images/logo.png')}}" alt="Logo"></div>
                        <h1 class="mb-3 text-18">Sign In</h1>
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control form-control-rounded" id="email" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" id="password" type="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
                        </form>
                        <div class="mt-3 text-center"><a class="text-muted" href="forgot.html">
                                <u>Forgot Password?</u></a></div>
                    </div>
                </div>
                <div class="col-md-6 text-center" style="background-size: cover;background-image: url(../../backend\/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right"><a  href="{{ route('register') }}" class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" ><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a href="{{ url('auth/google') }}" class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a href="{{ url('auth/facebook') }}" class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
