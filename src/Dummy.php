<?php
/**
 * Created by solly [25.05.17 4:06]
 */

namespace insolita\dummyci;

use yii\base\Component;

class Dummy extends Component
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
}
