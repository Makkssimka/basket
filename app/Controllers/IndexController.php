<?php

namespace App\Controllers;

use App\Helpers\ConfigWrite;
use App\Models\Accessory;
use App\Models\Comments;
use App\Models\Door;
use Config;
use Core\Request;
use Core\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class IndexController
{



    public function index(Request $request){

        $data = [];
        $data['title'] = "Проверка статуса заказа";
        $data['description'] = "Проверить статус заказа и оплатить его можно на этой странице";

        View::view('site/index', $data);

    }

}