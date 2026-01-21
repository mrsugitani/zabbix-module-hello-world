<?php
/** @var CView $this */

$widget = (new CWidget())
    ->setTitle(_('Hello World Module')) 
    ->setDocUrl(CDocHelper::getUrl(CDocHelper::MONITORING_DASHBOARD_VIEW)); 


$content = (new CDiv())
    ->addClass(ZBX_STYLE_LAYOUT_WRAPPER)
    ->addItem(
        (new CDiv([
            (new CTag('h1', true, $data['message'])),
            (new CTag('p', true, 'This page is a custom module for US client monitoring.'))
        ]))
        ->addClass(ZBX_STYLE_OBJ_METABOX)
        ->addStyle('padding: 20px;')
    );


$widget->addItem($content)->show();
