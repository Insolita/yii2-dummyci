<?php
/**
 * Created by solly [25.05.17 6:15]
 */

namespace insolita\dummyci\dummymodule\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $data = 'Dummy Module Test';
        return $this->render('index', compact('data'));
    }
}
