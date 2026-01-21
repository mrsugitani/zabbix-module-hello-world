<?php
/** @var CView $this */

// Zabbix 6.0/7.0系の標準的なウィジェット構築方法
$widget = new CWidget();
$widget->setTitle(_('Hello World Module'));

// コンテンツを囲う箱（Div）を作成
$div = new CDiv();

// Zabbix標準の余白クラスを適用
$div->addClass(ZBX_STYLE_LAYOUT_WRAPPER);
$div->addStyle('padding: 30px;'); // 確実な余白設定

// メッセージを表示
$div->addItem(new CTag('h1', true, $data['message']));
$div->addItem(new CTag('p', true, 'This page is a custom module.'));

// ウィジェットにアイテムを追加して表示
$widget->addItem($div);
$widget->show();
