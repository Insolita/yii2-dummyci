<?php
$base = require(__DIR__).'/base.php';
$functional = [
    'components'=>[
        'urlManager'=>[
            'class'=>\yii\web\UrlManager::class,
            'showScriptName' => true,
            'enablePrettyUrl' => false,
            'baseUrl' => 'http://localhost:8080'
        ]
    ]
];
return \yii\helpers\ArrayHelper::merge($base, $functional);