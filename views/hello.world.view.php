<?php
/** @var CView $this */

// 1. Zabbix標準のウィジェット枠を作成
$widget = (new CWidget())
    ->setTitle(_('Hello World Module')) // ページタイトル
    ->setDocUrl(CDocHelper::getUrl(CDocHelper::MONITORING_DASHBOARD_VIEW)); // 右上のヘルプアイコン（任意）

// 2. 余白（パディング）のあるコンテンツエリアを作成
$content = (new CDiv())
    ->addClass(ZBX_STYLE_LAYOUT_WRAPPER) // Zabbix標準のレイアウト枠
    ->addItem(
        (new CDiv([
            (new CTag('h1', true, $data['message'])),
            (new CTag('p', true, 'This page is a custom module for US client monitoring.'))
        ]))
        ->addClass(ZBX_STYLE_OBJ_METABOX) // 白い背景と影のついたボックス
        ->addStyle('padding: 20px;')     // ここでしっかり余白を確保
    );

// 3. ウィジェットにコンテンツを追加して表示
$widget->addItem($content)->show();
