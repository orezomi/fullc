<?php

namespace orezomi\fullc;

use yii\web\AssetBundle;

class FullcAsset extends AssetBundle
{
	public $sourcePath = '@bower'; 
    public $css = [ 
        'fullcalendar/dist/fullcalendar.min.css'
    ];
    public $js = [
    	'moment/min/moment.min.js','fullcalendar/dist/fullcalendar.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
