<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('backend/images/logo.png') }}">

    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('backend/css/themes/lite-purple.min.css')}}" rel="stylesheet"> 
</head>
<div class="auth-layout-wrap" style="background-image: url(../../backend/images/photo-wide-4.jpg)">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-6 text-center" style="background-size: cover;background-image: url(../../backend/images/photo-long-3.jpg)">
                    <div class="pl-3 auth-right">
                        <div class="auth-logo text-center mt-4"><img src="../../backend/images/logo.png" alt=""></div>
                        <div class="flex-grow-1"></div>
                        <div class="w-100 mb-4"><a class="btn btn-outline-primary btn-block btn-icon-text btn-rounded" href="{{ route('login') }}"><i class="i-Mail-with-At-Sign"></i> Sign in with Email</a><a href="{{ url('auth/google') }}" class="btn btn-outline-google btn-block btn-icon-text btn-rounded"><i class="i-Google-Plus"></i> Sign in with Google</a><a href="{{ url('auth/facebook') }}" class="btn btn-outline-facebook btn-block btn-icon-text btn-rounded"><i class="i-Facebook-2"></i> Sign in with Facebook</a></div>
                        <div class="flex-grow-1"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4">
                        <h1 class="mb-3 text-18">Sign Up</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Your name</label>
                                <input class="form-control form-control-rounded" id="name" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control form-control-rounded" id="email" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" id="password" type="password" name="password" autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <label for="repassword">Retype password</label>
                                <input class="form-control form-control-rounded"  id="cpassword" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
