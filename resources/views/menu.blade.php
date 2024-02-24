<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Menu</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.datetimepicker.min.css')}}">
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
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Our Menu</i></h1>
                    <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">รายการ</span> <br>เมนูอาหารนิยม</h3>
                        <p class="pt-3">สินค้ายอดนิยม หรือ เมนู Signature ของทางร้านที่จะมานำเสนอ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ข้าวหน้าปลาแกะ</h5>
                                <span class="style-change">35 ฿</span>
                            </div>
                            <p class="pt-3">ส่วนผสมหลักคือ ปลาไร้ก้างเนื่องจากถูกแกะออกแล้ว และกลายเป็นชื่อเมนู</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/food2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ข้าวต้มมัด</h5>
                                <span class="style-change">8 ฿</span>
                            </div>
                            <p class="pt-3">ขนมโบราณ ยอดฮิต ส่วนผสมข้างเหนียว กล้วย และ ถั่วดำ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ไก่ทอด.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ไก่ทอดเสียบไม้</h5>
                                <span class="style-change">ราคา 10 ฿</span>
                            </div>
                            <p class="pt-3">ไก่ทอดเสียบไม้ยอดฮิต ที่กรอบอร่อยทุกเมื่อที่ทานทำให้คิดถึงช่วงเวลาที่ผ่านมา</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/photo.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ทอดมัน</h5>
                                <span class="style-change">ราคา 30 ฿</span>
                            </div>
                            <p class="pt-3">ทอดมันหอมๆ รสชาติเข้มข้นลองทุกครั้งอร่อยทุกครั้ง</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/หนมจีบ.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ขนมจีบ</h5>
                                <span class="style-change">ราคา 25฿</span>
                            </div>
                            <p class="pt-3">ขนมจีบหอมๆแสนอร่อย ที่พร้อมจะทำให้คุุณได้เพลินไปกับรสชาติ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/หมาล่า.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>หมาล่า</h5>
                                <span class="style-change">ราคา 5฿</span>
                            </div>
                            <p class="pt-3">หมาล่ารสชาติเข้มข่นหอมกลิ่นหมาล่า เนื้อนุ่มอร่อย</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ฟักทองนึ่ง.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ฟักทองนึ่ง</h5>
                                <span class="style-change">ราคา 50 ฿</span>
                            </div>
                            <p class="pt-3">ฟักทองนึ่งนุ่มๆอร่อยๆ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ปูอัด.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ปูอัดทอดเสียบไม้</h5>
                                <span class="style-change">ราคา 10฿</span>
                            </div>
                            <p class="pt-3">ปูอัดทอดเสียบไม้ธรรมดา</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ไส้กรอกรมควัน.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ไส้กรอกรมควัน</h5>
                                <span class="style-change">ราคา 10฿</span>
                            </div>
                            <p class="pt-3">ไส้กรอกรมควัน ธรรมดา</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ไส้กรอกนมชมพู (1).png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ไส้กรอกนมชมพู</h5>
                                <span class="style-change">ราคา 5฿</span>
                            </div>
                            <p class="pt-3">ไส้กรอกนมชมพู ธรรมดา</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ขนมเข่ง (1).png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ขนมเข่ง</h5>
                                <span class="style-change">ราคา 7฿</span>
                            </div>
                            <p class="pt-3">ขนมเทียน ธรรมดา</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="{{ asset('frontend/assets/images/ขนมเทียน (1).jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>ขนมเทียนใส้เค็ม</h5>
                                <span class="style-change">ราคา 8฿</span>
                            </div>
                            <p class="pt-3">ขนมเทียนใส้เค็ม</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- <center><a href="menu.html" class="genric-btn danger radius">see author menu</a></center> -->
    </section>
    <!-- Food Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget1">
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/logo2.png')}}" alt=""></a>
                            <p class="mt-3">ช่องทางการซื้อขายอยู่ในซอย ข้างโรงเรียน ในตอนนี้ยังไม่รับสั่งออนไลน์ อยู่ในซอยวัดบางโพ ตรงข้ามซอยโรงไม้ และอยู่ติดโรงเรียนวัดบางโพโอมาวาส</p>
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
                                    <p> 53 ซอยประชาราษฎร์ สาย1 ซอย19 เขตบางซื่อ อำเภอบางซื่อ กรุงเทพมหานคร 10800 </p>
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
                            <p>Monday ...................... Closed</p>
                            <p>Tue-Fri .............. 10 am - 12 pm</p>
                            <p>Sat-Sun ............... 8 am - 11 pm</p>
                            <p>Holidays ............. 10 am - 12 pm</p>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
