<?php
return [
    'controllerMap'=>[
        'migrate'=>[
            'class'=>\yii\console\controllers\MigrateController::class,
            'migrationPath' => '@tests/migrations/mysql',
            'db' => 'mdb'
        ],
        'pgmigrate'=>[
            'class'=>\yii\console\controllers\MigrateController::class,
            'migrationPath' => '@tests/migrations/pg',
            'db' => 'db'
        ],
    ]
];