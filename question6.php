<?php
require_once(__DIR__ . "/app/app.php");
$smarty->assign(
    'Contacts',
    [
        array(
            'fax' => '555-222-9876',
            'email' => 'megha@ucertify.com',
            'phone' => array(
                'home' => '555-444-3333',
                'cell' => '555-111-1234'
            )
        ),
        array(
            'fax' => '555-222-8876',
            'email' => 'pete.gupta@ucertify.com',
            'phone' => array(
                'home' => '555-444-8888',
                'cell' => '555-111-9999'
            )
        )
    ]
);

$smarty->display("./templates/question6.tpl");
