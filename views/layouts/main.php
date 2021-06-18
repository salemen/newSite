<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\db\ActiveRecord;
use app\models\Product;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php $this->registerCsrfMetaTags() ?>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>FNC - Finance & Consulting, Accounting HTML Template</title>

	<meta name="author" content="themsflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <?php $this->head() ?>
</head>
	<body>
<?php $this->beginBody() ?>


        <div class="boxed">
		<!-- Preloader -->
	    <div id="loading-overlay">
            <div class="loader"></div>
        </div>

        <div class="top style2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-page">
                            Welcome to Finance Consultant Theme
                        </div>
                        <ul class="flat-social">
                            <li>
                                <a href="#" title=""><i class="fa fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" title=""><i class="fa fa-rss"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div><!-- /.clearfix -->
                    </div>
                </div>
            </div>
        </div><!-- /.top -->

		<div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div id="logo" class="logo">
                            <a href="#" title="">
                                <img src="/web/images/logo.png" alt="logo Finance Business" />
                            </a>
                        </div><!-- /#logo -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>+61 3 8376 6284</h4>
                                <p>themesflat@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>4946 Marmora Road,</h4>
                                <p>Central New, UK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="iconbox style2 v2">
                            <div class="iconbox-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="iconbox-content">
                                <h4>Mon - Sat: 8 am - 5 pm</h4>
                                <p>Sunday: CLOSED</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.top -->

        <header id="header" class="header style1 v1 bg-color">
            <div class="container">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-12">
                            <div class="flat-header-wrap">
                                <div class="flat-show-search">
                                    <div class="show-search">
                                        <i class="fa fa-search"></i>                                             
                                    </div>
                                    <div class="top-search">                        
                                        <form action="#" id="searchform-all" method="get">
                                            <div>
                                                <input type="text" id="s" class="sss" placeholder="Search...">
                                                <input type="submit" value="" id="searchsubmit">
                                            </div>
                                        </form>
                                    </div> <!-- /.top-search -->
                                </div>  <!-- /.flat-show-search -->                      
                                <div class="nav-wrap">
                                    <div class="btn-menu">
                                        <span></span>
                                    </div><!-- //mobile menu button -->
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li class="active">
                                                <a href="/" title="">Home</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/" title="">Страница 1</a></li>
                                                    <li><a href="<?= Url::to (['/site/index1']) ?>" title="">Страница 2</a></li>
                                                    <li><a href="<?= Url::to (['/site/index2']) ?>" title="">Страница 3</a></li>
                                                    <li><a href="<?= Url::to (['/site/index3']) ?>" title="">Страница 4</a></li>
                                                    <li><a href="<?= Url::to (['/site/index4']) ?>" title="">Страница 5</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="<?= Url::to (['/about/about']) ?>" title="">About Us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to (['/about/about']) ?>" title="">Про нас</a></li>
                                                    <li><a href="<?= Url::to (['/about/about2']) ?>" title="">Про нас 2</a></li>
                                                    <li><a href="<?= Url::to (['/about/about3']) ?>" title="">Про нас 3</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="<?= Url::to (['/servis/servis']) ?>" title="">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to (['/servis/servis']) ?>" title="">Сервис</a></li>
                                                    <li><a href="<?= Url::to (['/servis/servis2']) ?>" title="">Сервис 2</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="<?= Url::to (['/case/case']) ?>" title="">CASES</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to (['/case/case']) ?>" title="">Кейс</a></li>
                                                    <li><a href="<?= Url::to (['/case/case2']) ?>" title="">Кейс 2</a></li>
                                                    <li><a href="<?= Url::to (['/case/case3']) ?>" title="">Кейс 3</a></li>
                                                    <li><a href="<?= Url::to (['/case/case4']) ?>" title="">Кейс 4</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="<?= Url::to (['/blog/blog']) ?>" title="">News</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to (['/blog/blog']) ?>" title="">Блг</a></li>
                                                    <li><a href="<?= Url::to (['/blog/blog2']) ?>" title="">Блог 2</a></li>
                                                    <li><a href="<?= Url::to (['/blog/blog3']) ?>" title="">Блог 3</a></li>
                                                    <li><a href="<?= Url::to (['/blog/blog4']) ?>" title="">Блог 4</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="#" title="">PAGES</a>
                                                <ul class="sub-menu">
                                                    <li><a href="404.html" title="">Error Page</a></li>
                                                    <li><a href="pricing.html" title="">Pricing</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="<?= Url::to (['/contacti/contacti']) ?>" title="">Contact US</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to (['/contacti/contacti']) ?>" title="">Contact 01</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                        </ul><!-- /.menu -->
                                    </nav><!-- /#mainnav -->
                                </div><!-- /.nav-wrap -->
                            </div>
                        </div><!-- /.col-md-9 -->
                    </div><!-- /.header-wrap -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </header><!-- /header -->
		

           <?= $content ?>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-about">
                            <div id="logo-ft">
                                <a href="#" title="">
                                    <img src="/web/images/logo-ft.png" alt="">
                                </a>
                            </div>
                            <p>The industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            </p>
                            <ul class="social">
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>   
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-services">
                            <h3 class="title">Quicklink</h3>
                            <ul class="one-half first">
                                <li><a href="#" title="">Home</a></li>
                                <li><a href="#" title="">About us</a></li>
                                <li><a href="#" title="">Services</a></li>
                                <li><a href="#" title="">Cases</a></li>
                            </ul><!-- /.one-half -->
                            <ul class="one-half">
                                <li><a href="#" title="">Contact us</a></li>
                                <li><a href="#" title="">Clients</a></li>
                                <li><a href="#" title="">Testimonial</a></li>
                                <li><a href="#" title="">News</a></li>
                            </ul><!-- /.one-half -->
                            <div class="clearfix"></div>
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-lastest">
                            <h3 class="title">Latest Twitter</h3>
                            <ul>
                                <li>
                                    <a href="#" title=""><i class="fa fa-twitter"></i>@Themesflat</a> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </li>
                                <li>
                                    <a href="#" title=""><i class="fa fa-twitter"></i>@Samon.D</a> Lorem Ipsum is simply dummy text of the printing and typesetting.Lorem Ipsum is simply dummy.
                                </li>
                            </ul>
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-subscribe">
                            <h3 class="title">Subscribe</h3>
                            <form id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                <div id="subscribe-content">
                                    <div class="input-email">
                                        <input type="email" name="email-form" id="subscribe-email" placeholder="Your email address..." />
                                    </div>
                                    <button type="button" id="subscribe-button" class="button-subscribe">SUBMIT NOW</button>
                                </div>
                                <div id="subscribe-msg"></div>
                            </form>
                        </div><!-- /.widget-subscribe -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                </div><!-- /.row .widget-box -->
            </div><!-- /.container -->          
        </footer><!-- /#footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© Copyright <a href="#" title="">Themesflat 2018</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.footer-bottom -->
        
        <div class="button-go-top">
            <a href="#" title="" class="go-top">
                 <i class="fa fa-chevron-up"></i>
            </a>
        </div>

        </div> <!-- /.boxed -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
