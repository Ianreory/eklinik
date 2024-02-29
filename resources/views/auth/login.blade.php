@extends('layouts.app')

@section('content')
    <style>
        .container1 {
            max-width: 350px;
            background: #f8f9fd;
            background: linear-gradient(0deg,
                    rgb(255, 255, 255) 0%,
                    rgb(244, 247, 251) 100%);
            border-radius: 40px;
            padding: 25px 35px;
            border: 5px solid rgb(255, 255, 255);
            box-shadow: rgba(122, 196, 230, 0.878) 0px 30px 30px -20px;
            position: absolute;

        }

        .heading {
            text-align: center;
            font-weight: 900;
            font-size: 30px;
            color: rgb(16, 137, 211);
        }

        .form {
            margin-top: 20px;
        }

        .form .input {
            width: 100%;
            background: white;
            border: none;
            padding: 15px 20px;
            border-radius: 20px;
            margin-top: 15px;
            box-shadow: #cff0ff 0px 10px 10px -5px;
            border-inline: 2px solid transparent;
        }

        .form .input::-moz-placeholder {
            color: rgb(170, 170, 170);
        }

        .form .input::placeholder {
            color: rgb(170, 170, 170);
        }

        .form .input:focus {
            outline: none;
            border-inline: 2px solid #12b1d1;
        }

        .form .forgot-password {
            display: block;
            margin-top: 10px;
            margin-left: 10px;
        }

        .form .forgot-password a {
            font-size: 11px;
            color: #0099ff;
            text-decoration: none;
        }

        .form .login-button {
            display: block;
            width: 100%;
            font-weight: bold;
            background: linear-gradient(45deg,
                    rgb(16, 137, 211) 0%,
                    rgb(18, 177, 209) 100%);
            color: white;
            padding-block: 15px;
            margin: 20px auto;
            border-radius: 20px;
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
            border: none;
            transition: all 0.2s ease-in-out;
        }

        .form .login-button:hover {
            transform: scale(1.03);
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
        }

        .form .login-button:active {
            transform: scale(0.95);
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
        }

        .social-account-container {
            margin-top: 25px;
        }

        .social-account-container .title {
            display: block;
            text-align: center;
            font-size: 10px;
            color: rgb(170, 170, 170);
        }

        .social-account-container .social-accounts {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 5px;
        }

        .social-account-container .social-accounts .social-button {
            background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
            border: 5px solid white;
            padding: 5px;
            border-radius: 50%;
            width: 40px;
            aspect-ratio: 1;
            display: grid;
            place-content: center;
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
            transition: all 0.2s ease-in-out;
        }

        .social-account-container .social-accounts .social-button .svg {
            fill: white;
            margin: auto;
        }

        .social-account-container .social-accounts .social-button:hover {
            transform: scale(1.2);
        }

        .social-account-container .social-accounts .social-button:active {
            transform: scale(0.9);
        }

        .agreement {
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        .agreement a {
            text-decoration: none;
            color: #0099ff;
            font-size: 9px;
        }

        .bodi1 {
            background-color: rgb(232, 220, 207);
            margin-top: 80px;
            margin-left: 580px;
        }
    </style>

    <body class="bodi1">
        <div class="container1">
            <div class="heading">Sign In</div>
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <input placeholder="E-mail" id="email" name="email" type="email"
                    class="input @error('email') is-invalid @enderror" required="" autocomplete="email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input placeholder="Password" id="password" name="password" type="password"
                    class="input @error('email') is-invalid @enderror" required="" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="forgot-password"><a href="#">Masukan dengan sesuai</a></span>
                <input value="Sign In" type="submit" class="login-button" />
            </form>
            <div class="social-account-container">
                <span class="title">Or Sign in with</span>
                <div class="social-accounts">

                </div>
            </div>
            <span class="agreement"><a href="#">Learn user licence agreement</a></span>
        </div>
    </body>
@endsection
