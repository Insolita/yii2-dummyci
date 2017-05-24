<?php

use yii\db\Migration;

class m170524_201300_dummy extends Migration
{
    public $db = 'db';
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('{{%dummy}}', [
            'id'=>$this->primaryKey()->unsigned(),
            'name'=>$this->string(),
            'createdAt'=>$this->timestamp(0)
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%dummy}}');
    }
    
}
