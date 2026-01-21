<?php
/**
 * @var CView $this
 * @var array $data
 */

(new CHtmlPage())
    ->setTitle('Hello World')
    ->addItem(new CDiv($data['message']))
    ->show();
