<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/web/stylesheet/bootstrap.min.css',
        '/web/revolution/css/layers.css',
        '/web/revolution/css/settings.css',
        '/web/stylesheet/fancybox.css',
        '/web/stylesheet/style.css',
        '/web/stylesheet/colors/color1.css',
        '/web/stylesheet/responsive.css',
        '/web/stylesheet/animate.css',
        '/web/stylesheet/et-line.css',
    ];
    public $js = [
        'web/javascript/jquery.min.js',
        'web/javascript/tether.min.js',
        'web/javascript/bootstrap.min.js',
        'web/javascript/owl.carousel.js',
        'web/javascript/jquery.easing.js',
         'web/javascript/parallax.js',
      'web/javascript/jquery.flexslider-min.js',
      'web/javascript/waypoints.min.js',
      'web/javascript/kinetic.js',
      'web/javascript/jquery-countTo.js',
      'web/javascript/jquery.fancybox.js',
      'web/javascript/jquery.cookie.js',
      'web/javascript/jquery-validate.js',
      'web/javascript/main.js',


      '/web/revolution/js/jquery.themepunch.tools.min.js',
      '/web/revolution/js/jquery.themepunch.revolution.min.js',
      '/web/revolution/js/slider_v3.js',


    '/web/revolution/js/extensions/revolution.extension.actions.min.js',
    '/web/revolution/js/extensions/revolution.extension.carousel.min.js',
    '/web/revolution/js/extensions/revolution.extension.kenburn.min.js',
    '/web/revolution/js/extensions/revolution.extension.layeranimation.min.js',
    '/web/revolution/js/extensions/revolution.extension.migration.min.js',
    '/web/revolution/js/extensions/revolution.extension.navigation.min.js',
    '/web/revolution/js/extensions/revolution.extension.parallax.min.js',
    '/web/revolution/js/extensions/revolution.extension.slideanims.min.js',
    '/web/revolution/js/extensions/revolution.extension.video.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
