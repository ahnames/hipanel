<?php

$params = array_merge(
    require(__DIR__ . '/../../vendor/hiqdev/hipanel/src/common/config/params.php'),
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/../../vendor/hiqdev/hipanel/src/frontend/config/params.php'),
    require(__DIR__ . '/../../frontend/config/params.php'),
    require(__DIR__ . '/../../frontend/config/params-local.php')
);

return [
    'params'   => $params,
];
