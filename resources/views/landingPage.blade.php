<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <!-- Styling font 'Poppins' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
    <title>Thrift Termurah sejagat raya</title>
</head>
<body>
    @include('component/message')
    <header class="navbar">
        <img src="{{ asset('/SourceIMG/Logo.png') }}" class="logo limit">
        <ul>
            <li class="li-1"><a class="link" href="#home">Home</a></li>
            <li class="li-2"><a class="link2" href="#women">Women</a></li>
            <li class="li-3"><a class="link3" href="#men">Men</a></li>
            <li class="bottom_line"></li>
        </ul>
        <div class="rightNav">

            {{-- <a class="cart" href="#selling"><img src="/SourceIMG/cart-shopping-solid.svg" class="logo"></a> --}}
            
            @if (Auth::check()) {{-- untuk cek Login -> True or False sehingga menampilkan informasi ketika sudah login --}}
                <a href="profileSettings/{{Auth::user()->id}}">
                    {{-- <img class="userProfile" src="{{ asset('photo') . '/' . Auth::user()->image }}"> --}}
                    <img class="userProfile" src="{{ asset(Auth::user()->image) }}">
                </a>
                <figcaption class="mx-3 my-auto" style="align-items: center;">{{  Auth::user()->firstName }}</figcaption>   
                <div class="vline"></div> {{-- untuk garis pembatas --}}
                <a href="{{ url('logout') }}">
                    <button type="button" class="btn btn-warning">Logout</button>
                </a>
            @endif
            @if (!Auth::check())
                <a href="{{ url('login') }}"><button type="button" class="btn btn-success">Login</button></a>
            @endif
        </div>
    </header>

    <div class="higlight-container">
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/Travis Scott x McDonalds Live From Utopia T-Shirt Black.png') }}" style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/Travis Scott Black Bing - Washed Tee.png') }}"  style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/Cry Over Me - Washed Tee.png') }}" style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <div class="mySlides fade">
            <img class= "himage" src="{{ asset('/SourceIMG/AirForce1-2.png') }}" style="width: 100%;" alt="">
            <figcaption class="test"></figcaption>
        </div>
        <!-- ini untuk button next/prev -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <!-- Bagian Trending  -->
    <h3 class="" style="padding:2% 0% 0% 15%">Trending</h3>
    <div class="forYou">
        <div class="card test">
            <a href="{{ url('detail') }}">
                <div class="caption addOn">Air Force 1</div>
                <img class="catalog" src = "/SourceIMG/AirForce1-3.png" ></a>
                <div class="caption price">Rp. 1.xxx.xxx</div>
            </a>
        </div>
        <div class="card test">
            <a href="{{ url('detail') }}">
                <div class="caption">Air Force 1</div>
                <img class="catalog" src = "/SourceIMG/AirForce1-3.png" ></a>
                <div class="caption price">Rp. 1.xxx.xxx</div>
            </a>
        </div>
        <div class="card test">
            <a href="{{ url('detail') }}">
                <div class="caption">Air Force 1</div>
                <img class="catalog" src = "/SourceIMG/AirForce1-3.png" ></a>
                <div class="caption price">Rp. 1.xxx.xxx</div>
            </a>
        </div>
        <div class="card test">
            <a href="{{ url('detail') }}">
                <div class="caption">Air Force 1</div>
                <img class="catalog" src = "/SourceIMG/AirForce1-3.png" ></a>
                <div class="caption price">Rp. 1.xxx.xxx</div>
            </a>
        </div>
        <div class="card test">
            <a href="{{ url('detail') }}">
                <div class="caption">Air Force 1</div>
                <img class="catalog" src = "/SourceIMG/AirForce1-3.png" ></a>
                <div class="caption price">Rp. 1.xxx.xxx</div>
            </a>
        </div>
    </div>

    <!-- Bagian Women -->
    <h3 id="women" style="padding:10% 0% 2% 15%">Women</h3>
    <div class="women-container">
        
    </div>

    <!-- Bagian Men  -->
    <h3 id="men" style="padding:10% 0% 2% 15%">Men</h3>
    <div class="men-container">
        
    </div>
    
    <footer class="foot">
        <div class="">
            <img class="logo" src="{{ asset('SourceIMG/Logo.png') }}">
            {{-- <p>Lorem ipsum dolor sit amet consectetur.</p> --}}
        </div>
        <div class="socmed">
            <p>Keep in touch with us!</p>
            <ul>
                <a href="https://www.instagram.com/irhaamzharfan/" target="_blank"><i class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i></a>
                <a href="https://www.instagram.com/irhaamzharfan/" target="_blank"><i class="fa-brands fa-whatsapp fa-xl" style="color: #000000;"></i></a>
                <a href="https://www.instagram.com/irhaamzharfan/" target="_blank"><i class="fa-brands fa-tiktok fa-xl" style="color: #000000;"></i></a>
            </ul>
        </div>
        <div class="owner">
            <ul>
                NiThrift - Created &copy; 2023
            </ul>
        </div>
    </footer>

    <div class="label">
        <h3>Hubungi kami jika ingin barang terbaik dengan harga terbaik</h3>
    </div>

    <script src="{{ asset('js/highlight.js') }}"></script>
    <script src="https://kit.fontawesome.com/779f43f783.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <script src="{{ asset('js/landingPage.js') }}"></script>
    <script src="{{ asset('js/directToCategory.js') }}"></script>
</body>
</html>