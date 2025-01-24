<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowny Hotel</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>

<body>


<header>
    <div class="content flex_space">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="navlinks">
            <ul id="menulist">
                <li><a href="#home">home</a> </li>
                <li><a href="#about">about</a> </li>
                <li><a href="#rooms">rooms</a> </li>
                <li><a href="#pages">pages</a> </li>
                <li><a href="#news">news</a> </li>
                <li><a href="#contact">contact</a> </li>
                <li> <i class="fa fa-search"></i> </li>
                <li> <button class="primary-btn">BOOK NOW</button> </li>
            </ul>
            <span class="fa fa-bars" onclick="menutoggle()"></span>
        </div>
    </div>
</header>


<script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
        if (menulist.style.maxHeight == "0px") {
            menulist.style.maxHeight = "100vh";
        } else {
            menulist.style.maxHeight = "0px";
        }
    }
</script>


<section class="home">
    <div class="content">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="images/banner-1.png" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                    </p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/banner-2.png" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                    </p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/banner-3.png" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                    </p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>




<section class="book">
    <div class="container flex_space">
        <div class="text">
            <h1> <span>Book </span> Your Rooms </h1>
        </div>
        <div class="form">
            <form class="grid">
                <input type="date" placeholder="Araival Date">
                <input type="date" placeholder="Departure Date">
                <input type="number" placeholder="Adults">
                <input type="number" placeholder="Childern">
                <input type="submit" value="CHECK AVAILABILITY">
            </form>
        </div>
    </div>
</section>



<section class="about top">
    <div class="container flex">
        <div class="left">
            <div class="heading">
                <h1>WELCOME</h1>
                <h2>Crowny Hotel</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button class="primary-btn">ABOUT US</button>
        </div>
        <div class="right">
            <img src="images/about.png" alt="">
        </div>
    </div>
</section>

<section class="counter top">
    <div class="container grid">
        <div class="box">
            <h1>2500</h1>
            <hr>
            <span>Customer</span>
        </div>
        <div class="box">
            <h1>1250</h1>
            <hr>
            <span>Happy Customer</span>
        </div>
        <div class="box">
            <h1>150</h1>
            <hr>
            <span>Expert Technicians</span>
        </div>
        <div class="box">
            <h1>3550</h1>
            <hr>
            <span>Desktop Reaired</span>
        </div>
    </div>
</section>


<section class="rooms">
    <div class="container top">
        <div class="heading">
            <h1>EXPOLRE</h1>
            <h2>Our Rooms</h2>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            </p>
        </div>

        <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="image">
                        <img src="images/room-1.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-2.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-3.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-4.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-5.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-6.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-7.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/room-8.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Suporior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                        <div class="button flex">
                            <button class="primary-btn">BOOK NOW</button>
                            <h3>$250 <span> <br> Per Night </span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        dots: false,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 10,
            },
            1000: {
                items: 3
            }
        }
    })
</script>



<section class="gallery">
    <div class="container top">
        <div class="heading">
            <h1>PHOTOS</h1>
            <h2>Our Gallery</h2>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </div>
    </div>

    <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="img">
                    <img src="images/gallery-1.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-2.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-3.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-4.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-5.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-6.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-4.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-3.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-1.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
            <div class="items">
                <div class="img">
                    <img src="images/gallery-6.png" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"> </span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 4,
            },
            1000: {
                items: 6
            }
        }
    })
</script>


<section class="services top">
    <div class="container">
        <div class="heading">
            <h1>SERVICES</h1>
            <h2>Our Services</h2>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </div>


        <div class="content flex_space">
            <div class="left grid2">
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-champagne-glasses"></i>
                        <h3>Delious Food</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-person-biking"></i>
                        <h3>Fintness</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-utensils"></i>
                        <h3>Inhouse Restaurant</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-spa"></i>
                        <h3>Beauty Spa</h3>
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="images/service.png" alt="">
            </div>
        </div>
    </div>
</section>




<section class="Customer top">
    <div class="container">
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3>Julia Robertson</h3>
                <label>Julia Robertson</label>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3>Julia Robertson</h3>
                <label>Julia Robertson</label>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3>Julia Robertson</h3>
                <label>Julia Robertson</label>
            </div>
        </div>
    </div>
</section>
<script>
    $('.owl-carousel2').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1,
            },
            1000: {
                items: 1
            }
        }
    })
</script>



<section class="news top rooms">
    <div class="container">
        <div class="heading">
            <h1>NEWS</h1>
            <h2>Our News</h2>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </div>


        <div class="content flex">
            <div class="left grid2">
                <div class="items">
                    <div class="image">
                        <img src="images/blog-1.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Finibus bonorum malorm.</h2>
                        <div class="admin flex">
                            <i class="fa fa-user"></i>
                            <label>Admin</label>
                            <i class="fa fa-heart"></i>
                            <label>500</label>
                            <i class="fa fa-comments"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="items">
                    <div class="image">
                        <img src="images/blog-2.png" alt="">
                    </div>
                    <div class="text">
                        <h2>Finibus bonorum malorm.</h2>
                        <div class="admin flex">
                            <i class="fa fa-user"></i>
                            <label>Admin</label>
                            <i class="fa fa-heart"></i>
                            <label>500</label>
                            <i class="fa fa-comments"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="right">
                <div class="box flex">
                    <div class="img">
                        <img src="images/blog-s1.png" alt="">
                    </div>
                    <div class="stext">
                        <h2>Etiam Vel Nequ</h2>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                    </div>
                </div>
                <div class="box flex">
                    <div class="img">
                        <img src="images/blog-s2.png" alt="">
                    </div>
                    <div class="stext">
                        <h2>Etiam Vel Nequ</h2>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                    </div>
                </div>
                <div class="box flex">
                    <div class="img">
                        <img src="images/blog-s3.png" alt="">
                    </div>
                    <div class="stext">
                        <h2>Etiam Vel Nequ</h2>
                        <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="newsletter mtop">
    <div class="container flex_space">
        <h1>Subscribe to Our Newsletter</h1>
        <input type="text" placeholder="Your Email">
        <input type="text" value="Subscribe">
    </div>
</section>


<footer>
    <div class="container grid">
        <div class="box">
            <img src="images/logo-2.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="icon">
                <i class="fa fa-facebook-f"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-youtube"></i>
            </div>
        </div>

        <div class="box">
            <h2>Links</h2>
            <ul>
                <li>Company History</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Services</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

        <div class="box">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
            </p>
            <i class="fa fa-location-dot"></i>
            <label>1201 park street, Avenue, Dhanmondy, Dhaka. </label> <br>
            <i class="fa fa-phone"></i>
            <label>[88] 657 524 332</label> <br>
            <i class="fa fa-envelope"></i>
            <label>info@dentar.com</label> <br>
        </div>
    </div>
</footer>

<div class="legal">
    <p class="container">Copyright (c) 2022 Copyright Holder All Rights Reserved.</p>
</div>



<script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    h1, h2 {
        font-family: sans-serif;
        font-weight: 400;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    .flex {
        display: flex;
    }

    .flex_space {
        display: flex;
        justify-content: space-between;
    }

    button {
        border: none;
        background: none;
        outline: none;
        transition: 0.5s;
        cursor: pointer;
    }

    .primary-btn {
        padding: 15px 40px;
        background: #7fc142;
        font-weight: bold;
        color: white;
    }

    .secondary-btn {
        padding: 15px 40px;
        background: none;
        border: 2px solid white;
        font-weight: bold;
        color: white;
    }

    .container {
        max-width: 85%;
        margin: auto;
    }

    /*--------header---------*/
    header {
        height: 10vh;
        line-height: 10vh;
        padding: 0 20px;
    }

    header img {
        margin: 20px 0;
    }

    header ul {
        display: inline-block;
    }

    header ul li {
        display: inline-block;
        text-transform: uppercase;
    }

    header ul li a {
        color: #000;
        margin: 0 10px;
        transition: 0.5s;
    }

    header ul li a:hover {
        color: #7fc142;
    }

    header i {
        margin: 0 20px;
    }

    header button {
        padding: 13px 40px;
    }

    header .navlinks span {
        display: none;
    }

    @media only screen and (max-width:768px) {
        header ul {
            position: absolute;
            top: 100px;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #009f7f;
            overflow: hidden;
            transition: max-height 0.5s;
            text-align: center;
            z-index: 9;
        }

        header ul li {
            display: block;
        }

        header ul li a {
            color: white;
        }

        header i {
            color: white;
        }

        header .navlinks span {
            color: black;
            display: block;
            cursor: pointer;
            line-height: 10vh;
            font-size: 25px;
        }
    }

    /*--------header---------*/
    /*--------home---------*/
    .home {
        height: 100vh;
        color: #fff;
    }

    .home img {
        width: 100%;
        height: 100vh;
    }

    .home .text {
        position: absolute;
        top: 35%;
        left: 5%;
    }

    .home .text h1 {
        font-size: 80px;
        font-family: serif;
        font-weight: 400;
    }

    .home p {
        margin: 20px 0;
    }

    .home button {
        margin-right: 20px;
    }

    .owl-nav .owl-prev,
    .owl-nav .owl-next {
        position: absolute;
        top: 40%;
        height: 50px;
        width: 50px;
        background: rgba(0, 0, 0, 0.5) !important;
        color: #fff;
    }

    .owl-nav .owl-prev {
        left: 0;
    }

    .owl-nav .owl-next {
        right: 0;
    }

    /*--------home---------*/
    /*--------book---------*/
    .grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 20px;
    }

    input {
        outline: none;
        border: none;
        width: 100%;
    }

    .book {
        padding: 40px 0;
        background: #282834;
        color: #fff;
    }

    h1 {
        font-family: serif;
    }

    .book h1 {
        font-size: 28px;
    }

    .book h1 span {
        color: #7fc142;
    }

    .book input {
        padding: 20px;
    }

    .book input:nth-last-child(1) {
        background: #7fc142;
        color: #fff;
    }

    /*--------book---------*/
    /*--------about---------*/
    .left, .right {
        width: 50%;
        padding: 30px;
    }

    .top {
        margin-top: 80px;
    }

    .mtop {
        margin-top: 40px;
    }

    .heading h1 {
        font-size: 100px;
        font-weight: 500;
        opacity: 0.1;
        font-family: serif;
        position: absolute;
        top: -30px;
    }

    .heading h2 {
        margin: 30px 0;
        font-size: 45px;
        font-family: serif;
        font-weight: 400;
    }

    .about .heading h1 {
        top: 55px;
    }

    .about {
        position: relative;
    }

    .about .left {
        margin-top: 30px;
    }

    .about p {
        font-size: 15px;
    }

    .about button {
        margin: 30px 0;
    }

    /*--------about---------*/
    /*--------counter---------*/
    .counter {
        background-image: url("../images/background-1.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 30vh;
        width: 100%;
        color: #fff;
    }

    .counter .grid {
        grid-template-columns: repeat(4, 1fr);
        text-align: center;
        place-items: center;
        padding-top: 60px;
    }

    .counter h1 {
        font-size: 50px;
    }

    .counter hr {
        width: 50%;
        margin: 10px auto;
        background: #7fc142;
        height: 2px;
        border: none;
    }

    /*--------counter---------*/
    /*--------rooms---------*/
    .rooms {
        position: relative;
    }

    .rooms .text {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-top: none;
        padding: 30px;
    }

    .rooms i {
        font-size: 12px;
        color: #fbb234;
        margin: 15px 0;
        margin-right: 5px;
    }

    .rooms p {
        margin: 20px 0;
        opacity: 0.7;
    }

    .rooms h3 {
        font-size: 30px;
        line-height: 20px;
        margin-left: 20px;
        font-weight: 500;
        color: #7fc142;
    }

    .rooms h3 span {
        font-size: 15px;
        font-weight: 400;
        color: #000;
    }

    .owl-carousel1 .owl-nav .owl-prev,
    .owl-carousel1 .owl-nav .owl-next {
        position: absolute;
        top: -20%;
        height: 50px;
        width: 50px;
        background: #7fc142 !important;
    }

    .owl-carousel1 .owl-nav .owl-prev i,
    .owl-carousel1 .owl-nav .owl-next i {
        color: #fff;
    }

    .owl-carousel1 .owl-nav .owl-prev {
        left: 90%;
    }

    .owl-carousel1 .owl-nav .owl-next {
        right: 0;
    }

    /*--------rooms---------*/
    /*--------gallery---------*/
    .gallery {
        position: relative;
    }

    .gallery img {
        width: 100%;
        height: 100%;
    }

    .gallery .img {
        position: relative;
    }

    .gallery .img::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(126, 193, 65, 0.86);
        width: 255px;
        height: 251px;
        z-index: 2;
        opacity: 0;
        transition: 0.5s;
    }

    .overlay {
        position: absolute;
        top: 35%;
        left: 25%;
        z-index: 3;
        text-align: center;
        color: white;
        opacity: 0;
        transition: 0.5s;
    }

    .gallery span {
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        text-align: center;
        border: 2px solid white;
    }

    .overlay h3 {
        margin-top: 20px;
        font-weight: 500;
    }

    .gallery .items:hover .overlay,
    .gallery .items:hover .img::after {
        opacity: 1;
        cursor: pointer;
    }

    .gallery .owl-nav .owl-prev {
        left: 85%;
    }

    .gallery .owl-nav .owl-next {
        right: 5%;
    }

    .gallery .owl-nav .owl-next,
    .gallery .owl-nav .owl-prev {
        top: -40%;
    }

    /*--------gallery---------*/
    /*--------services---------*/
    .services {
        position: relative;
    }

    .grid2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 30px;
    }

    .services .left {
        padding: 30px 0;
    }

    .services .box {
        border: 1px solid rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: 0.5s;
        padding: 20px;
    }

    .services .box .text {
        padding: 30px 0;
        border: 1px dashed #fff;
    }

    .services i {
        font-size: 50px;
        color: #7fc142;
        transition: 0.5s;
    }

    .services h3 {
        font-size: 20px;
        font-weight: 400;
        margin-top: 20p;
        transition: 0.5s;
    }

    .services img {
        width: 100%;
        height: 100%;
    }

    .services .box:hover {
        background: #7fc142;
        color: #fff;
        cursor: pointer;
    }

    .services .box:hover i,
    .services .box:hover h3 {
        color: #fff;
    }

    /*--------services---------*/
    /*--------Customer---------*/
    .Customer {
        background-image: url("../images/background-2.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 70vh;
        width: 100%;
        color: #fff;
        text-align: center;
    }

    .Customer .container {
        max-width: 70%;
    }

    .Customer .item {
        padding: 10% 0;
    }

    .Customer i {
        width: 100px;
        height: 100px;
        background: rgba(126, 193, 64, 0.57);
        line-height: 100px;
        border-radius: 50%;
        font-size: 50px;
        margin-bottom: 50px;
    }

    .Customer p {
        line-height: 30px;
    }

    .Customer h3 {
        margin-top: 20px;
        color: #7fc142;
    }

    .Customer span {
        font-size: 15px;
    }

    .owl-carousel2 .owl-dots {
        position: absolute;
        bottom: 70px;
        left: 46.6%;
    }

    .owl-carousel2 .owl-dots i {
        color: #7fc142;
    }

    .owl-carousel2 .owl-dots i:hover button {
        color: #7fc142 !important;
    }

    .owl-carousel2 span {
        border: 2px solid #fff;
        background: transparent !important;
    }

    .owl-carousel2 .active span {
        background: #7fc142 !important;
        border: 2px solid #7fc142;
    }

    /*--------Customer---------*/
    /*--------news---------*/
    .news {
        position: relative;
    }

    .news i {
        color: #7fc142;
        text-transform: capitalize;
        font-size: 18px;
    }

    .news label {
        margin-top: 12px;
        margin-right: 20px;
    }

    .news .left {
        padding: 30px 0;
        width: 65%;
    }

    .news .right {
        width: 35%;
    }

    .news img {
        width: 100%;
    }

    .news .items p {
        padding-top: 20px;
        border-top: 1px solid rgba(0, 0, 0, 0.2);
    }

    .news .box {
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        padding: 40px 0;
    }

    .news .box:nth-child(1) {
        padding-top: 0;
    }

    .news .box:nth-last-child(1) {
        border-bottom: none;
    }

    .news .box img {
        width: 110px;
        height: 114px;
    }

    .news .stext {
        padding: 0 0 0 20px;
    }

    /*--------news---------*/
    /*--------newsletter---------*/
    .newsletter {
        position: relative;
    }

    .newsletter .container {
        background: #7fc142;
        padding: 40px 30px;
        position: absolute;
        top: -70px;
        left: 8%;
        width: 100%;
    }

    .newsletter h1 {
        width: 100%;
        font-size: 30px;
        color: #fff;
        margin-top: 10px;
    }

    .newsletter input {
        padding: 20px;
    }

    .newsletter input:nth-last-child(2) {
        width: 80%;
        background: rgba(255, 255, 255, 0.4);
    }

    .newsletter input:nth-last-child(1) {
        margin-left: 20px;
        width: 30%;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
    }

    /*--------newsletter---------*/
    /*--------footer---------*/
    footer {
        background: #282834;
        color: #b6b7b9;
        padding: 10% 0 5% 0;
    }

    footer .grid {
        grid-template-columns: 6fr 3fr 3fr;
    }

    footer p {
        color: #b6b7b9;
        font-size: 15px;
        line-height: 25px;
    }

    footer .icon i {
        margin: 20px 20px 20px 0;
        color: #b6b7b9;
    }

    footer h2 {
        color: #fff;
        margin-bottom: 10px;
    }

    footer li {
        margin-bottom: 20px;
    }

    footer i {
        color: #7fc142;
        margin: 20px 0;
        margin-right: 20px;
    }

    footer label {
        margin: 20px 0;
    }

    .legal {
        padding: 15px 0;
        background: #282834;
        color: #b6b7b9;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    /*--------footer---------*/
    @media only screen and (max-width:768px) {
        .home {
            color: #fff;
            height: 50vh;
        }

        .home img {
            width: 100%;
            height: 50vh;
        }

        .left, .right {
            width: 100%;
        }

        .book h1 {
            margin-bottom: 20px;
        }

        .container.flex,
        .book .flex_space {
            flex-direction: column;
        }

        .book .grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .counter .grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .owl-carousel .owl-nav .owl-prev {
            left: 80%;
        }

        .gallery .owl-nav .owl-prev {
            left: 75%;
        }

        .rooms .owl-nav .owl-prev,
        .rooms .owl-nav .owl-next {
            top: -30%;
        }

        .gallery .owl-nav .owl-prev,
        .gallery .owl-nav .owl-next {
            top: -80%;
        }

        .services .flex_space {
            flex-direction: column;
        }

        .Customer {
            height: 60vh;
        }

        .Customer .container {
            max-width: 80%;
        }

        .owl-carousel2 .owl-dots {
            bottom: 0;
            left: 44.5%;
        }

        .news .content.flex {
            flex-direction: column;
        }

        .news .left {
            padding: 30px 0;
            width: 100%;
        }

        .news .right {
            width: 100%;
        }

        .newsletter {
            position: relative;
            background: #7fc142;
        }

        .newsletter .container {
            top: 0;
            left: 0;
            width: 100%;
            padding: 40px 30px;
            position: relative;
        }

        .newsletter .flex_space {
            flex-direction: column;
        }

        .newsletter input:nth-last-child(2) {
            margin: 20px 0;
            width: 100%;
        }

        .newsletter input:nth-last-child(1) {
            margin: 0;
        }

        footer .grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>