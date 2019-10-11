<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Rule extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function list()
    {
        $res = db('auth_rule')->select();
        return $this->fetch();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $name = $request['name'];
        $title = $request['title'];
        $type = $request['type'];
        $status = $request['status'];
        $condition = $request['condition'];
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $res = db('auth_rule')->get($id);
        $this->assign('res',$res);
        return $this->fetch();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $title = $request['title'];
        $type = $request['type'];
        $status = $request['status'];
        $condition = $request['condition'];
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $res = db('auth_rule')->delete();
        if($res)
            return 'success';
        return 'faild';
    }
}
