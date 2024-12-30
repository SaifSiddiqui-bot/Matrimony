<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Profiles</title>
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
            padding-top: 0;
            padding-bottom: 0;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            padding-top: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            width: 100%;
        }

        .card img {
            width: 80%;
            height: 250px;
            object-fit: cover;
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

        .card-footer .btn {
            width: 48%; /* Make buttons occupy equal width */
            font-weight: bold;
            padding: 3px 5px; /* Reduced padding for shorter buttons */
            font-size: 14px; /* Slightly smaller font size */
            min-height: 36px; /* Ensure a consistent height */
            border-radius: 5px; /* Optional: Slightly rounded corners for a better look */
        }

        .card-footer .btn-view-profile {
            background-color:rgb(206, 28, 57);
            border: none;
            color: white;
        }

        .card-footer .btn-send-interest {
            background-color: #28a745; /* Green color */
            border: none;
            color: white;
        }

        .card-footer .btn:hover {
            opacity: 0.8;
        }

        /* Toast styles */
        .toast-container {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1050;
            padding: 10px;
        }

        .toast {
            max-width: 350px;
            background-color: #28a745;
            color: white;
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
        <h2 class="text-center mb-4">Explore Profiles</h2>

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
                            <div class="card-footer d-flex justify-content-between">
                                <!-- View Full Profile Button -->
                                <a href="<?= base_url('FullProController/index?email=' . $profile->email) ?>" 
                                   class="btn btn-view-profile">
                                   View Full Profile
                                </a>

                                <!-- Send Interest Button -->
                                <button class="btn btn-send-interest send-interest" 
                                        data-sender-email="saif@saif.com" 
                                        data-receiver-email="<?= $profile->email ?>">
                                    Send Interest
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No profiles found.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Toast Notification for Acknowledgment -->
    <div class="toast-container">
        <div id="interestToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">MatchFinder</strong>
                <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <!-- Dynamic Message will be inserted here -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handle send interest button click
            $('.send-interest').click(function() {
                var senderEmail = $(this).data('sender-email');
                var receiverEmail = $(this).data('receiver-email');

                $.ajax({
                    url: '<?= base_url('ExploreController/send_interest') ?>',
                    type: 'POST',
                    data: {
                        sender_email: senderEmail,
                        receiver_email: receiverEmail
                    },
                    dataType: 'json',
                    success: function(response) {
                        var toastMessage = '';
                        if (response.status === 'success') {
                            toastMessage = response.message;  // Display success message
                        } else {
                            toastMessage = response.message;  // Display error message
                        }

                        // Update the toast message dynamically
                        $('.toast-body').text(toastMessage);
                        
                        // Show the toast
                        var toast = new bootstrap.Toast($('#interestToast')[0]);
                        toast.show();
                    },
                    error: function() {
                        var toastMessage = 'Error sending interest.';
                        $('.toast-body').text(toastMessage);
                        
                        // Show the toast
                        var toast = new bootstrap.Toast($('#interestToast')[0]);
                        toast.show();
                    }
                });
            });
        });
    </script>

</body>
</html>
