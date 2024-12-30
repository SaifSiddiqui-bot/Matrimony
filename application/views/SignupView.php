<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Body Flexbox Layout */
        body {
            background: #f0f2f5;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Navbar styling */
        .navbar {
            background: linear-gradient(to right, #F52549, #FA6775);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar .nav-link {
            color: white !important;
        }

        /* Content Section */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding-top: 80px; /* Adjust this padding to ensure the card is not hidden behind the navbar */
        }

        /* Card Styling */
        .card {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 40px 30px;
            text-align: center;
        }

        .card h2 {
            color: #F52549;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .btn {
            font-size: 18px;
            padding: 15px 30px;
            width: 100%;
            margin: 10px 0;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-register {
            background-color: #F52549;
            color: #fff;
        }

        .btn-register:hover {
            background-color: #FA6775;
        }

        .btn-login {
            background-color: #F52549;
            color: #fff;
        }

        .btn-login:hover {
            background-color: #FA6775;
        }

        .card-footer {
            font-size: 14px;
            color: #6c757d;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('/') ?>">MatchFinder</a>
        </div>
    </nav>

    <!-- Centered Content Section -->
    <div class="content">
        <div class="card">
            <h2>Welcome to Our Platform!</h2>

            <!-- Register Button -->
            <a href="<?= base_url('RegisterController') ?>" class="btn btn-register">Register</a>

            <!-- Login Button -->
            <a href="<?= base_url('LoginController') ?>" class="btn btn-login">Login</a>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
