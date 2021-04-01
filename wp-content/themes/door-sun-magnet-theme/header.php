<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body>
<header>
    <!-- Header-Top Start-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="pull-left">
                        <?php
                        $header_options=doorSun_get_option('header_sec');
                        ?>
                        <li><a href="#"><?php echo $header_options[0]['top_text']; ?> </a></li>
                    </ul>
                </div>
                <div class="col-md-6">
					<?php
                    $args=array(
                            'theme_location'=>'top',
                            'depth'=>1
                    );
					wp_nav_menu($args)
					?>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Header-Top End-->

    <!-- Header-main Start -->
    <div class="header-main">
        <div class="container">
            <div class="row">
                <a href="#" class="logo"><img src="<?php echo $header_options[0]['logo']; ?> " width="127" alt="logo"></a>
                <nav>
	                <?php
	                $args=array(
		                'theme_location'=>'main',
		                'depth'=>2
	                );
	                wp_nav_menu($args)
	                ?>
                    <a href="#" class="open-cart"></a>
                    <div class="table-responsive cart">
                        <table class="table shadow-around">
                            <tbody>
                            <tr class="table-body">
                                <td>
                                    <figure>
                                        <img src="<?php echo DS_TDU ?>/images/cart-img-1.png" alt="">
                                    </figure>
                                </td>
                                <td>
                                    <h6>Macbook 2021</h6>
                                </td>
                                <td>
											<span class="cart-price">
												۲,۵۰۰,۰۰۰ تومان
											</span>
                                </td>
                                <td>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="table-body">
                                <td>
                                    <figure>
                                        <img src="<?php echo DS_TDU ?>/images/cart-img-2.png" alt="">
                                    </figure>
                                </td>
                                <td>
                                    <h6>Macbook 2021</h6>
                                </td>
                                <td>
											<span class="cart-price">
												۲,۵۰۰,۰۰۰ تومان
											</span>
                                </td>
                                <td>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr class="table-body">
                                <td>قیمت کل : <span class="pink">۲,۵۰۰,۰۰۰ تومان</span></td>
                                <td class="hidden-xs"></td>
                                <td class="hidden-xs"></td>
                                <td><a href="#" class="btn btn-cart">تسویه حساب</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Header-main End -->
    <!-- Header-Bottom Start -->
    <div class="container">
        <div class="header-bottom shadow-around">
            <div class="col-md-6">
                <ul class="social">
	                <?php
	                $social = doorSun_get_option("doorsun_social_group");
	                $social = $social[0];
	                if(isset($social['facebook'])){
		                echo "<li><a href='{$social['facebook']}'><i class=\"fa fa-facebook\"></i></a></li>";
	                }
	                if(isset($social['twitter'])){
		                echo "<li><a href='{$social['twitter']}'><i class=\"fa fa-twitter\"></i></a></li>";
	                }
	                if(isset($social['instagram'])){
		                echo "<li><a href='{$social['instagram']}'><i class=\"fa fa-instagram\"></i></a></li>";
	                }
	                if(isset($social['telegram'])){
		                echo "<li><a href='{$social['telegram']}'><i class=\"fa fa-send\"></i></a></li>";
	                }
	                ?>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="محصول مورد نظر را جستجو کنید">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <select class="selectpicker">
                    <option>تجهیزات کامپیوتری</option>
                    <option> گوشی هوشمند</option>
                    <option> لپتاپ و نوت بوک</option>
                    <option> لوازم جانبی</option>
                </select>
            </div>
        </div>
    </div>
</header>
<div class="clearfix"></div>
<!-- Header-Bottom End -->
