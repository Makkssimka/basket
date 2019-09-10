<?php

namespace App\Controllers;

use App\Helpers\ConfigWrite;
use Config;
use App\Models\Users;
use Core\Request;
use Core\View;

class AdminController
{

    public function login(Request $request){

        if($request->isPost()){
            $user = Users::first();
            $login = $request->input('login');
            $password = $request->input('password');

            if($user->login == $login && $user->password == md5($password)){
                $request->setSession('isKey', true);
                $request->redirect('/admin/index');
            }
            else{
                $data['error'] = true;
            }
        }

        View::view('admin/login');
    }

    public function index(Request $request){
        if(!$request->getSession('isKey')) $request->redirect('/admin');


        View::view('admin/index');
    }

}