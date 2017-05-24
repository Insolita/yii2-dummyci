<?php
return [
    'id' => 'app-test',
    'basePath' => __DIR__ . '/../',
    'sourceLanguage' => 'en-US',
    'timeZone'            => 'Europe/Moscow',
    'language'       => 'ru',
    'charset'        => 'utf-8',
    'bootstrap'=>['log'],
    'aliases'=>[],
    'container'=>[
        'definitions'=>[],
        'singletons'=>[]
    ],
    'components' => [
        'dummy' =>[
            'class'=>\insolita\dummyci\Dummy::class
        ]
    ],
    'modules'=>[],
    'params'=>[]
];