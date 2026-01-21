<?php
namespace Modules\HelloWorld\Actions;

use CController;
use CControllerResponseData;

class HelloWorldAction extends CController {
    protected function init(): void {
        $this->disableCsrfValidation();
    }

    protected function checkInput(): bool {
        return true;
    }

    protected function checkPermissions(): bool {
        return true;
    }

    protected function doAction(): void {
        $data = ['message' => 'Hello World!'];
        $response = new CControllerResponseData($data);
        $response->setTitle('Test Page');
        $this->setResponse($response);
    }
}
