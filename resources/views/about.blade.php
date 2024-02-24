<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>About</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo/favicon.png')}}" type="image/x-icon">

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
    <section class="banner-area banner-area2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>About Us</i></h1>
                    <p class="pt-2"><i>เนื้อหา และที่มาของร้านค้า</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="{{ asset('frontend/assets/images/welcome-bg.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">ยินดีต้อนรับ</span> <br>สู่ร้านค้า บังอรร้อยอย่าง</h3>
                        <p class="pt-3">ร้านค้าสร้างเมื่อ พ.ศ.2017 โดย นางอรอนงค์ และมีผู้ช่วยคือ นายวุฒิพงศ์</p>
                        <p>ร้านบังอรร้อยอย่าง ส่วนมากขายขนม ลูกชิ้นและข้าวกล่อง ซึ่งอาหารได้รับมาต่อเช่นขนมเทียน ข้าวต้มมัดและอื่นๆ ก่อนมาจัดตั้งร้าน ได้ประกอบอาชีพ ขายของ และได้นำขายเช่น เครื่องมือช่าง เสื้อผ้า จนได้ขายอาหาร และได้ทำเลขายที่ดีจนมาถึงปัจจุบัน</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->
    
    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding" style="background-color: rgb(247, 220, 132);">
        <div class="container" style="background-color: antiquewhite" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3 style="margin-top: 5%;" >รายการอาหาร <span>พิเศษ</span> ของร้าน</h3>
                        <p><i>อาหารขึ้นชื่อของร้าน สถานีกินเล่นบังอร</i></p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-5 col-md-6 align-self-center" >
                    <h1>01.</h1>
                    <div class="deshes-text">
                        <h3><span>ข้าว</span>ปลาแกะ</h3>
                        <p class="pt-3">ข้าวปลาแกะ เมนูที่สร้างชื่อเสียงของร้าน
                            ประกอบไปด้วย<br>ปลาที่แกะก้าง พร้อมพริกน้ำปลาสูตรประจำร้าน</p>
                        <span class="style-change">กล่องละ 30 บาท</span>
                        <a href="#" class="template-btn3 mt-3">เพิ่มเติม <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="{{ asset('frontend/assets/images/deshes1.png')}}" alt="" class="img-fluid" style="padding-right: 3%;">
                </div>
            </div>
            <div class="row mt-5" >
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="{{ asset('frontend/assets/images/deshes2.png')}}" alt="" class="img-fluid" style="padding-bottom: 3%;" style="padding-left: 3%;">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2" >
                    <h1>02.</h1>
                    <div class="deshes-text" >
                        <h3><span>ชีส</span>บอล</h3>
                        <p class="pt-3">ของกินเล่นประจำร้านที่ เป๊นเมนูชีสยืด ทานพร้อมซอสต่างๆ</p>
                        <span class="style-change">ลูก 5 บาท</span>
                        <a href="#" class="template-btn3 mt-3">เพิ่มเติม <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Testimonial Area Starts -->
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>สมาชิกในกลุ่ม <span>2</span></h3>
                        <p><i>รวมสมาชิกในกลุ่ม 2 รายละเอียดส่วนตัว และหน้าที่</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/elements/380959072_695243569166835_8166177448928237059_n.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>นายอติพร หวาดอิ่ม</h5>
                                <span><i>Coding</i></span>
                                <p class="pt-3">พิมพ์โค้ด และออกแบบหน้า User-interface ระบบ UX/UI</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/elements/381482834_306122185388566_2304992388407524207_n.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>นายคุณากร สาดสูงเนิน</h5>
                                <span><i>Header</i></span>
                                <p class="pt-3">รับผิดชอบการจัดแบ่งงาน และรับผิดชอบทุกส่วนงาน</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/elements/จริยา.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>นางสาวจริยา อนุเลิศ</h5>
                                <span><i></i>Presentation</span>
                                <p class="pt-3">รับผิดชอบด้านการนำเสนองาน</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="{{ asset('frontend/assets/images/elements/ชวลิตPicture1.jpg')}}" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>นายชวลิต ยวงมณี</h5>
                                <span><i>Document section</i></span>
                                <p class="pt-3">รับผิดชอบด้านเอกสารที่เกี่ยวกับโปรเจ็คทั้งหมด</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-widget single-widget1">
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/logo2.png')}}" alt=""></a>
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
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
