<?php require_once "./core/base.php"; ?>
<?php require_once "./core/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="<?php echo $url ?>assests/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>assests/css/style.css">
    <link rel="stylesheet" href="<?php echo $url ?>assests/css/app.css">
</head>

<body class="bg-img">

    <section class="section-body">
        <div class="container">
            <div class="row d-flex justify-content-end vh-100 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="text-center my-3">
                        <h3 class="account-title">Create a new Account</h3>
                    </div>
                    <div class="card shadow" style="--bs-bg-opacity: .5;">
                        <div class="card-body">
                            <?php
                            if (isset($_POST['register'])) {
                                echo register();
                            }
                            ?>
                            <form class="row g-3" method="post">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control" placeholder="Full Name" name="full_name">
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="col-6 mt-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="col-6 mt-3 rounded-3">
                                    <input type="password" class="form-control" placeholder="Confirm-password" name="c_password">
                                </div>

                                <div class="col-12 mt-3">
                                    <button class="btn btn-secondary" name="register">Register</button>
                                    <a href="login.php" class="btn btn-secondary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo $url ?>assests/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>