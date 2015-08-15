<?php

$params = array_merge(
    require(__DIR__ . '/../../vendor/hiqdev/hipanel/common/config/params.php'),
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/../../vendor/hiqdev/hipanel/backend/config/params.php'),
    require(__DIR__ . '/../../backend/config/params.php'),
    require(__DIR__ . '/../../backend/config/params-local.php')
);

return [
    'params'   => $params,
];
