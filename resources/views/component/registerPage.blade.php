<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profileSettings.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <h2>Register</h2>
            <p>Already have an account? <a href="" style="color: green">Login Here</a></p>
            @include('component/errorMessage')
            <form action="login/request" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" value="{{ Session::get('fname') }}>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" value="{{ Session::get('lname') }}>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" value="{{ Session::get('phone') }}>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{ Session::get('email') }}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
            </form>
            <p>By registering, is the data in accordance with 
                my personal data</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
