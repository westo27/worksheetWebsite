<?php

require_once('./smarty/Smarty.class.php');

//new smarty object
$smarty = new Smarty();

//initialise smarty object
$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

$smarty->assign('name','Fred Flintstone');
$smarty->display('index.tpl');
    
?>
