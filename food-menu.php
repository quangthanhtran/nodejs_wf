<?php
	include("lib_db.php");
	//get input -> ko co, vi la trang chu
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] 	: 0;
	$q = isset($_REQUEST["q"]) ? trim($_REQUEST["q"]) : "";
	if ($id <  1) return ;
	//tao sql
	//$sql = "select * from grab_content where id={$id}";
	$sql = "select * from chi-tiet where id=" . $id ;
	//echo $sql;exit();
	//thuc thi cau lenh sql
	$result = select_one($sql);
	//print_r($result);exit();
	if (!$result) return ;
	
	$sql = "select * from chi-tiet
	where cid={$result['cid']} limit 10";
	
	//echo $sql;exit();
	
	$resultOther = select_list($sql);
	//print_r($resultOther);exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/wowfood.css">
    <link rel="stylesheet" href="css/foodmenu.css">
    <title>Food Menu</title>
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
                    <div class="travel-content-main">
                        <a href="./food-menu.php?id=<?php echo $result["id"] ?>"><img id= "img-details"src="<?php echo $result["img"] ?>" alt="Card image" ></a>
			            <h1><?php echo $result["title"]?></h1>
			            <div class="travel-content-body">
				            <?php echo $result["body"]?>
			            </div>
			            <h2>Food Menu</h2>
			            <div class="travel-content-other">				
				            <ul>
				            <?php foreach ($resultOther as $item) {?>
					            <li><a href="./food-menu.php?id=<?php echo $item["id"]?>"><?php echo $item["title"]?></a></li>
				            <?php } ?>
				            </ul>
			            </div>
		            </div>
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
                <div class="col l-6 m-6 c-12 hide">
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
</body>
</html>