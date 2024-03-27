<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Apis Sahel</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Apis-Sahel" name="keywords" />
        <meta content="Action et Programme d'Impact au Sahel" name="description" />

        <!-- Favicon -->
        <link href="{{asset('img/apis.png')}}" rel="icon" />

        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- CSS Libraries -->
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"
        />
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link
            href="lib/owlcarousel/assets/owl.carousel.min.css"
            rel="stylesheet"
        />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
@yield('content')
    
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p>
                                <i class="fa fa-map-marker-alt"></i>123 Street,
                                New York, USA
                            </p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p>
                                <i class="fa fa-envelope"></i>info@example.com
                            </p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""
                                    ><i class="fab fa-twitter"></i
                                ></a>
                                <a class="btn btn-custom" href=""
                                    ><i class="fab fa-facebook-f"></i
                                ></a>
                                <a class="btn btn-custom" href=""
                                    ><i class="fab fa-youtube"></i
                                ></a>
                                <a class="btn btn-custom" href=""
                                    ><i class="fab fa-instagram"></i
                                ></a>
                                <a class="btn btn-custom" href=""
                                    ><i class="fab fa-linkedin-in"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Popular Causes</a>
                            <a href="">Upcoming Events</a>
                            <a href="">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input
                                    class="form-control"
                                    placeholder="Email goes here"
                                />
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            &copy; <a href="#">Your Site Name</a>, All Right
                            Reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Designed By
                            <a href="https://htmlcodex.com">HTML Codex</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>