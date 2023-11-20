<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profileSettings.css') }}">
    <title>Thrift Termurah Sejagat Raya</title>
</head>
<body>
    <header class="navBar">
        <img src="/SourceIMG/Logo.png" alt="">
    </header>
    <div class="profile">
        <div class="logo">
            <img src="/SourceIMG/LoginLogo.png" alt="">
        </div>

        <div class="card">
            <form action="POST" action="{{ route('login.custom') }}">
                <h2>Register</h2>
                <p>Already have an account? <a href="">login Here</a></p>
                <input type="text" name="firstName" id="fName" placeholder="Username" class="input">
                <input type="email" name="email" id="email" placeholder="Email Address">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="password" name="password" id="password" placeholder="Confirm Password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <p>By registering, is the data in accordance with 
                    my personal data</p>
            </form>
        </div>
    </div>
</body>
</html>