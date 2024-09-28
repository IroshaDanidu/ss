<!DOCTYPE html>
<html>

<!-- Mirrored from themewagon.github.io/Coffo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2024 10:21:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Coffo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.html" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&amp;display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="../../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
<div class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"href="index.html"><img src="images/WhatsApp Image 2024-09-28 at 3.47.38 PM.jpeg" style="width: 100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">Checkout</a>
                    </li>

                    <li class="nav-item">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="nav-link"
                                    >
                                       Hi,  {{ Auth::user()->name }}
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="nav-link"
                                    >
                                        Log in
                                    </a>

                                @endauth
                            </nav>
                        @endif                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Coffee <br>Shop</h1>
                                    <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                    <div class="btn_main">
                                        <div class="about_bt active"><a href="#">About Us</a></div>
                                        <div class="callnow_bt"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Coffee <br>Shop</h1>
                                    <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                    <div class="btn_main">
                                        <div class="about_bt active"><a href="#">About Us</a></div>
                                        <div class="callnow_bt"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Coffee <br>Shop</h1>
                                    <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                    <div class="btn_main">
                                        <div class="about_bt active"><a href="#">About Us</a></div>
                                        <div class="callnow_bt"><a href="#">Call Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- header section end -->
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="about_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_box">
                        <h1 class="about_taital">About Our shop</h1>
                        <h1 class="about_taital_1">Coffee distribution '</h1>
                        <p class=" about_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editorhas a more-or-less normal distribution of letters, as oppos</p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<!-- coffee section start -->
<div class="coffee_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="coffee_taital">OUR Coffee Products</h1>
            </div>
        </div>
    </div>
    <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($products as $pro)
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="{{ asset('images/' . $pro->image) }}"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">{{$pro->name}}</h3>
                                        <p class="looking_text">{{$pro->description}}</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($products as $pro)
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="{{ asset('uploads/product/' . $pro->image) }}"></div>
                                    <div class="coffee_box">
                                        <h3 class="types_text">{{$pro->name}}</h3>
                                        <p class="looking_text">{{$pro->description}}</p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>


<!-- coffee section end -->
<!-- client section start -->
<div class="client_section layout_padding">
    <div class="container">
        <div id="custom_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="about_taital">What syas customers</h1>
                        </div>
                    </div>
                    <div class="client_section_2">
                        <div class="client_taital_main">
                            <div class="client_left">
                                <div class="client_img"><img src="images/client-img1.png"></div>
                            </div>
                            <div class="client_right">
                                <h3 class="moark_text">Joy Moark</h3>
                                <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="about_taital">What syas customers</h1>
                        </div>
                    </div>
                    <div class="client_section_2">
                        <div class="client_taital_main">
                            <div class="client_left">
                                <div class="client_img"><img src="images/client-img1.png"></div>
                            </div>
                            <div class="client_right">
                                <h3 class="moark_text">Joy Moark</h3>
                                <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="about_taital">What syas customers</h1>
                        </div>
                    </div>
                    <div class="client_section_2">
                        <div class="client_taital_main">
                            <div class="client_left">
                                <div class="client_img"><img src="images/client-img1.png"></div>
                            </div>
                            <div class="client_right">
                                <h3 class="moark_text">Joy Moark</h3>
                                <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- client section end -->
<!-- blog section start -->

<!-- blog section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="contact_taital">Get In Touch</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-12">
                    <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">Send</a></div>
                    </div>
                </div>
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_social_icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="location_text">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="form-group">
                    <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                    <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design/">Free Html Templates</a>
                    Distribution by <a href="https://themewagon.com/">ThemeWagon</a></p>
            </div>
        </div>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from themewagon.github.io/Coffo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2024 10:21:45 GMT -->
</html>
