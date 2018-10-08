<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Comment extends Migrator
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
        $table = $this->table('comment',array('engine'=>'InnoDB'));
        $table->addColumn('name','string',array('limit'=>30,'default'=>'','comment'=>'评论用户'))
            ->addColumn('content','text',['limit'=>0,'default'=>'','comment'=>'评论内容'])
            ->addColumn('email','string',['limit'=>60,'default'=>'','comment'=>'评论者邮箱','null'=>true])
            ->addColumn('phone','string',['limit'=>11,'default'=>'','comment'=>'评论者手机','null'=>true])
            ->addColumn('pic','string',['limit'=>60,'default'=>'','comment'=>'评论者头像','null'=>true])
            ->addColumn('article_id','integer',['limit'=>5,'comment'=>'评论的文章ID'])
            ->addColumn('comment_id','integer',['limit'=>6,'default'=>0,'comment'=>'评论的上层评论ID','null'=>true])
            ->addColumn('comment_top','integer',['limit'=>2,'default'=>0,'comment'=>'评论置顶'])
            ->addColumn('create_at','datetime',['limit'=>0,'comment'=>'发布时间'])
            ->addColumn('update_at','datetime',['limit'=>0,'comment'=>'修改时间','null'=>true])
            ->addColumn('delete_at','datetime',['limit'=>0,'comment'=>'删除时间','null'=>true])
            ->addIndex(['article_id'],['unique'=>true])
            ->create();
    }
}
