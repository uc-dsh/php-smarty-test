<?php
require_once(__DIR__ . "/app/app.php");

$str1 = 'uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.';
$str2 = 'At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.';

$smarty->assign(
    [
        "str1" => $str1,
        "str2" => $str2
    ]
);

$smarty->display("./templates/question7.tpl");
