<?php

namespace CSmarty\Controllers;

use CSmarty\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $this->Smarty->View("welcome_message", [
            "Title" => "Smarty 4 for CodeIgniter 4 - ",
        ]);
    }
}
