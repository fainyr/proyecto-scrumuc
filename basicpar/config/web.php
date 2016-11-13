<?php
Yii::setAlias('@themes', dirname(__DIR__) . '/themes');
$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '4WYVyo_om5Tu_9Tn6hj7NpaicQOtc3Os',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'urlManager' => ['enablePrettyUrl' => true ],
        //'user' => [
          //  'identityClass' => 'app\models\User',
           //		   'enableAutoLogin' => true,
        //],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		
/*'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport'=>false,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'os1997vamos@gmail.com',
            'password' => 'vamos123',
            'port' => '465',
            'encryption' => 'ssl',
        ],
    ],*/
		
       
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
	  'modules' => [
      'user' => [
      'class' => 'dektrium\user\Module',
      'enableUnconfirmedLogin' => true,
      'confirmWithin' => 21600,
      'cost' => 12,
      'admins' => ['admin'],
	  /*'mailer' => [
        'sender'                => 'no-reply@myhost.com', // or ['no-reply@myhost.com' => 'Sender name']
        'welcomeSubject'        => 'Welcome subject',
        'confirmationSubject'   => 'Confirmation subject',
        'reconfirmationSubject' => 'Email change subject',
        'recoverySubject'       => 'Recovery subject',
       ],*/
	  
    ],
  ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
