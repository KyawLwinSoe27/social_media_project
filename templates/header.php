<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>
    <link rel="stylesheet" href="<?php echo $url ?>assests/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>assests/css/style.css">
    <link rel="stylesheet" href="<?php echo $url ?>assests/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url ?>assests/css/app.css">
    <link rel="stylesheet" href="<?php echo $url ?>assests/css/dashboard.css">
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="row min-vh-100">
                <div class="col-12 navbar">
                    <div class="row w-100">
                        <div class="col-3 nav-left">
                            <div class="d-flex align-items-center">
                                <a class="navbar-brand">
                                    <img src="<?php echo $url; ?>assests/img/facebook.jpg" alt="" width="50" height="50">
                                </a>
                                <div class="d-none d-md-block">
                                    <input class="post-title form-control mr-5" type="search" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 nav-center d-none d-md-block">
                            <div class="d-flex justify-content-around mt-2 mx-2">
                                <button class="btn btn-primary btn-lg"><i class="feather-home"></i></button>
                                <button class="btn btn-lg"><i class="feather-film"></i></button>
                                <button class="btn btn-lg"><i class="feather-users"></i></button>
                                <button class="btn btn-lg"><i class="feather-cast"></i></button>
                            </div>
                        </div>
                        <div class="col-3 nav-right d-flex align-items-center justify-content-center">
                            <div class="user-info d-flex ">
                                <button class="btn btn-lg d-none d-md-block"><i class="feather-grid"></i></button>
                                <button class="btn btn-lg d-none d-md-block"><i class="feather-message-circle"></i></button>
                                <button class="btn btn-lg d-none d-md-block"><i class="feather-bell"></i></button>
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?php echo $url ?>assests/img/<?php print_r($_SESSION['user']['photo']);  ?>" class="user-img shadow-sm" alt=""> <?php echo $_SESSION['user']['name']; ?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo $url; ?>logout.php">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>