<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
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

<div class="location-section" id="location"></div>

<div class="location-container">
    <i class="fa-solid fa-map-location-dot fa-5x" style="color: #E37383;"></i>
    <h1 style="margin-bottom: 40px; margin-top: 20px; color: #fff;">See you at Lash X Brow Lounge near you!</h1>
    <p style="font-family: Verdana; color: #fff;">"Come experience the beauty transformation at Lash X Brow Lounge – where every visit leaves you feeling brow-dacious and lash-tastic, one stunning look at a time!"</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d77459.19519477754!2d123.73323096646872!3d9.55769131576577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1716712761547!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    .location-section {
        position: relative;
        height: 50vh;
        background-size: cover;
        background-position: center;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('{{ asset('home-images/location.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .nav-link span:hover {
        color:  #E37383;
    }


    .location-container {
        text-align: center;
        padding: 50px;
        background-color: #000;
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
