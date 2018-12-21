<?php

namespace app\common\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{
    public function __construct(Request $request)
    {
        $module = $request->module();
        $controller = $request->controller();
        $action = $request->action();
        echo $module.'.'.$controller.'.'.$action;
    }
}
