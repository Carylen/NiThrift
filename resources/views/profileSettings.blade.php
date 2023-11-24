<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    
    <!-- Styling font 'Poppins' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="navbar">
        <img src="/SourceIMG/Logo.png" class="logo">
        <ul>
            <li><a href="#home"><a href="/SourceHTML/landingPage.html">Home</a></a></li>
            <li><a href="#women">Women</a></li>
            <li><a href="#men">Men</a></li>
        </ul>
        <a href="{{ url('logout') }}"><button type="button" class="btn btn-warning p-2">Logout</button></a>
    </header>
    <div class="container-profile">
        <div class="page1">
            <img src="/SourceIMG/avatar1.jpg" style="border-radius: 95px;">
            <figcaption>Irham Zharfan Atmoko</figcaption>
            <div class="dataUser">
                <p>Email</p>
                <p>Phone Number</p>
                <p>Date Of Birth</p>
            </div>
        </div>

        <div class="page2">
            <h2>Settings</h2>
            <!-- untuk list di bagian Settings (PersonalProfile, User Location, etc) -->
            <div class="list">
                <ul>
                    <li id="list">Personal Profile</li>
                    <li id="list2">User Location</li>
                    <li id="list3">Change Password & Email</li>
                </ul>
            </div>
            <hr style="color: whitesmoke;">
            
            <div class="personalProfile-container hide">
                <div class="editProfile">
                    <img src="/SourceIMG/avatar1.jpg" class="editProfileImg">
                    <button type="submit" class="save btn">Save Changes</button>                                                                                           
                </div>
                <div class="detailProfile">
                    <h4>First Name</h4>
                    <input type="text" placeholder="Enter Your First Name">
                    <h4>Last Name</h4>
                    <input type="text" placeholder="Enter Last Name">
                    <h4>Phone Number</h4>
                    <input type="text" name="" id="" placeholder="Enter Your Phone Number">
                    <h4>BirthDay</h4>
                    <input type="date" name="" id="">
                </div>
            </div>
        <!-- Ini container untuk User Location Detail -->
        
            <div class="userLocation-container hide">
                <div class="detailProfile">
                    <h4>Address</h4>
                    <input type="text" placeholder="Enter Your Address">
                    <h4>Province</h4>
                    <input type="text" placeholder="Enter Your Province">
                    <h4>City</h4>
                    <input type="text" placeholder="Enter Your City">
                    <h4>Postal Code</h4>
                    <input type="text" placeholder="Enter Your Postal Code">
                    <button class="save btn2" type="submit" onclick="alert('ur data will be posted.')">Save Changes</button>
                </div>
            </div>

            <!-- Ini Container untuk Change Password -->
            <div class="changePass-container hide">
                <h4>Email</h4>
                <input type="email" placeholder="Enter Your Email" required>
                <h4>Password</h4>
                <input type="password" placeholder="Enter Your Password">
                <h4>Confirm Password</h4>
                <input type="password" placeholder="Enter Your Confirm Password">
                <button class="save btn2" type="submit" onclick="alert('ur data will be updated.')">Save Changes</button>
            </div>
        </div>
    </div>

    <footer class="foot">
        <div class="logo">
            <img src="/SourceIMG/Logo.png">
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="socmed">
            <p>Keep in touch with us!</p>
            <ul>
                <a href="https://www.instagram.com/irhaamzharfan/"><i class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i></a>
                <a href="https://www.instagram.com/irhaamzharfan/"><i class="fa-brands fa-whatsapp fa-xl" style="color: #000000;"></i></a>
                <a href="https://www.instagram.com/irhaamzharfan/"><i class="fa-brands fa-tiktok fa-xl" style="color: #000000;"></i></a>
            </ul>
        </div>
        <div class="owner">
            {{-- <ul>
                <li>Irham Zharfan - 2502007880</li>
                <li>Evelyn Chrisyla Valentina - 2502028336</li>
                <li>Jedith Almando Istian - 2502016922</li>
                <li>Theofilus Jonathan - 2540117533</li>
                <li>Farrel Alexander Tjan - 2502013744</li>
            </ul> --}}
        </div>
    </footer>
    
    <div class="label">
        <h3>Hubungi kami jika ingin barang terbaik dengan harga terbaik</h3>
    </div>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="https://kit.fontawesome.com/779f43f783.js" crossorigin="anonymous"></script>
</body>
</html>