<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'webapp' => [
            'class' => \hidev\webapp\console\WebAppController::class,
        ],
        'deploy' => [
            'class' => \hidev\webapp\console\DeployController::class,
        ],
        'nginx' => [
            'before' => [
                'webapp',
            ],
        ],
    ],
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'webapp' => [
            'class' => \hidev\webapp\components\WebApp::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/webapp/views'],
                ],
            ],
        ],
        'vcsignore' => [
            '/runtime/*'    => 'WebApp directories',
            '/web/assets/*' => 'WebApp directories',
        ],
    ],
];