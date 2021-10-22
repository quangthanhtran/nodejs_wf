<?php
	include("lib_db.php");
	//1. get input, id của bài viết
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$p = isset($_REQUEST["p"]) ? $_REQUEST["p"] * 1 : 0;
	if ($p < 1) $p = 1;
	//2.1. Thông tin chi tiết của chuyên mục
	$sql = "select * from theloai where id = {$id}";
	//2.2. Thực thi sql
	$result = select_one($sql);

	//$result = select_one($sql);
	//print_r($result);exit();
	
	//2.1. Thông tin chi tiết của chuyên mục
	$nop = 20;
	$offset = $nop * ($p -1);
	$cond = "where cid = {$id}";
	$sql = "select * from chi_tiet {$cond}  limit {$nop} offset {$offset} ";
	//echo $sql;exit();
	//2.2. Thực thi sql
	$datas = select_list($sql);
	//print_r($datas);exit();
	$sqlcount = "select count(*) as c from chi_tiet {$cond}";
	//2.2. Thực thi sql
	$count = select_one($sqlcount);
	$total = $count['c'];
	//print_r($count);exit();
	//$nop = 10;
	$num = ceil($total / $nop);
	$datas_img= Array();
	$datas_list= Array();
	$ind=0;
	foreach($datas as $data){
		if ($ind < 12 ){
			$datas_img[]=$data;
		}else{
			$datas_list[]=$data;
		}
		$ind=$ind+1;
	}
?>
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

    <section class="container">
        <div class="grid wide">
            <div class="explorefood">
                <h2 class="explorefood__text">Explore Foods</h2>
            </div>
            <div class="row">             
                <div class="col l-4 m-4 c-12">
                    <a href="food-menu-chuyen-muc?id=1" class="container__link">
                        <div class="container__box container__box-setting">
                            <img src="/img/wowfood-img/pizza.jpg" alt="" class="container__box-img">
                            <h3 class="container__box-categories-text">Pizaa</h3>
                        </div>
                    </a>                   
                </div>
                <div class="col l-4 m-4 c-12">
                    <a href="food-menu-chuyen-muc?id=2" class="container__link">
                        <div class="container__box container__box-setting">
                            <img src="/img/wowfood-img/burger.jpg" alt="" class="container__box-img">
                            <h3 class="container__box-categories-text">Burger</h3>
                        </div>
                    </a>
                </div>
                <div class="col l-4 m-4 c-12">
                    <a href="food-menu-chuyen-muc?id=3" class="container__link">
                        <div class="container__box container__box-setting">
                            <img src="/img/wowfood-img/momo.jpg" alt="" class="container__box-img">
                            <h3 class="container__box-categories-text">Momo</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <h4>Chuyên mục: <?php echo $result["name"] ?></h4><br/>
            <div class="content__items-card" id="content__items-card-style">
                <div class="row">
                    <?php foreach ($datas_img as $data) { ?>
                        <div class="col-md-2 col-sm-3 col-xs-6 idea-border">
                            <div class="card card-style" >
                                <a href="./Shopee-chi-tiet.php?id=<?php echo $data["id"] ?>"><img class="card-img-top" src="<?php echo $data["img"] ?>" alt="Card image" ></a>
                                
                                <div class="card-body">
                                    <a href="./Shopee-chi-tiet.php?id=<?php echo $data["id"] ?>" ><p class="card-title"><?php echo $data["title"] ?></p></a>
                                    <br />
                                    
                                    <p class="price-style">đ   <?php echo $data["price"] ?></p>
                                </div>
                                <div class="idea-border-hover"><p class="">Tìm sản phẩm tương tự</p></div>
                            </div>
                            <br>
                        </div>
                    <?php } ?>
                </div>
                </ul>
                
                <p>Các bài viết khác:</p>
                <ul>
                <?php foreach ($datas_list as $data) { ?>
                    <li>
                        <a href="./Shopee-chi-tiet.php?id=<?php echo $data["id"] ?>"><?php echo $data["title"] ?></a>
                    </li>
                <?php } ?>
                </ul>
                <p>PAGES</p>
                <ul>
                <?php for ($i=1;$i<=$num;$i++) { ?>
                    <li>
                        <a href="./Shopee-chuyen-muc.php?id=<?php echo $id ?>&p=<?php echo $i ?>"><?php echo $i ?></a>
                    </li>
                <?php } ?>
                </ul>				
            </div>
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