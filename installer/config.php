<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

return [
    'packages' => [
        'hyperf/constants' => [
            'version' => 'dev-master',
        ],
        'hyperf/async-queue' => [
            'version' => 'dev-master',
        ],
        'hyperf/json-rpc' => [
            'version' => 'dev-master',
        ],
        'hyperf/rpc' => [
            'version' => 'dev-master',
        ],
        'hyperf/rpc-client' => [
            'version' => 'dev-master',
        ],
        'hyperf/rpc-server' => [
            'version' => 'dev-master',
        ],
        'hyperf/grpc-client' => [
            'version' => 'dev-master',
        ],
        'hyperf/grpc-server' => [
            'version' => 'dev-master',
        ],
    ],
    'require-dev' => [
    ],
    'questions' => [
        'rpc' => [
            'question' => 'Which rpc component do you want to use?',
            'default' => 'n',
            'required' => false,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'json-rpc',
                    'packages' => [
                        'hyperf/json-rpc',
                        'hyperf/rpc',
                        'hyperf/rpc-client',
                        'hyperf/rpc-server',
                    ],
                    'resources' => [
                    ],
                ],
                2 => [
                    'name' => 'grpc',
                    'packages' => [
                        'hyperf/grpc-client',
                        'hyperf/grpc-server',
                    ],
                    'resources' => [
                    ],
                ],
            ],
        ],
        'constants' => [
            'question' => 'Do you want to use hyperf/constants component?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => false,
            'options' => [
                1 => [
                    'name' => 'constants',
                    'packages' => [
                        'hyperf/constants',
                    ],
                    'resources' => [
                        'resources/src/constants/ErrorCode.php' => 'app/Constants/ErrorCode.php',
                        'resources/src/constants/BusinessException.php' => 'app/Exception/BusinessException.php',
                        'resources/src/constants/BusinessExceptionHandler.php' => 'app/Exception/Handler/BusinessExceptionHandler.php',
                    ],
                ],
            ],
        ],
        'async-queue' => [
            'question' => 'Do you want to use hyperf/async-queue component?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'async-queue',
                    'packages' => [
                        'hyperf/async-queue',
                    ],
                    'resources' => [
                        'resources/src/async_queue/QueueHelper.php' => 'app/Kernel/Helper/QueueHelper.php',
                    ],
                ],
            ],
        ],
    ],
];
