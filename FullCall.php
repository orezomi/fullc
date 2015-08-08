<?php

namespace orezomi\fullc;

use orezomi\fullc\FullcAsset;
use yii\helpers\Html;

/**
 * This is just an example.
 */
class FullCall extends \yii\base\Widget
{
    public function run()
    {
    	$view = $this->getView();
    	FullcAsset::register($view);
    	// $content = '$(document).ready(function(){$("#calendar").fullCalendar({})});';
    	// echo Html::script($content,['type'=>'text/javascript']);
     //    echo "<div id='calendar'></div>";
    }
}
