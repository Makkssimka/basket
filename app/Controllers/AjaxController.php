<?php

namespace App\Controllers;

use Core\Request;

class AjaxController
{
    public function sendMail(Request $request){

        echo json_encode('hello');
    }
}