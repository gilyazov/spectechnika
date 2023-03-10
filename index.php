<<<<<<< HEAD
<?php
define('BX_PULL_SKIP_INIT', true);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'bitrix:landing.pub',
    '',
    array(
        'HTTP_HOST' => $_SERVER['HTTP_HOST']
    ),
    null,
    array(
        'HIDE_ICONS' => 'Y'
    )
);

=======
<?php
define('BX_PULL_SKIP_INIT', true);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'bitrix:landing.pub',
    '',
    array(
        'HTTP_HOST' => $_SERVER['HTTP_HOST']
    ),
    null,
    array(
        'HIDE_ICONS' => 'Y'
    )
);

>>>>>>> origin/main
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');