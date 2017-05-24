<?php
/**
 * Created by solly [25.05.17 1:59]
 */

namespace tests\unit;

use Codeception\Test\Unit;
use yii\db\Query;

/**
 * Class AwesomeTest
 *
 * @package tests\unit
 */
class AwesomeTest extends Unit
{
    /**
     *
     */
    public function testDummy()
    {
        $var = 2 + 3;
        verify($var)->equals(5);
    }
    
    /**
     *
     */
    public function testDummyComponent()
    {
        $sum = \Yii::$app->dummy->sum(2, 3);
        verify($sum)->equals(5);
    }
    
    /**
     *
     */
    public function testMysqlConnection()
    {
        /**@var \yii\db\Connection $db */
        $db = \Yii::$app->mdb;
        $db->createCommand()->insert(
            '{{%dummy}}',
            [
                'name' => 'qwerty',
                'createdAt' => date('Y-m-d H:i:s', time()),
            ]
        )->execute();
        $check = (new Query())->select(['id'])->from('{{%dummy}}')->where(['name'=>'qwerty'])->count('*',$db);
        verify($check)->equals(1);
    }
    
    /**
     *
     */
    public function testPgConnection()
    {
        /**@var \yii\db\Connection $db */
        $db = \Yii::$app->db;
        $db->createCommand()->insert(
            '{{%dummy}}',
            [
                'name' => 'qwerty',
                'createdAt' => date('Y-m-d H:i:s', time()),
            ]
        )->execute();
        $check = (new Query())->select(['id'])->from('{{%dummy}}')->where(['name'=>'qwerty'])->count('*',$db);
        verify($check)->equals(1);
    }
}
