<?php

namespace ahnames\hipanel\menus;

use hiqdev\menumanager\Menu;
use Yii;

class OldPanelMenu extends Menu
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
