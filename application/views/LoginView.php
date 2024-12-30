<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Colors */
        .navbar {
            background: linear-gradient(to right, #F52549, #FA6775);
        }

        .navbar .nav-link {
            color: white !important;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #FA6775; /* Using #FA6775 for border */
            border-radius: 8px;
            background-color: #FFF0F5; /* Light pink background */
        }

        .btn-primary {
            background-color: #F52549; /* Using #F52549 for button background */
            border-color: #F52549; /* Same color for border */
        }

        .btn-primary:hover {
            background-color: #FA6775; /* On hover, use lighter pink */
            border-color: #FA6775; /* Lighter pink for border on hover */
        }

        .form-label {
            color: #F52549; /* Using #F52549 for label text */
        }

        .text-danger {
            color: #F52549; /* Using #F52549 for error messages */
        }

        a {
            color: #F52549; /* Using #F52549 for links */
        }

        a:hover {
            color: #FA6775; /* Hover effect on links */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url('/') ?>">MatchFinder</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="form-container">
            <h2 class="text-center" style="color: #F52549;">Login</h2>

            <!-- Display Error Message -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <!-- Login Form -->
            <form method="POST" action="<?= base_url('LoginController/index') ?>">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" required>
                    <?= form_error('email', '<div class="text-danger">', '</div>') ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <?= form_error('password', '<div class="text-danger">', '</div>') ?>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <div class="mt-3 text-center">
                <p>Don't have an account? <a href="<?= base_url('RegisterController') ?>">Register here</a></p>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
