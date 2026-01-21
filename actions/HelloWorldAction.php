<?php
namespace HelloWorld\Actions;

use CController;
use CControllerResponseData;

class HelloWorldAction extends CController {
    protected function init(): void {
        // 今回はセキュリティチェック(CSRF)を無効にしてシンプルにします
        $this->disableCsrfValidation();
    }
    protected function checkInput(): bool { return true; }
    protected function checkPermissions(): bool { return true; }

    protected function doAction(): void {
        // 表示したいデータを配列で渡します
        $data = ['message' => 'Hello, Zabbix World!'];
        $response = new CControllerResponseData($data);
        $response->setTitle('Hello World Page');
        $this->setResponse($response);
    }
}
