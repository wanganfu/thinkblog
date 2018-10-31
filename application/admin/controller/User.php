<?php

namespace app\admin\controller;

use think\Controller;

class User extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return 'App\admin\controller\User';
    }

    public function test()
    {
        return 'test';
    }
}