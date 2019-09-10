<?php

namespace App\Controllers;

use Core\Request;

class AdminAjaxController
{
    public function getAccessories(Request $request){

        echo json_encode('hello');
    }

}