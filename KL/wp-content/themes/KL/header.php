<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php wp_head() ?>

</head>

<body>

    <!-- header -->
    <div class="container">

        <div class="menu-top">
            <li><a href="">Get 30% Off On Selected Items</a></li>
            <div>
            <?php wp_nav_menu( 
    array(
        'menu'=>'menu-top',
        'container'=>'',
        'theme_location'=>'menu-top',
       
    )
 ) ?>
            </div>
        </div>
    </div>

    <div class="header-top">

        <div class="container">
            <div class="header-logo">
                <?php  if(function_exists('the_custom_logo')){
                    $custom_logo_id=get_theme_mod('custom_logo');
                    $logo=wp_get_attachment_image_src( $custom_logo_id);
                } ?>
                <img src="<?php echo $logo[0] ?>" alt="">

                <div class="menu">
                    <label for="toggle"><i class="fas fa-bars"></i></label>
                    <input type="checkbox" id="toggle">
                    <div class="navbar">

                        <div class="header-nav-list">
                            <div class="header-nav">
                                <h4>Menu</h4>
                                <label for="toggle"><i class="fas fa-times"></i></label>
                            </div>
                            <ul>
                                <li class="li-key"><a href="">Home</a></li>
                                <li class="li-key"><a href="">Shop</a></li>
                                <li class="li-key-sub">
                                    <a href="" class="hover-sub"> <span>Sản Phẩm</span>  <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu-item">
                                        <li class="li2-key"><a href="">Xiaomi</a></li>
                                        <li class="li2-key"><a href="">Samsung</a></li>
                                        <li class="li2-key"><a href="">Apple</a></li>
                                        <li class="li2-key"><a href="">Oppo</a></li>
                                    </ul>

                                </li>
                                <li class="li-key"><a href="">Page</a></li>
                                <li class="li-key"><a href="">About Us</a></li>
                                <li class="li-key"><a href="">Contact Us</a></li>
                                <li class="li-key"><a href="">All Category</a></li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <div class="header-search">
                <form action="">
                    <input type="text" placeholder="Search">
                    <button class="header-button" type="submit">Search</button>
                </form>
            </div>
            <div class="account-cart">
                <div class="cart">
                    <a href=""><i class="fab fa-opencart"></i> </a>
                    <span class="count-number">20</span>
                </div>

            </div>
        </div>
    </div>

    <!-- end header -->




    <div class="box-menu-main">
    <div class="container">
        <div class="menu-main " id="navbar">
        <?php wp_nav_menu( 
    array(
        'menu'=>'menu-main',
        'container'=>'',
        'theme_location'=>'menu-main',
        'items_wrap'=>'<ul class="container-menu">%3$s</ul>'
    )
 ) ?>
            <!-- <ul class="container-menu">
                <li><a href="">Trang chủ</a></li>
                <li class="menu-main-item">
                    <a href="" class="item-shop"><span> Cửa hàng</span> <i class="fas fa-chevron-down"></i></a>
                    <ul class="menu-item">
                        <li><a href="">Phone</a></li>
                        <li><a href="">Laptop</a></li>
                        <li><a href="">Watch</a></li>
                        <li><a href="">Radio</a></li>
                        <li><a href="">Induction</a></li>
                        <li><a href="">Category</a></li>
                    </ul>
                </li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Giới thiệu</a></li>
            </ul> -->
            <div class="support">
                <span><i class="fas fa-headphones"></i></span>
                <a href="">09127489124</a>
                <a href="">Hỗ trợ</a>
            </div>
        </div>
</div>
</div>
