<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Profiles</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .navbar {
            background: linear-gradient(to right, #F52549, #FA6775);
        }

        .navbar .nav-link {
            color: white !important;
        }

        .navbar .container {
            padding-top: 0; /* Remove extra padding from the navbar */
            padding-bottom: 0; /* Remove bottom padding from the navbar */
        }

        h2 {
            margin-top: 0; /* Remove extra margin-top from heading */
            margin-bottom: 30px; /* Set a bit of space between heading and profiles */
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            padding-top: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            width: 100%; /* Ensure it takes full column width */
        }

        .card img {
            width: 80%; /* Slightly increase the image width */
            height: 250px; /* Keep the image height */
            object-fit: cover; /* Maintain aspect ratio */
            display: block;
            margin: 0 auto;
            border-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h5 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-body p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .card-footer {
            background: linear-gradient(to right, #F52549, #FA6775);
            text-align: center;
            color: white;
            padding: 10px;
        }

        .card-footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('/') ?>">MatchFinder</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Search Profiles</h2>

        <!-- Search Form -->
        <form method="GET" action="<?= base_url('SearchController/index') ?>" class="mb-4">
            <div class="mb-3">
                <input type="text" name="query" class="form-control" placeholder="Search by name..." value="<?= isset($query) ? $query : '' ?>" required>
            </div>
            <button type="submit" class="btn w-100" style="background: linear-gradient(to right, #F52549, #FA6775); color: white; border: none; border-radius: 5px;">
                Search
            </button>
        </form>


        <div class="row">
            <?php if ($profiles): ?>
                <?php foreach ($profiles as $profile): ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="<?= base_url('uploads/' . $profile->profile_picture) ?>" alt="Profile Picture">
                            <div class="card-body text-center">
                                <h5><?= $profile->username ?></h5>
                                <p><strong>Education:</strong> <?= $profile->education ?></p>
                                <p><strong>Occupation:</strong> <?= $profile->occupation ?></p>
                                <p><strong>Religion:</strong> <?= $profile->religion ?></p>
                                <p><strong>Mother Tongue:</strong> <?= $profile->mother_tongue ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('FullProController/index?email=' . $profile->email) ?>" class="text-white">View Full Profile</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No profiles found.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
