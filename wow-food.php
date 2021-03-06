<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/wowfood.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WowFood</title>
</head>
<body>
    <!-- section header start -->
    <section class="header">
        <div class="header__navbar wide" >
            <div class="header__navbar-logo">
                <img src="img/wowfood-img/logo.png" alt="" class="header__navbar-logo-img">
            </div>
            <label for="header__navbar-mobile-input" class="header__navbar-btn-mobile">
                <i class="fas fa-bars"></i>
            </label>
            <input type="checkbox" name="" class="header__navbar-input" id="header__navbar-mobile-input">
            <label for="header__navbar-mobile-input" class="header__navbar-overlay"></label>
            <div class="header__navbar-menu-mobile text-right">
                <label for="header__navbar-mobile-input" class="header__navbar-close">
                    <i class="fas fa-times"></i>
                </label>
                <ul class="header__navbar-menu-mobile-list">
                    <li class="header__navbar-menu-mobile-list-iteam">
                        <a href="wowfood.html" class="header__navbar-menu-mobile-list-iteam-link">Home</a>
                    </li>
                    <li class="header__navbar-menu-mobile-list-iteam">
                        <a href="categories.html" class="header__navbar-menu-mobile-list-iteam-link">Categories</a>
                    </li>
                    <li class="header__navbar-menu-mobile-list-iteam">
                        <a href="foodmenu.html" class="header__navbar-menu-mobile-list-iteam-link">Foods</a>
                    </li>
                    <li class="header__navbar-menu-mobile-list-iteam">
                        <a href="" class="header__navbar-menu-mobile-list-iteam-link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="header__navbar-menu text-right">
                <ul class="header__navbar-menu-list">
                    <li class="header__navbar-menu-list-iteam">
                        <a href="wowfood.html" class="header__navbar-menu-list-iteam-link">Home</a>
                    </li>
                    <li class="header__navbar-menu-list-iteam">
                        <a href="categories.html" class="header__navbar-menu-list-iteam-link">Categories</a>
                    </li>
                    <li class="header__navbar-menu-list-iteam">
                        <a href="foodmenu.html" class="header__navbar-menu-list-iteam-link">Foods</a>
                    </li>
                    <li class="header__navbar-menu-list-iteam">
                        <a href="" class="header__navbar-menu-list-iteam-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- section header end -->

    <!-- section search start -->
    <section class="search">
        <div class="search__background">
            <div class="search__iteam">
                <input type="text" class="search__iteam-text" placeholder="Search for Food..">
                <button class="search__iteam-btn">Search</button>
            </div>
        </div>
    </section>
    <!-- section search end -->

    <!-- section container start -->
    <section class="container">
        <div class="grid wide">
            <div class="explorefood">
                <h2 class="explorefood__text">Explore Foods</h2>
            </div>
            <div class="row">             
                <div class="col l-4 m-4 c-12">
                    <a href="categories.html" class="container__link">
                        <div class="container__box">
                            <img src="/img/wowfood-img/pizza.jpg" alt="" class="container__box-img">
                            <h3 class="container__box-text">Pizaa</h3>
                        </div>
                    </a>                   
                </div>
                <div class="col l-4 m-4 c-12">
                    <a href="categories.html" class="container__link">
                        <div class="container__box">
                            <img src="/img/wowfood-img/burger.jpg" alt="" class="container__box-img">
                            <h3 class="container__box-text">Burger</h3>
                        </div>
                    </a>
                </div>
                <div class="col l-4 m-4 c-12">
                    <a href="categories.html" class="container__link">
                        <div class="container__box">
                            <img src="/img/wowfood-img/momo.jpg" alt="" class="container__box-img">
                            <h3 class="container__box-text">Momo</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
     <!-- section container end -->

    <!-- section foodmenu start -->
    <section class="foodmenu">
        <div class="grid wide">
            <div class="header__foodmenu">
                <h2 class="header__foodmenu-text">
                    Food Menu
                </h2>
            </div>
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <div class="content__foodmenu">
                        <div class="content__foodmenu-img">
                            <img src="img/wowfood-img/menu-pizza.jpg" alt="" class="content__foodmenu-img-setting">
                        </div>    
                        <div class="content__foodmenu-desc">
                            <p class="content__foodmenu-title">Food Title</p>
                            <p class="content__foodmenu-price">$2.3</p>
                            <p class="content__foodmenu-text">Made with Italian Sauce, Chicken, and organice vegetables</p>
                            <a href="order.html" class="content__foodmenu-link">Order Now</a>
                        </div>    
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="content__foodmenu">
                        <div class="content__foodmenu-img">
                            <img src="/img/wowfood-img/menu-burger.jpg" alt="" class="content__foodmenu-img-setting">
                        </div>    
                        <div class="content__foodmenu-desc">
                            <p class="content__foodmenu-title">Smoky Burger</p>
                            <p class="content__foodmenu-price">$2.3</p>
                            <p class="content__foodmenu-text">Made with Italian Sauce, Chicken, and organice vegetables</p>
                            <a href="order.html" class="content__foodmenu-link">Order Now</a>
                        </div>    
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="content__foodmenu">
                        <div class="content__foodmenu-img">
                            <img src="/img/wowfood-img/menu-burger.jpg" alt="" class="content__foodmenu-img-setting">
                        </div>    
                        <div class="content__foodmenu-desc">
                            <p class="content__foodmenu-title">Smoky Burger</p>
                            <p class="content__foodmenu-price">$2.3</p>
                            <p class="content__foodmenu-text">Made with Italian Sauce, Chicken, and organice vegetables</p>
                            <a href="order.html" class="content__foodmenu-link">Order Now</a>
                        </div>    
                    </div>
                </div>
                <div class="col l-6 m-6 c-12">
                    <div class="content__foodmenu">
                        <div class="content__foodmenu-img">
                            <img src="/img/wowfood-img/menu-pizza.jpg" alt="" class="content__foodmenu-img-setting">
                        </div>    
                        <div class="content__foodmenu-desc">
                            <p class="content__foodmenu-title">Food Title</p>
                            <p class="content__foodmenu-price">$2.3</p>
                            <p class="content__foodmenu-text">Made with Italian Sauce, Chicken, and organice vegetables</p>
                            <a href="order.html" class="content__foodmenu-link">Order Now</a>
                        </div>    
                    </div>
                </div>
                <div class="col l-6 m-6 c-12 hide">
                    <div class="content__foodmenu">
                        <div class="content__foodmenu-img">
                            <img src="/img/wowfood-img/menu-pizza.jpg" alt="" class="content__foodmenu-img-setting">
                        </div>    
                        <div class="content__foodmenu-desc">
                            <p class="content__foodmenu-title">Food Title</p>
                            <p class="content__foodmenu-price">$2.3</p>
                            <p class="content__foodmenu-text">Made with Italian Sauce, Chicken, and organice vegetables</p>
                            <a href="order.html" class="content__foodmenu-link">Order Now</a>
                        </div>    
                    </div>
                </div>
                <div class="col l-6 m-6 c-12 hide">
                    <div class="content__foodmenu">
                        <div class="content__foodmenu-img">
                            <img src="/img/wowfood-img/menu-momo.jpg" alt="" class="content__foodmenu-img-setting">
                        </div>    
                        <div class="content__foodmenu-desc">
                            <p class="content__foodmenu-title">Chicken Steam Momo</p>
                            <p class="content__foodmenu-price">$2.3</p>
                            <p class="content__foodmenu-text">Made with Italian Sauce, Chicken, and organice vegetables</p>
                            <a href="order.html" class="content__foodmenu-link">Order Now</a>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="footer__foodmenu">
                <a href="foodmenu.html" class="footer__foodmenu-link">See All Foods</a>
            </div>
        </div>
    </section>
    <!-- section foodmenu end -->

    <!-- section footer start -->
    <section class="footer">
        <div class="footer__icon">
            <i class="fab fa-facebook footer__icon-setting"></i>
            <i class="fab fa-instagram footer__icon-setting"></i>
            <i class="fab fa-twitter footer__icon-setting"></i>
        </div>
        <div class="footer__text">
            <p class="footer__text-setting">All rights reserved. Designed By <a href="" class="footer__text-link">Quang Thanh Tran</a></p>
        </div>
    </section>
    <!-- section footer end -->
    <script src="js/main.js"></script>
</body>
</html>