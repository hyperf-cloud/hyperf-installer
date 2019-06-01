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
        'hyperf/amqp' => [
            'version' => 'dev-master',
        ],
        'hyperf/async-queue' => [
            'version' => 'dev-master',
        ],
        'hyperf/model-cache' => [
            'version' => 'dev-master',
        ],
        'hyperf/constants' => [
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
                        'resources/constants/ErrorCode.php' => 'app/Constants/ErrorCode.php',
                        'resources/constants/BusinessException.php' => 'app/Exception/BusinessException.php',
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
                        'resources/async_queue/QueueHelper.php' => 'app/Kernel/Helper/QueueHelper.php',
                        'resources/async_queue/async_queue.php' => 'config/autoload/async_queue.php',
                        'resources/async_queue/AsyncQueueConsumer.php' => 'app/Process/processes.php',
                        'resources/async_queue/QueueHandleListener.php' => 'app/Listener/QueueHandleListener.php',
                    ],
                ],
            ],
        ],
        'amqp' => [
            'question' => 'Do you want to use hyperf/amqp component?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'amqp',
                    'packages' => [
                        'hyperf/amqp',
                    ],
                    'resources' => [
                        'resources/amqp/AmqpHelper.php' => 'app/Kernel/Helper/AmqpHelper.php',
                        'resources/amqp/amqp.php' => 'config/autoload/amqp.php',
                    ],
                ],
            ],
        ],
        'model-cache' => [
            'question' => 'Do you want to use hyperf/model-cache component?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'model-cache',
                    'packages' => [
                        'hyperf/model-cache',
                    ],
                    'resources' => [
                        'resources/model_cache/Model.php' => 'app/Model/Model.php',
                        'resources/model_cache/databases.php' => 'config/autoload/databases.php',
                    ],
                ],
            ],
        ],
    ],
];
