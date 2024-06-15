<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
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
                     <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Home</span>
                        </a>
                    </li> 
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="about">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">About</a></span> 
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="services">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Services</a></span> 
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#booking">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Book</a></span>
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

<div class="booking-section" id="booking"></div>

<div class="book-form">
    <div id="booking" class="booking-container">
        <h2>Book a Service</h2>
        <form action="{{ route('booking.store') }}" id="bookingForm" method="POST">
           
                <select id="service" name="service" required>
                    <option value="" disabled selected>Select a Service</option>
                    <optgroup label="Lash Bar">
                        <option value="lash_lift">Lash Lift</option>
                        <option value="classic">Classic Eyelash Extension</option>
                        <option value="hybrid">Hybrid Eyelash Extension</option>
                        <option value="volume">Volume Eyelash Extension</option>
                        <option value="lash_tint">Lash Tint</option>
                    </optgroup>
                    <optgroup label="Brow Bar">
                        <option value="brow_tidy">Brow Tidy</option>
                        <option value="brow_shaping">Brow Shaping</option>
                        <option value="microblading">Brow Microblading</option>
                        <option value="brow_lamination">Brow Lamination</option>
                        <option value="brow_tint">Brow Tint</option>
                    </optgroup>
                </select>
           
                <div class="mb-3">
                    <label for="userName" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="userName" name="userName" required>
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="userEmail" name="userEmail" required>
                </div>
                <div class="mb-3">
                    <label for="userPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="userPhone" name="userPhone" required>
                </div>
                <div class="mb-3">
                    <label for="bookingDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="bookingDate" name="bookingDate" required>
                </div>
                <div class="mb-3">
                    <label for="bookingTime" class="form-label">Time</label>
                    <input type="time" class="form-control" id="bookingTime" name="bookingTime" required>
                </div>
            
            
            <button type="submit">Book Now</button>
        </form>
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
    .booking-section {
        position: relative;
        height: 50vh;
        background-size: cover;
        background-position: center;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('{{ asset('home-images/book.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .book-form {
            font-family: Arial, sans-serif;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px; /* added padding to ensure there is space around the content */
            box-sizing: border-box;
        }

        .booking-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            background-color: #F6AFBA;
            backdrop-filter: blur(10px);
            animation: fadeInUp 1s ease-out;
            margin: 40px 0; /* added margin to the top and bottom */
        }

        .booking-container h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .booking-container form {
            display: flex;
            flex-direction: column;
        }

        .booking-container input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .booking-container button {
            padding: 10px;
            background-color: #F6AFBA;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 16px;
            cursor: pointer;
        }

        .booking-container button:hover {
            background-color: #FD788D;
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



<script>
    function toggleHoverEffect(element) {
    }
</script>
</body>
</html>

 -->
