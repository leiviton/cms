<?php

use Phinx\Migration\AbstractMigration;

class CreatePost extends AbstractMigration
{
    public function up()
    {
        $this->table('posts')
            ->addColumn('title','string')
            ->addColumn('body','string')
            ->addColumn('path','string')
            ->addColumn('created_at','datetime')
            ->addColumn('updated_at','datetime')
            ->save();
    }

    public function down()
    {
        $this->dropTable('posts');
    }
}
