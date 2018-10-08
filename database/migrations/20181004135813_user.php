<?php

use think\migration\Migrator;
use think\migration\db\Column;

class User extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('user',array('engine'=>'InnoDB'));
        $table->addColumn('username','string',array('limit'=>30,'default'=>'','comment'=>'用户名'))
            ->addColumn('password','string',['limit'=>32,'default'=>'','comment'=>'密码'])
            ->addColumn('nickname','string',['limit'=>30,'default'=>'','comment'=>'昵称','null'=>true])
            ->addColumn('phone','string',['limit'=>11,'default'=>'','comment'=>'手机','null'=>true])
            ->addColumn('email','string',['limit'=>50,'default'=>'','comment'=>'邮箱','null'=>true])
            ->addColumn('ip','string',['limit'=>15,'default'=>'','comment'=>'上次登录IP','null'=>true])
            ->addColumn('qq','string',['limit'=>10,'default'=>'','comment'=>'QQ','null'=>true])
            ->addColumn('status','integer',['limit'=>1,'default'=>1,'comment'=>'账号状态 1:正常 2:待审核 3:小黑屋'])
            ->addColumn('level','integer',['limit'=>10,'default'=>0,'comment'=>'经验等级'])
            ->addIndex(['username'],['unique'=>true])
            ->create();
    }
}
