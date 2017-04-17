<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'webapp' => [
                'class' => \hidev\webapp\console\WebAppController::class,
            ],
            'include' => [
                '@hidev/webapp/config/goals.yml',
            ],
            'views' => [
                '@hidev/webapp/views',
            ],
            'vcsignore' => [
                '/runtime/*'    => 'WebApp directories',
                '/web/assets/*' => 'WebApp directories',
            ],
        ],
    ],
];