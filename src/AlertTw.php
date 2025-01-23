<?php

namespace sfili81\AlertW;

use Yii;
use yii\base\Widget;
use sfili81\AlertW\AlertTwAsset;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 */
class AlertTw extends Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - key: the name of the session flash variable
     * - value: the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public $alertTypes = [
        'error'   => 'alert-error',
        'danger'  => 'alert-error',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning'
    ];
    /**
     * @var array the options for rendering the close button tag.
     * Array will be passed to [[\yii\bootstrap\Alert::closeButton]].
     */
    public $closeButton = [];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        AlertTwAsset::register($this->view);
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $flash) {
            if (!isset($this->alertTypes[$type])) {
                continue;
            }
            //https://github.com/yiisoft/yii2/issues/3566
            $svgPath = dirname(__FILE__).'assets/icons.svg#'.$this->alertTypes[$type];

            foreach ((array) $flash as $i => $message) {
                echo $this->render( 'alert.php',[
                                    'type' => $this->alertTypes[$type],
                                    'message' => $message
                ]);
            }
            $session->removeFlash($type);
        }
    }
}
