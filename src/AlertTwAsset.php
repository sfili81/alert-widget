<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2013 - 2021
 * @package yii2-widgets
 * @subpackage yii2-widget-growl
 * @version 1.1.2
 */

namespace sfili81\AlertW;

use yii\web\AssetBundle;

/**
 * Asset bundle for [[Growl]] widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class AlertTwAsset extends AssetBundle
{
    public $sourcePath = __DIR__;
    
    public $css = [
        'assets/style.css',
    ];
    public $js = [
        'assets/alerttw.js',
    ];
     public $publishOptions = [
        'forceCopy' => true,
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}
