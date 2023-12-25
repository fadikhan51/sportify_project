<!DOCTYPE html>
<html lang="en">

<head>
    <title>Glassmorphism Form</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Welcome Back!
            <span>Login to your account.</span>
        </h3>

        <label for="username">Username</label>
        <input type="text" placeholder="For ex. CodingArtist" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Minimum 6 characters" id="password">

        <button id="sign-in">Sign In</button>

    </form>
</body>

</html>