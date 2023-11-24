<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detailProduct.css') }}">
    <!-- Styling font 'Poppins' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Thrift Termurah Sejagat Raya</title>
</head>
<body>
    <header class="navbar">
        <img src="/SourceIMG/Logo.png" class="logo">
        <ul>
            <li><a href="#home"><a href="{{ url('/') }}">Home</a></a></li>
            <li><a href="#women">Women</a></li>
            <li><a href="#men">Men</a></li>
        </ul>
        {{-- dibawah ini untuk cek sedang diposisi login/logout --}}
        <div class="rightNav">

            <a class="cart" href="#selling"><img src="/SourceIMG/cart-shopping-solid.svg" class="logo"></a>
            <div class="vline"></div> {{-- untuk garis pembatas --}}
            {{-- dibawah ini untuk cek sedang diposisi login/logout --}}
            @if (Auth::check())
                {{-- @foreach ($userHasLogin as $users)
                    <figcaption class="me-2 my-auto" style="align-items: center;"><a href="{{ url('profileSettings') }}">{{ $users }}</a></figcaption>   
                @endforeach --}}
                <a href="{{ url('logout') }}"><button type="button" class="btn btn-warning">Logout</button></a>
            @endif
            @if (!Auth::check())
                <a href="{{ url('login') }}"><button type="button" class="btn btn-success">Login</button></a>
            @endif
        </div>  
    </header>

    <div class="container">
        <div class="photoProduct box">
            <img class="himage" src="/SourceIMG/AirForce1-3.png" alt="">
        </div>
        <div class="paymentDetail box">
            <h1 style="text-align: center; font-weight: 900;">Jordan Retro White Brown - Low</h1>
            <div class="itemDetail">
                <div class="info">
                    <p>Size</p>
                    <p>45</p>
                </div>
                <div class="info">
                    <p>Condition</p>
                    <p>BNIB</p>
                </div>
                <div class="info">
                    <p>Item Location</p>
                    <p>Kota Bekasi, Jawa Barat, 17177</p>
                </div>
            </div>
            <div class="itemDetail">
                <h4 style="margin-bottom: 2vh;">Payment Summary</h4>
                <div class="info">
                    <p>Product Price</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="info">
                    <p>Admin</p>
                    <p>Rp. 80.000</p>
                </div>
                <div class="info total">
                    <p>Total</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <h4 style="margin: 2vh 0vh;">Seller Number</h4>
                <div class="detailSeller">
                    <div class="phoneNum">
                        <p>Pak Hartono</p>
                        <p>0881567832183</p>
                    </div>
                    <div class="buyMe">
                        <button type="submit" class="buy-btn" >BUY</button>
                    </div>
                </div>

                <div class="paymentInfo" style="display: none;">
                    <!-- Untuk QRCODE rekening seller -->
                    <div class="bankInfo">
                        <img src="/SourceIMG/qrcode.png" class="bankInfo">
                        <figcaption>Bank Central Asia.Tbk</figcaption>
                    </div>

                    <!-- container upload bukti transfer  -->
                    <div class="paymentProof">
                        <caption>Upload the proof of payment</caption>             
                        <i class="fa-solid fa-cloud-arrow-up  fa-4x upload" style="color: white;"></i>   
                        <button type="submit" class="paid-btn">PAID</button>
                    </div>
                </div>

                <div class="status">
                    <h3 style="display: none;">Payment Status</h3>
                    <img class="success" src="/SourceIMG/icon-checkList.png" alt="">
                    <img class="failed" src="/SourceIMG/icon-cancel.png" alt="">
                    <img class="waiting" src="/SourceIMG/icon-pending.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <div class="description">
        <h1 style="font-weight: 950; margin-bottom: 2vh;">Description</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Impedit ratione laboriosam officiis officia incidunt beatae ullam 
            ducimus velit iusto, omnis fugiat porro. Ipsum dolorum ab cum dolores 
            voluptatum beatae ipsa voluptatibus qui ratione, quasi fuga enim error 
            autem aut accusamus? Tempora, natus repudiandae nostrum earum exercitationem 
            labore quas rerum consequuntur! Esse expedita aliquid natus perferendis 
            alias, ullam quod quas. Voluptatum, repudiandae?</p>
    </div>
    <script src="{{ asset('js/detailProduct.js') }}"></script>
    <script src="https://kit.fontawesome.com/779f43f783.js" crossorigin="anonymous"></script>
</body>
</html>