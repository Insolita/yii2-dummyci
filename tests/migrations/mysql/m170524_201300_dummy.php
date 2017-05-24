<?php

use yii\db\Migration;

class m170524_201300_dummy extends Migration
{
    public $db = 'mdb';
    // Use safeUp/safeDown to run migration code within a transaction
    public function up()
    {
        $this->createTable('{{%dummy}}', [
            'id'=>$this->primaryKey()->unsigned(),
            'name'=>$this->string(),
            'createdAt'=>$this->timestamp(0)
        ],'ENGINE=INNODB');
    }

    public function down()
    {
        $this->dropTable('{{%dummy}}');
    }
    
}
