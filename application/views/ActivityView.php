<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background: linear-gradient(to right, #F52549, #FA6775);
        }

        .navbar .nav-link {
            color: white !important;
        }

        .navbar .container {
            padding-top: 0;
            padding-bottom: 0;
        }

        /* Main heading styling */
        .section-heading {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Styling for the container sections */
        .section-container {
            border: 2px solid #F52549;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            background-color: #fff;
        }

        /* Card styling */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-body h5 {
            font-weight: bold;
            font-size: 1.25rem;
            color: #333;
        }

        .card-body p {
            font-size: 14px;
            color: #666;
        }

        .card-footer {
            background: linear-gradient(to right, #F52549, #FA6775);
            text-align: center;
            color: white;
            padding: 12px 0;
        }

        .card-footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }

        .no-interests {
            text-align: center;
            font-size: 1.2rem;
            color: #888;
        }

        /* Ensuring both sections are aligned horizontally */
        .activity-row {
            display: flex;
            justify-content: space-between;
        }

        .activity-row .col {
            flex: 0 0 48%;  /* Each column takes 48% of the available space */
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

        <!-- Main Title -->
        <h2 class="section-heading">Activity Overview</h2>

        <!-- Activity Section with two vertical halves -->
        <div class="activity-row">
            <!-- Sent Interests Section -->
            <div class="col">
                <div class="section-container">
                    <h4 class="section-heading">Sent Interests</h4>
                    <div class="row">
                        <?php if ($sent_interests): ?>
                            <?php foreach ($sent_interests as $interest): ?>
                                <div class="col-md-12 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5><?= $interest->username ?></h5>
                                            <p><strong>Email:</strong> <?= $interest->email ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('FullProController/index?email=' . $interest->email) ?>">View Full Profile</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="no-interests">No sent interests.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Received Interests Section -->
            <div class="col">
                <div class="section-container">
                    <h4 class="section-heading">Received Interests</h4>
                    <div class="row">
                        <?php if ($received_interests): ?>
                            <?php foreach ($received_interests as $interest): ?>
                                <div class="col-md-12 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5><?= $interest->username ?></h5>
                                            <p><strong>Email:</strong> <?= $interest->email ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('FullProController/index?email=' . $interest->email) ?>">View Full Profile</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="no-interests">No received interests.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
