<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Web RTC</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= assets('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= assets('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= assets('assets/css/templatemo-lava.css') ?>">
    <link rel="stylesheet" href="<?= assets('assets/css/owl-carousel.css') ?>">
    <link rel="stylesheet" href="<?= assets('toastr/toastr.min.css') ?>">
    <?= section('styles') ?>
    <style>
        .glass {
            background-color: rgba(255, 255, 255, .15);
            backdrop-filter: blur(5px);
        }
    </style>
    <!-- jQuery -->
    <script src="<?= assets('assets/js/jquery-2.1.0.min.js') ?>"></script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Web RTC
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/#welcome" class="menu-item active">Home</a></li>
                            <li class="scroll-to-section"><a href="/#about" class="menu-item">About</a></li>
                            <li class="scroll-to-section"><a href="/#testimonials" class="menu-item">Testimonials</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">About Us</a></li>
                                    <li><a href="" class="menu-item">Features</a></li>
                                    <li><a href="" class="menu-item">FAQ's</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/#contact-us" class="menu-item">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="/login" class="">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?= section('content') ?>

    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <?= section('footer') ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2022 Web RTC</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap -->
    <script src="<?= assets('assets/js/popper.js') ?>"></script>
    <script src="<?= assets('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Plugins -->
    <script src="<?= assets('assets/js/owl-carousel.js') ?>"></script>
    <script src="<?= assets('assets/js/scrollreveal.min.js') ?>"></script>
    <script src="<?= assets('assets/js/waypoints.min.js') ?>"></script>
    <script src="<?= assets('assets/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?= assets('assets/js/imgfix.min.js') ?>"></script>
    <!-- Global Init -->
    <script src="<?= assets('assets/js/custom.js') ?>"></script>
    <script src="<?= assets('/toastr/toastr.min.js') ?>"></script>
    <?= section('scripts') ?>

</body>
</html>