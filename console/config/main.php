<?php

$params = array_merge(
    require(__DIR__ . '/../../vendor/hiqdev/hipanel/common/config/params.php'),
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/../../vendor/hiqdev/hipanel/console/config/params.php'),
    require(__DIR__ . '/../../console/config/params.php'),
    require(__DIR__ . '/../../console/config/params-local.php')
);

return [
    'supportEmail' => 'support@ahnames.com',
    'adminEmail'   => 'support@ahnames.com',
    'params'       => $params,
];
