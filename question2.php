<?php
require_once(__DIR__."/app/app.php");
$string = "<h2>This is an string</h2>";
$smarty->assign("string", $string);
$smarty->display("./templates/question2.tpl");