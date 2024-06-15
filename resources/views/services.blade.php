<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/231ebe179a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

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
                        <a class="nav-link active" href="about">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">About</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="services">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Services</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="MyBookings">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">My Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="location">
                            <span onmouseover="toggleHoverEffect(this)" onmouseout="toggleHoverEffect(this)">Location</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="services-section" id="location"></div>

<h1 id="lash-bar" style="text-align: center; margin-top: 80px;">LASH BAR</h1>
<div class="services-gallery">
    @foreach($services as $service)
        @if($service->category == 'Lashes')
            <div class="content">
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}">
                <h3>{{ $service->name }}</h3>
                <p>{{ $service->category }}</p>
                <h6>{{ $service->price }} PHP</h6>
                <div class="book-button">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#bookModal" onclick="populateModal('{{ $service->name }}', {{ $service->price }})">Book Now</a>
                </div>
            </div>
        @endif
    @endforeach
</div>

<h1 id="brow-bar" style="text-align: center; margin-top: 80px;">BROW BAR</h1>
<div class="services-gallery">
    @foreach($services as $service)
        @if($service->category == 'Brows')
            <div class="content">
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}">
                <h3>{{ $service->name }}</h3>
                <p>{{ $service->category }}</p>
                <h6>{{ $service->price }} PHP</h6>
                <div class="book-button">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#bookModal" onclick="populateModal('{{ $service->name }}', {{ $service->price }})">Book Now</a>
                </div>
            </div>
        @endif
    @endforeach
</div>


<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookModalLabel">Book Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="serviceName" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="serviceName" name="serviceName" readonly>
                    </div>
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
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Custom Alert Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alertModalLabel">Alert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Booking confirmed!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="alertOkButton">OK</button>
            </div>
        </div>
    </div>
</div>


<footer class="footer mt-5">
    <div class="container text-center">
        <h4 style="color: white;">Lash X Brow Lounge</h4>
        <div class="footer-content">
            <p style="color: white;">Email: <a href="mailto:info@lashxbrow.com" style="color: white;">info@lashxbrow.com</a></p>
            <p style="color: white;">Contact: <a href="tel:+1234567890" style="color: white;">+1 (234) 567-890</a></p>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com" style="color: white; margin: 0 10px;">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.twitter.com" style="color: white; margin: 0 10px;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" style="color: white; margin: 0 10px;">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" style="color: white; margin: 0 10px;">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</footer>

<script>
function populateModal(serviceName, servicePrice) {
    document.getElementById('serviceName').value = serviceName;
}
</script>
<script>
    $(document).ready(function() {
        $('#bookingForm').submit(function(event) {
            event.preventDefault(); // Prevent form submission

            // Submit the form via AJAX
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    // Show the alert modal
                    $('#alertModal').modal('show');
                },
                error: function(xhr, status, error) {
                    // Handle errors if necessary
                    console.error(xhr.responseText);
                }
            });
        });

        // Handle click event for OK button in the alert modal
        $('#alertOkButton').click(function() {
            // Redirect or perform any other action after the booking is confirmed
            // For example, you can reload the page
            location.reload();
        });
    });
</script>
<style>
    .services-section {
        position: relative;
        height: 50vh;
        background-size: cover;
        background-position: center;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url('{{ asset('home-images/services.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .services-gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 20px;
    }

    .content {
        background: #f9f9f9;
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .content h3 {
        margin-top: 10px;
        color: #333;
    }

    .content p {
        margin: 10px 0;
        color: #666;
    }

    .content h6 {
        margin-top: 10px;
        color: #E37383;
    }

    .book-button .btn {
        background: #E37383;
        color: #fff;
        border-radius: 5px;
        padding: 10px 20px;
        text-decoration: none;
    }

    .book-button .btn:hover {
        background: #d36275;
    }

    .background-animation {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        background: linear-gradient(120deg, #f0f0f0 25%, #fafafa 75%);
        background-size: 200% 200%;
        animation: gradientAnimation 3s ease infinite;
    }

    @keyframes gradientAnimation {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .footer {
        background-color: #333;
        color: white;
        padding: 20px 0;
    }

    .footer a {
        color: #E37383;
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }
</style>
</body>
</html>
