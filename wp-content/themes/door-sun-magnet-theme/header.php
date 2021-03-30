<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="<?php echo DS_TDU ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo DS_TDU ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo DS_TDU ?>/css/bootstrap-select.css">
    <link rel="stylesheet" href="<?php echo DS_TDU ?>/style.css">
    <link rel="stylesheet" href="<?php echo DS_TDU ?>/css/responsive.css">
	<?php wp_head();  ?>
</head>
<body>
<header>
    <!-- Header-Top Start-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="pull-left">
                        <li><a href="#"> شماره تماس : ۴۴۸۳۹۶۱۹-۰۱۳</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="#">حساب کاربری</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">فرصا ت های شغلی</a></li>
                        <li><a href="#">ارتباط با ما</a></li>
                    </ul>
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
                <a href="#" class="logo"><img src="<?php echo DS_TDU ?>/images/logo1.png" width="127" alt="logo"></a>
                <nav>
                    <ul>
                        <li><a href="#">صفحه اصلی</a></li>
                        <li><a href="#">محصولات</a>
                            <ul class="shadow-around">
                                <li><a href="#">لپ تاپ و کتابخوان</a></li>
                                <li><a href="#">لوازم اداری</a></li>
                                <li><a href="#">دوربین دیجیتالی</a></li>
                                <li><a href="#">کامپیوتر و تجهیزات اداری</a></li>
                                <li><a href="#">صوتی و تصویری</a></li>
                            </ul>
                        </li>
                        <li><a href="#">فروش ویژه</a></li>
                        <li><a href="#">محصولات ویژه</a></li>
                    </ul>
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
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-send"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
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
