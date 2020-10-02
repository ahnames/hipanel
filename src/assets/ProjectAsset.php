<?php
/**
 * AHnames implementation of HiPanel
 *
 * @link      https://ahnames.com/
 * @package   hipanel
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AHnames (https://ahnames.com/)
 */


namespace ahnames\hipanel\assets;

class ProjectAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/ProjectAssetFiles';

    public $css = [
        'css/project.css',
    ];
}
