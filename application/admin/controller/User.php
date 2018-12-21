<?php

namespace app\admin\controller;

use app\facade\Auth;
use app\common\controller\Base;

class User extends Base
{
    /**
     * @return string
     */
    public function index()
    {
        return 123;
    }

    public function test()
    {
        $res = Auth::getGroups(1);
        echo $res;
    }
}