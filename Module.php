<?php
namespace HelloWorld;

use Zabbix\Core\CModule;
use APP;
use CMenuItem;

class Module extends CModule {
    public function init(): void {
        // 「監視データ(Monitoring)」メニューの中に項目を追加
        APP::Component()->get('menu.main')
            ->find('Monitoring')
            ->getSubMenu()
            ->add((new CMenuItem('Hello World'))
                ->setAction('hello.world.view')
            );
    }
}
