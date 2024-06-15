<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

<div class="about-section" id="about"></div>

<div class="about-container">
    <div class="content">
        <img src="home-images/about-image.jpg" alt="who we are">
        <div class="text-content">
            <h1><span style="color:#E37383;">WHO WE ARE</h1>
            <h6>Lash X Brow Lounge is a premier beauty destination dedicated to enhancing your natural beauty through expertly crafted lash and brow services.</h6>
            <p>We specialize in lash extensions and brow sculpting, utilizing advanced techniques to create looks that are tailored to your individual preferences and features. 
                Whether you're seeking a subtle enhancement for everyday elegance or a dramatic, head-turning transformation for a special occasion, we have the expertise to bring your vision to life.</p>
        </div>
    </div>
</div>

<div id="services">
    <div class="offer-container">
        <br>
        <h1 style="text-align: center;">WHAT WE DO</h1>
        <br>
        <h1 style="font-size: 30px; ">Lash Services</h1>
        <div class="services-list">
            <div>
                <h2>Lash Extensions</h2>
                <p>
                    Classic Lash Extensions
                </p>
                <p>
                    Volume Lash Extensions
                </p>
                <p>
                    Hybrid Lash Extensions
                </p>
            </div>
            <div>
                <h2>Lash Lifts</h2>
                <p>
                    Enhance your natural lashes with a lift and curl that opens up your eyes and creates a more awake and youthful appearance without the need for extensions.
                </p>
            </div>
            <div>
                <h2>Lash Tinting</h2>
                <p>
                    Darken your natural lashes with a custom tint, giving them a fuller and more defined look that lasts for weeks.
                </p>
            </div>

        </div>
        <h1 style="font-size: 30px; margin-top: 50px;">Brow Services</h1>
        <div class="services-list">
            <div>
                <h2>Brow Sculpting</h2>
                <p>
                    Brow Shaping
                </p>
                <p>
                    Brow Tinting
                </p>
            </div>
            <div>
                <h2>Brow Lamination</h2>
                <p>
                    Create a fuller, more defined brow look with brow lamination, which involves setting the brow hairs in place for a sleek, uniform appearance.
                </p>
            </div>
            <div>
                <h2>Microblading</h2>
                <p>
                    A semi-permanent tattooing technique that uses fine, hair-like strokes to create natural-looking, fuller brows that last for up to two years.
                </p>
            </div>
        </div>
        <br>
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
    .about-section {
        position: relative;
        height: 50vh;
        background-size: cover;
        background-position: center;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('{{ asset('home-images/aboutus.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .nav-link span:hover {
        color:  #E37383;
    }

    .about-container {
    display: flex;
    justify-content: center;
    text-align: center;
    margin-top: 40px;
    margin-bottom: 40px;
    }

    .content {
        display: flex;
        align-items: center;
        gap: 20px; 
    }

    .content img {
        width: 500px;
        height: auto;
    }

    .text-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .text-content h1 {
        margin-bottom: 20px; 
    }
    .text-content h6 {
        margin-bottom: 20px; 
    }
    .text-content p {
        max-width: 600px; 
    }


    .offer-container {
        padding: 10px 10%;
        background-color: #F2D4C3;
    }
    .services {
    padding: 50px 0;
    }
    .services-list{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 40px;
        margin-top: 50px;
    }
    .services-list div {
    border: 2px solid #000000;
    padding: 40px;
    font-size: 13px;
    font-weight: 300;
    border-radius: 10px;
    transition: 0.5s, transform 0.5s;
    background: transparent;
    }
    .services-list div h2{
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 15px;
        color: #000;
    }
    .services-list div a{
        text-decoration: none;
        color: #000;
        font-size: 12px;
        margin-top: 20px;
        display: inline-block;
    }
    .services-list div:hover{
        background: #E37383;
        transform: translateY(-20px);
    }
    .services-list div p{
        font-size: 15px;
        color: #000;
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
