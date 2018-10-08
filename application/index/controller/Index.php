<?php

namespace app\index\controller;

use Firebase\JWT\JWT;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
        $user = User::all();
        dump($user);
    }

    public function user()
    {
        $user = User::get(1);
        dump($user);
    }

    public function phpinfo()
    {
        $key = 'annon'; //唯一私钥
        $time = time();
        $token = [
            'iss' => 'annon', //签发人
            'aud' => 'admin', //面向的用户
            'iat' => $time, //签发时间
            'nbf' => $time+50, //生效时间
            'exp' => $time+7200, //过期时间
            'id' => 1 //用户ID
        ];

        $jwt = JWT::encode($token, $key);

        echo $jwt;
    }

    public function testurl()
    {
        return $this->fetch();
    }

    public function test()
    {
        return 'pre pre';
    }
}
