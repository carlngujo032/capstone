<?php 
  session_start();
  if(!isset($_SESSION['user_id'])){
    header("location: ../../index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DOWNLOADED CSS -->
    <link rel="stylesheet" href="../../../bootstrap/boots.css">
	<link rel="stylesheet" href="../../../fontawesome/all.min.css">
	<link rel="stylesheet" href="../../../fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="../../../bootstrap-icons-1.11.1/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../css/style/global.css">
    <link rel="stylesheet" href="../../../css/style/responsive.css">
    <link rel="stylesheet" href="../../../toaster/toastr.min.css">
    <link rel="icon" type="image/x-icon" href="../../images/logo.png">
    
    <title>Chat | Page</title>
    
</head>

<body>
    <!-- Start navbar -->
    <div class="main-container d-flex">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="../../../images/logo.png" class="logo" alt="Logo"></a>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                    type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" href="../../../pages/customer/product.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/chatCustomer1/index.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../pages/customer/about1.php">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                History
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../../pages/customer/historyOrders.php">Orders</a></li>
                                <li><a class="dropdown-item" href="../../../pages/customer/historyReserves.php">Reserves</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../../pages/customer/recipes1.php">Recipes</a></li>
                                <li><a class="dropdown-item" href="../../../pages/customer/gallery1.php">Gallery</a></li>
                                <li><a class="dropdown-item" href="../../../pages/customer/services1.php">Services</a></li>
                                <li><a class="dropdown-item" href="../../../pages/customer/profile1.php">Profile</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-basket-shopping fa-lg text-dark"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../../pages/customer/purchase1.php">Purchase</a></li>
                                <li><a class="dropdown-item" href="../../../pages/customer/basket1.php">Reservation</a></li>
                                <button type="button" class="dropdown-item" id="btn-logout">Logout</button>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End-->

        <!-- Start Bottom Tab -->
        <div class="content">
            <div class="bottom-navigation">
                <nav>
                    <div class="nav container">
                        <div class="nav__menu" id="nav-menu">
                            <ul class="nav__list list-unstyled">

                                <li class="nav__item">
                                    <a href="../../../pages/customer/product.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-shop  nav__icon"></i>
                                        <span class="nav__name">Home</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="gallery1.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-images nav__icon"></i>
                                        <span class="nav__name">Gallery</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../../pages/customer/about1.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-people-fill nav__icon"></i>
                                        <span class="nav__name">About</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../../pages/customer/services1.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-gear-wide nav__icon"></i>
                                        <span class="nav__name">Services</span>
                                    </a>
                                </li>

                                <li class="nav__item">
                                    <a href="../../../pages/customer/profile1.php" class="nav__link text-decoration-none">
                                        <i class="bi bi-person-circle nav__icon"></i>
                                        <span class="nav__name">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Bottom Tab -->

            <!-- Start Body -->
			<section>
            <div class="container p-5">
                <div class="row bg-light mt-5 p-5 chat">
                    <div class="col-md-6 offset-md-3">
                        <div id="messageReceived"></div>
                        <div class="input-group mb-3">
                            <input type="text" id="chat" class="form-control rounded" placeholder="Type your message...">
                            <div class="input-group-append">
                                <button class="btn btn-primary mx-2 rounded" id="send" type="button">Send</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </section>
            <!-- End Body -->
        </div>
    </div>


	<script src="../../../plugins/privacy/jquery.js"></script>
	<script src="../../../plugins/privacy/logout.js"></script>
	<script src="../../../plugins/privacy/chatC.js"></script>
    
    <!-- DOWNLOADED JS -->
    <script src="../../../toaster/toastr.min.js"></script>
    <script src="../../../sweetalert/alert.js"></script>
    <script src="../../../bootstrap/boots.js"></script>

    <script>
        $('.open-btn').on('click', function () {
            $('.sidebar').addClass('active');
        });
        $('.close-btn').on('click', function () {
            $('.sidebar').removeClass('active');
        });
    </script>
</body>

</html>