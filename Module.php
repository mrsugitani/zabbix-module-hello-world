<?php
namespace Modules\HelloWorld;

use Zabbix\Core\CModule;
use APP;
use CMenuItem;

class Module extends CModule {
    public function init(): void {
        APP::Component()->get('menu.main')
            ->add((new CMenuItem(_('Hello World')))
                ->setAction('hello.world')
            );
    }
}
