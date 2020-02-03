<?php
namespace ffsoft\multiselect;

use yii\web\AssetBundle;

/**
 * MultipleSelectAsset
 *
 * @author anyhon <anyhon@outlook.com>
 */
class MultiSelectAsset extends AssetBundle
{
    public $sourcePath = '@bower/multiple-select';

    public $css = [
        'multiple-select.css',
    ];
    public $js = [
        'multiple-select.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
