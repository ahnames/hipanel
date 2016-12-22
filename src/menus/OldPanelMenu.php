<?php

namespace ahnames\hipanel\menus;

use Yii;

class OldPanelMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return [
            [
                'label' => Yii::t('ahnames:hipanel', 'Return to old panel'),
                'icon' => 'fa-sign-out fa-fw fa-flip-horizontal',
                'url' => 'https://dev.ahnames.com/disable_hipanel?NOCACHE=1',
            ],
        ];
    }
}
