<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/231ebe179a.js" crossorigin="anonymous"></script>
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #EFC3CA;
        }

        .navbar {
            margin-bottom: 2rem;
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 56px); /* 56px is the height of the navbar */
        }

        .login-container {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header img {
            width: 200px;
            height: 200px;
            display: block;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4169E1;
            box-shadow: 0 0 5px rgba(65, 105, 225, 0.5);
        }

        .form-error {
            color: red;
            font-size: 0.875rem;
        }


        .button-container {
            display: flex;
            justify-content: center; 
            align-items: center;
            margin-top: 20px; 
        }

        .submit-button {
            background-color: #4169E1;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 500px; 
        }

        .submit-button:hover {
            background-color: #365bb5;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
    <div class="container position-relative">
        <a class="navbar-brand fs-4 navbar-brand-centered" style="color: #E37383;">Lash X Brow Lounge Services Booking System</a>     

        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header text-white border-bottom">
                <h5 class="offcanvas-title" style="color:#038a91"  id="offcanvasNavbarLabel">Lash X Brow Lounge</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="login-container">
        <form method="POST" action="{{ route('admin.admin-login') }}">
            @csrf
            <div class="form-header">
                <img src="{{ asset('home-images/logo.png') }}" alt="Icon">
            </div>
            <div class="form-group">
                <label for="emailaddress">Email Address</label>
                <input type="email" name="email" id="emailaddress" placeholder="email address" class="@error('email') border-red-500 @enderror">
                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" class="@error('password') border-red-500 @enderror">
                @error('password')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="button-container">
                <button type="submit" class="submit-button">Log In</button>
            </div>
        
        </form>
    </div>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
</body>
</html>
