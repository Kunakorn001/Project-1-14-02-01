<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>SnackStation By Bangon</title>

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
	<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/messageImage_1692608842824232323456.jpg')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="/">home</a></li>
                            <li><a href="about">about</a></li>
                            <li><a href="menu">menu</a></li>
                            <li><a href="contact">contact</a></li>
                            <li><a href="{{route('login') }}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6>That easy but it's a good way</h6> -->
                    <h1>  <span class="prime-color"> </span><br>  
                    <span class="style-change">  <span class="prime-color"> </span> </span></h1>
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

                @foreach ($product as $p)
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="{{ asset('backend/upload/resize/'.$p->image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>{{$p->name}}</h5>
                                <span class="style-change">{{$p->price}}</span>
                            </div>
                            <p class="pt-3">{{$p->description}}</p>
                        </div>
                    </div>
                </div>

                @endforeach

                <!-- <div class="col-md-4 col-sm-6">
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
                </div> -->

            </div>
        </div>
        <br>
        <center><a href="menu.html" class="genric-btn danger radius">see author menu</a></center>
    </section>
    <!-- Food Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>อาหารสดใหม่ ถูกหลักอนามัย</h2>
                    <h4 class="mt-4">การซื้อขาย จัดใส่กล่องอย่างเรียบร้อย</h4>
                    <!-- <h4 class="mt-4">"อร่อยถูกใจ อนามัยถูกลืม"</h4> -->
                    <!-- <a href="" class="template-btn template-btn2 mt-4">สั่งซื้อ</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->
    
    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="section-top-border">
                <h3 class="title_color">Image Gallery</h3>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="{{ asset('frontend/assets/images/resize/food1 (2).jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/resize/food1\ \(2\).jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontend/assets/images/resize/food2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/resize/food2.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontend/assets/images/resize/ไก่ทอด.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/resize/ไก่ทอด.jpg);"></div></a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ asset('frontend/assets/images/resize/photo.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/resize/photo.jpg);"></div></a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ asset('frontend/assets/images/resize/หนมจีบ.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/resize/หนมจีบ.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontend/assets/images/elements/g6.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/elements/g6.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontend/assets/images/elements/g7.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/elements/g7.jpg);"></div></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontend/assets/images/elements/g8.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url(frontend/assets/images/elements/g8.jpg);"></div></a>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://www.facebook.com/profile.php?id=100089243480334" target="_blank">Zucidalz </a> <a><i class="fa fa-heart-o" aria-hidden="true"></i></a> <a href="https://www.facebook.com/kunakorn.sadsoongnern/" target="_blank">CODENAMEALONE</a>
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
