<?php

namespace orezomi\fullc;

use orezomi\fullc\FullcAsset;
use yii\helpers\Html;
use yii\web\View;

/**
 * This is just an example.
 */
class FullCall extends \yii\base\Widget
{
    public $jsonurl;

    public function run()
    {
    	$view = $this->getView();
    	FullcAsset::register($view);
    	$content = '$(document).ready(function(){$(\'#calendar\').fullCalendar({
			    events: \''.$this->jsonurl.'\'
    	})});';
    	$this->getView()->registerJs($content, View::POS_END);
    	echo "<div id='calendar'></div>";
    }
}
