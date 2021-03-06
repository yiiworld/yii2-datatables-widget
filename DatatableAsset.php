<?php

/**
 * @copyright Copyright (c) 2014 Ján Hamrák <snickom@gmail.com>, 2015 John Pistonsky <pistonsky@icloud.com>
 * @link https://github.com/pistonsky/yii2-datatables-widget
 * @package yii2-datatables-widget
 * @version 1.0.0
 */

namespace pistonsky\datatables;

use yii\web\AssetBundle;

class DatatableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/pistonsky/yii2-datatables-widget/assets';
    public $css = [
        'css/jquery.dataTables.min.css',
    ];
    public $js = [
        'https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js',
    ];
    public $publishOptions = [
        'forceCopy' => true,
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
