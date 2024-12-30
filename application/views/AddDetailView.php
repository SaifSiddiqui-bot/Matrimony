<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Personal Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f9f9f9;
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
            background: linear-gradient(to right, #F52549, #FA6775);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .form-section {
            padding: 40px 20px;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .form-heading {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #F52549;
        }

        .col-half {
            margin-bottom: 15px;
        }

        .btn-primary {
            background: linear-gradient(to right, #F52549, #FA6775);
            border-color: #F52549;
        }

        .btn-primary:hover {
            background-color: #FA6775;
            border-color: #FA6775;
        }

        .form-control, .form-select {
            border-radius: 8px;
        }

        .mb-3 label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('/') ?>">MatchFinder</a>
        </div>
    </nav>

    <!-- Spacer to avoid overlap with fixed navbar -->
    <div style="height: 60px;"></div>

    <!-- Header -->
    <header>
        <div class="container">
            <h2>Add Personal Details</h2>
        </div>
    </header>

    <!-- Form Section -->
    <section class="form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-heading">
                    <h3>Enter Your Details</h3>
                </div>

                <form method="POST" action="<?= base_url('AddDetailController/add_detail') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Left Section (Personal Information) -->
                        <div class="col-md-6 col-half">
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="education" class="form-label">Highest Education</label>
                                <input type="text" class="form-control" id="education" name="education" required>
                            </div>

                            <div class="mb-3">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" required>
                            </div>
                        </div>

                        <!-- Right Section (Religion, Family, etc.) -->
                        <div class="col-md-6 col-half">
                            <div class="mb-3">
                                <label for="religion" class="form-label">Religion</label>
                                <input type="text" class="form-control" id="religion" name="religion" required>
                            </div>

                            <div class="mb-3">
                                <label for="mother_tongue" class="form-label">Mother Tongue</label>
                                <input type="text" class="form-control" id="mother_tongue" name="mother_tongue" required>
                            </div>

                            <div class="mb-3">
                                <label for="caste" class="form-label">Caste</label>
                                <input type="text" class="form-control" id="caste" name="caste" required>
                            </div>

                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="father_occupation" class="form-label">Father's Occupation</label>
                                <input type="text" class="form-control" id="father_occupation" name="father_occupation">
                            </div>

                            <div class="mb-3">
                                <label for="mother_occupation" class="form-label">Mother's Occupation</label>
                                <input type="text" class="form-control" id="mother_occupation" name="mother_occupation">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit Details</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
