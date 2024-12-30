<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Profile</title>
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

        .profile-container {
            margin: 50px auto;
            max-width: 1000px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background-color: white;
            display: flex;
            flex-wrap: wrap;
        }

        .profile-left {
            background: linear-gradient(to right, #F52549, #FA6775);
            color: white;
            flex: 1 1 35%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            text-align: center;
        }

        .profile-left img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-left h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-left p {
            margin: 5px 0;
        }

        .profile-right {
            flex: 1 1 65%;
            padding: 30px;
        }

        .profile-section {
            margin-bottom: 20px;
        }

        .profile-section h4 {
            color: #F52549;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .profile-section p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .profile-footer {

            background: linear-gradient(to right, #F52549, #FA6775);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .profile-footer a {
            color: white;
            text-decoration: none;
        }

        .profile-footer a:hover {
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

    <div class="container mt-5">
        <div class="profile-container">
            <!-- Left Section -->
            <div class="profile-left">
                <img src="<?= base_url('uploads/' . $profile->profile_picture) ?>" alt="Profile Picture">
                <h3><?= $profile->username ?></h3>
                <p><strong>Email:</strong> <?= $profile->email ?></p>
                <p><strong>Phone:</strong> <?= $profile->phone ?></p>
            </div>

            <!-- Right Section -->
            <div class="profile-right">
                <div class="profile-section">
                    <h4>Personal Information</h4>
                    <p><strong>Gender:</strong> <?= ucfirst($profile->gender) ?></p>
                    <p><strong>Date of Birth:</strong> <?= date('d M Y', strtotime($profile->dob)) ?></p>
                </div>

                <div class="profile-section">
                    <h4>Professional Details</h4>
                    <p><strong>Education:</strong> <?= $profile->education ?></p>
                    <p><strong>Occupation:</strong> <?= $profile->occupation ?></p>
                </div>

                <div class="profile-section">
                    <h4>Family Background</h4>
                    <p><strong>Father's Occupation:</strong> <?= $profile->father_occupation ?></p>
                    <p><strong>Mother's Occupation:</strong> <?= $profile->mother_occupation ?></p>
                </div>

                <div class="profile-section">
                    <h4>Cultural Details</h4>
                    <p><strong>Religion:</strong> <?= $profile->religion ?></p>
                    <p><strong>Mother Tongue:</strong> <?= $profile->mother_tongue ?></p>
                    <p><strong>Caste:</strong> <?= $profile->caste ?></p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="profile-footer">
            <a href="<?= base_url('ExploreController') ?>">Back to Profiles</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
