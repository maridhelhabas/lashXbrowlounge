<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lashxbrowlounge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/231ebe179a.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="background-animation"></div>

<nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fs-4" style="color: #E37383" href="/">Lash X Brow Lounge</a>
        <button class="navbar-toggler shadow border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header text-white border-bottom">
                <h5 class="offcanvas-title" style="color:#038a91"  id="offcanvasNavbarLabel">Lash X Brow Lounge</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <!-- <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Home</span>
                        </a>
                    </li> -->
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="about">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">About</a></span> 
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="services">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Services</a></span> 
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="MyBookings">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">My Bookings</a></span>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="location">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Location</a></span>
                    </li>    
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="home-section" id="home">
    <div class="container" style="display: flex; align-items: center;">
        <div style="flex: 1;">
            <h1 style="font-size: 50px; color: white; font-weight: 900;"><span style="color:#E37383;">Lash X Brow Lounge</span></h1>
            <h1 style="font-size: 30px; color: black; font-weight: 900;">BY MARICHI</h1>
            <p class="text-animation animated">Unlock Your Beauty Potential at Lash X Brow Lounge: Where Every Gaze Tells a Story.</p>
            <div class="book-button">
                <a href="services" class="btn">BOOK NOW!</a>
            </div>
        </div>
    </div>
</div>

<div class="offer-container">
    <h1 style="margin-bottom: 40px;">WHAT WE OFFER</h1>
    <div class="offer-list">
        <div class="offer-item">
            <a href="#lash-bar">
                <img src="home-images/lash-bar.png" alt="lash bar">
            </a>
            <h2 style="margin-top: 10px; font-size: 1.2em;">LASH BAR</h2>
        </div>
        <div class="offer-item">
            <a href="#brow-bar">
                <img src="home-images/brow-bar.png" alt="brow bar">
            </a>
            <h2 style="margin-top: 10px; font-size: 1.2em;">BROW BAR</h2>
        </div>
    </div>
    <div class="services-button">
        <a href="{{ url('/services') }}" class="btn">VIEW LIST OF SERVICES</a>
    </div>
</div>

<div class="location-container">
    <i class="fa-solid fa-map-location-dot fa-5x" style="color: #000000;"></i>
    <h1 style="margin-bottom: 40px; margin-top: 20px;">See you at Lash X Brow Lounge near you!</h1>
    <p style="font-family: Verdana;">"Come experience the beauty transformation at Lash X Brow Lounge – where every visit leaves you feeling brow-dacious and lash-tastic, one stunning look at a time!"</p>
    <div class="location-button">
        <a href="{{ route('location') }}" class="btn">SEE OUR LOCATION</a>
    </div>
</div>


<footer class="footer">
    <div class="container text-center">
        <h4 style="color: white;">Lash X Brow Lounge</h4>
        <div class="footer-content">
            <p style="color: white;">Email: <a href="mailto:info@lashxbrow.com" style="color: white;">info@lashxbrow.com</a></p>
            <p style="color: white;">Contact: <a href="tel:+1234567890" style="color: white;">+1 (234) 567-890</a></p>
        </div>
        <div class="social-links">
                <a href="https://www.facebook.com"  style="color: white; margin: 0 10px;">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.twitter.com" style="color: white; margin: 0 10px;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com" style="color: white; margin: 0 10px;">
                    <i class="fab fa-instagram"></i>
                </a>
        </div>
    </div>
</footer>




<style>
    .home-section {
        position: relative;
        height: 100vh;
        background-size: cover;
        background-position: center;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('{{ asset('home-images/background 1.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .nav-link span:hover {
        color:  #E37383;
    }

    .book-button {
        margin-top: 30px; 
    }

    .book-button .btn{
        width: 300px; 
        height: 40px;
        text-align: center;
        box-shadow: 0 0.5rem 1rem rgba(227, 115, 131, 0.5);
        border: 2px solid #E37383;
    }
    .book-button .btn:hover {
        background-color: #E37383; /* Hover background color */
        border-color: #E37383; /* Hover border color */
    }


    .offer-container {
        background-color: #fff;
        text-align: center;
        padding: 30px;
    }

    .offer-list {
        display: flex;
        justify-content: center;
        gap: 40px;
    }

    .offer-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px
    }

    .offer-item img {
        width: 100px;
        height: auto;
    }

    .services-button {
    margin-top: 40px;
    }

    .services-button .btn {
        width: 300px; 
        height: 50px;
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        color: #000;
        border: 2px solid #000;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s, border-color 0.3s;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
    }

    .services-button .btn:hover {
        background-color: #E37383;
        border-color: #E37383;
    }

    .location-container {
        text-align: center;
        padding: 50px;
    }
    .location-button {
    margin-top: 40px;
    }

    .location-button .btn {
        width: 300px; 
        height: 50px;
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        color: #000;
        border: 2px solid #000;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s, border-color 0.3s;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
    }

    .location-button .btn:hover {
        background-color: #E37383;
        border-color: #E37383;
    }


    .footer {
    background-color: #333;
    padding: 10px 0;
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .footer-content p {
        margin: 0 10px; 
        font-size: 15px; 
    }

    .social-links {
        margin-top: 5px; 
    }



</style>

</body>
</html>


<script>
    function toggleHoverEffect(element) {
    }
</script>
