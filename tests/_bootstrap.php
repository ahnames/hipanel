<?php
/**
 * AHnames implementation of HiPanel
 *
 * @link      https://ahnames.com/
 * @package   hipanel
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AHnames (https://ahnames.com/)
 */


error_reporting(E_ALL & ~E_NOTICE);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Yii::setAlias('@ahnames/hipanel', dirname(__DIR__) . '/src');
