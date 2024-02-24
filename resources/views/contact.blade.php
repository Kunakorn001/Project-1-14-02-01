<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

   <!-- Header Area Starts -->
	<header class="header-area header-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/logo2.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu main-menu2">
                        <ul>
                            <li class="active"><a href="/">home</a></li>
                            <li><a href="about">about</a></li>
                            <li><a href="menu">menu</a></li>
                            <li><a href="contact">contact</a></li>
                            <!-- <li><a href="elements.html">Elements</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 contact-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Contact Us</i></h1>
                    <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Map Area Starts -->
    <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div id="mapBox" class="mapBox" 
                        data-lat="40.701083" 
                        data-lon="-74.1522848" 
                        data-zoom="13" 
                        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                        data-mlat="40.701083"
                        data-mlon="-74.1522848">
                        
                    </div> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.248835148873!2d100.51917756816094!3d13.809128144523482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b8ddd4eee55%3A0xe78cb99b8e2261d3!2zNTMg4Lib4Lij4Liw4LiK4Liy4Lij4Liy4Lip4LiO4Lij4LmMIOC4quC4suC4oiAxIOC4i-C4reC4oiAxOSDguYHguILguKfguIfguJrguLLguIfguIvguLfguYjguK0g4LmA4LiC4LiV4Lia4Liy4LiH4LiL4Li34LmI4LitIOC4geC4o-C4uOC4h-C5gOC4l-C4nuC4oeC4q-C4suC4meC4hOC4oyAxMDgwMA!5e0!3m2!1sth!2sth!4v1695010563805!5m2!1sth!2sth" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h5>53 ซอยประชาราษฎร์ สาย1 ซอย19 เขตบางซื่อ อำเภอบางซื่อ กรุงเทพมหานคร 10800</h5>
                            <p>หน้าโรงเรียนวัดบางโพโอมาวาส</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h5>(+66) 94 817 9358</h5>
                            <p>จันทร์ ถึง ศุกร์ ตี5 ถึง เที่ยงตรง</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h5>support@zsmodify.com</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="Thankyou.html">
                        <div class="left">
                            <input type="text" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->


    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget1">
                            <a href="index.html"><img src="assets/images/logo/logo2.png" alt=""></a>
                            <p class="mt-3">ช่องทางการซื้อขายอยู่ในซอย ข้างโรงเรียน ในตอนนี้ยังไม่รับสั่งออนไลน์ อยู่ในซอยวัดบางโพ ตรงข้ามซอยโรงไม้ และอยู่ติดโรงเรียนวัดบางโพโอมาวาส    </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">contact us</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p>53 ซอยประชาราษฎร์ สาย1 ซอย19 เขตบางซื่อ อำเภอบางซื่อ กรุงเทพมหานคร 10800 </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p>(+66) 94 817 9358</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p>support@zsmodify.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-widget single-widget3">
                            <h5 class="mb-4">opening hours</h5>
                            <p>Monday .............. 5 am - 12 pm</p>
                            <p>Tue-Fri .............. 5 am - 12 pm</p>
                            <p>Sat-Sun .............. 5 am - 11 pm</p>
                            <p>Holidays .............. 5 am - 12 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://colorlib.com" target="_blank">Zucidalz </a> <a><i class="fa fa-heart-o" aria-hidden="true"></i></a> <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li class="no-margin">Follow Us</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{ asset('frontend/assets/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I"></script>
    <script src="{{ asset('frontend/assets/js/vendor/gmaps.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
