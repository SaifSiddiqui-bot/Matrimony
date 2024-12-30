<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1200px;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .profile-card img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #F52549;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header h2 {
            font-size: 32px;
            font-weight: 600;
            color: #333;
        }

        .profile-header p {
            font-size: 18px;
            color: #F52549;
            font-weight: bold;
        }

        .profile-section-title {
            font-size: 22px;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .profile-info {
            font-size: 16px;
            margin-bottom: 15px;
            color: #555;
        }

        .profile-info strong {
            font-weight: 600;
            color: #333;
        }

        .row {
            margin-bottom: 40px;
        }

        .section {
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .section p {
            font-size: 16px;
            color: #555;
        }

        .section p strong {
            color: #333;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            font-size: 18px;
        }

        .btn-contact {
            background-color: #F52549;
            color: white;
            border-radius: 5px;
            padding: 12px 30px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-contact:hover {
            background-color: #FA6775;
        }

        .badge {
            background-color: #F52549;
            color: white;
            font-weight: bold;
        }

        .social-icons {
            font-size: 24px;
            margin-top: 20px;
        }

        .social-icons a {
            color: #333;
            margin: 0 10px;
        }

        .social-icons a:hover {
            color: #F52549;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Profile Card -->
        <div class="profile-card">
            <div class="profile-header">
                <img src="<?= base_url('uploads/' . $profile->profile_picture) ?>" alt="Profile Picture">
                <h2><?= $profile->username ?></h2>
                <p><?= $profile->email ?></p>
            </div>

            <!-- Contact and Bio Info Section -->
            <div class="section">
                <div class="profile-section-title">Contact Information</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-info"><strong>Phone:</strong> <?= $profile->phone ?></div>
                        <div class="profile-info"><strong>Email:</strong> <?= $profile->email ?></div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-info"><strong>Date of Birth:</strong> <?= $profile->dob ?></div>
                    </div>
                </div>
            </div>

            <!-- Personal Information Section -->
            <div class="section">
                <div class="profile-section-title">Personal Information</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-info"><strong>Religion:</strong> <?= $profile->religion ?></div>
                        <div class="profile-info"><strong>Mother Tongue:</strong> <?= $profile->mother_tongue ?></div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-info"><strong>Caste:</strong> <?= $profile->caste ?></div>
                    </div>
                </div>
            </div>

            <!-- Professional Information Section -->
            <div class="section">
                <div class="profile-section-title">Professional Information</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-info"><strong>Education:</strong> <?= $profile->education ?></div>
                        <div class="profile-info"><strong>Occupation:</strong> <?= $profile->occupation ?></div>
                    </div>
                </div>
            </div>

            <!-- Family Section -->
            <div class="section">
                <div class="profile-section-title">Family Information</div>
                <p><strong>Parents:</strong> Information about parents will go here.</p>
                <p><strong>Sibling(s):</strong> Information about siblings will go here.</p>
            </div>

            <!-- Social Media / Contact Info Section -->
            <div class="section contact-info text-center">
                <a href="mailto:<?= $profile->email ?>" class="btn-contact">Contact <?= $profile->username ?></a>
                <div class="social-icons">
                    <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Icons (for social icons) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

</body>

</html>
