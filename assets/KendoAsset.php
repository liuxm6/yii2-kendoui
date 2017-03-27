<?php
namespace tigrov\kendoui\assets;

class KendoAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/kendo-ui';
    public $js = [
        'js/kendo.all.min.js',
    ];
    public $css = [
        'css/kendo.common-bootstrap.min.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
