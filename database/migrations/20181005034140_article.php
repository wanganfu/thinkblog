<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Article extends Migrator
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
        $table = $this->table('article',array('engine'=>'InnoDB'));
        $table->addColumn('title','string',array('limit'=>120,'default'=>'','comment'=>'用户名'))
            ->addColumn('content','text',['limit'=>0,'default'=>'','comment'=>'内容'])
            ->addColumn('author','integer',['limit'=>11,'default'=>0,'comment'=>'作者','null'=>true])
            ->addColumn('info','string',['limit'=>255,'default'=>'','comment'=>'概述','null'=>true])
            ->addColumn('cate','integer',['limit'=>3,'default'=>0,'comment'=>'分类 0:未分类','null'=>true])
            ->addColumn('tags','string',['limit'=>15,'default'=>'','comment'=>'标签','null'=>true])
            ->addColumn('cate_index','integer',['limit'=>2,'default'=>0,'comment'=>'分类置顶 0:默认排序'])
            ->addColumn('home_index','integer',['limit'=>2,'default'=>0,'comment'=>'首页置顶 0:默认排序'])
            ->addColumn('create_at','datetime',['limit'=>0,'comment'=>'发布时间'])
            ->addColumn('update_at','datetime',['limit'=>0,'comment'=>'修改时间'])
            ->addColumn('delete_at','datetime',['limit'=>0,'comment'=>'删除时间'])
            ->addIndex(['author','cate'],['unique'=>true])
            ->create();
    }
}
