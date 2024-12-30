<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimony Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: linear-gradient(to right, #F52549, #FA6775);
            padding: 10px 0;
        }

        nav .nav-link {
            color: white !important;
            font-size: 1.2rem;
        }

        nav .nav-link:hover {
            text-decoration: underline;
        }

        header {
            background-color: #F52549;
            color: white;
        }

        .hero {
            background: linear-gradient(to right, #F52549, #FA6775);
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .features {
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .feature {
            text-align: center;
        }

        .feature img {
            width: 100px;
            margin-bottom: 1rem;
        }

        footer {
            margin-top: auto;
            background-color: #444;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('/') ?>">MatchFinder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('ProfileController') ?>">Profile</a></li> <!-- Profile Link Added -->
                <li class="nav-item"><a class="nav-link" href="<?= base_url('SearchController') ?>">Search</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('ExploreController') ?>">Explore</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('ActivityController') ?>">Activity</a></li>

                    <?php if ($this->session->userdata('user_id')): ?>
                        <!-- Show 'Logout' button if logged in -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('HomeController/logout') ?>">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Spacer to avoid overlap with fixed navbar -->
    <div style="height: 60px;"></div>

    <!-- Header -->
    <header class="py-4">
        <div class="container text-center">
            <h1>Welcome to MatchFinder</h1>
            <p>Your journey to find a perfect partner starts here!</p>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Find Your Soulmate</h2>
        <p class="lead">Join millions of happy couples who found love with MatchFinder.</p>
        <?php if (!$this->session->userdata('user_id')): ?>
            <!-- Show 'Get Started' button only if not logged in -->
            <a href="<?= base_url('SignupController') ?>" class="btn btn-light btn-lg mt-3">Get Started</a>
        <?php endif; ?>
        <?php if (!$this->session->userdata('user_id')): ?>
            <!-- Show 'Get Started' button only if not logged in -->
            <a href="<?= base_url('AddDetailController/form') ?>" class="btn btn-dark btn-lg mt-3">Add details</a>
        <?php endif; ?>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 feature">
                    <img src="https://via.placeholder.com/100" alt="Verified Profiles">
                    <h3>Verified Profiles</h3>
                    <p>Every profile is thoroughly verified for authenticity and trustworthiness.</p>
                </div>
                <div class="col-md-4 feature">
                    <img src="https://via.placeholder.com/100" alt="Advanced Matchmaking">
                    <h3>Advanced Matchmaking</h3>
                    <p>Smart algorithms to find the most compatible partners for you.</p>
                </div>
                <div class="col-md-4 feature">
                    <img src="https://via.placeholder.com/100" alt="Secure & Private">
                    <h3>Secure & Private</h3>
                    <p>Your personal information is safe and secure with us.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MatchFinder. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
