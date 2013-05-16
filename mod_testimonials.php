<?php

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$suffix = $params->get('s_suffix','_sfx');
$style = $params->get('s_style','1');



//$jsfile1 = JURI::base() . 'modules/mod_testimonials/assets/js/Tabs.js';
$jsfile2 = JURI::base() . 'modules/mod_testimonials/assets/js/jquery.cycle.lite.js';
$cssfile = JURI::base() . 'modules/mod_testimonials/assets/css/jquery.cycle.css';

$doc = JFactory::getDocument();
$doc->addScriptDeclaration('jQuery.noConflict();');
$doc->addScript($jsfile2);
$doc->addStyleSheet($cssfile);

$mod_class = 'mod_testimonials'.$suffix;

$scripts = "\n";
$scripts .="jQuery(document).ready(function(){ jQuery('.".$mod_class."').cycle('fade');});";
$scripts .="\n";

$doc->addScriptDeclaration($scripts, 'text/javascript');

$mod_title = $params->get('s_title','');

$list = modTestimonialsHelper::getList($params);

switch($style){
  case 2:
    require JModuleHelper::getLayoutPath('mod_testimonials', 'multiple');
    break;
  default:
    require JModuleHelper::getLayoutPath('mod_testimonials', 'default');
    break;
}






?>