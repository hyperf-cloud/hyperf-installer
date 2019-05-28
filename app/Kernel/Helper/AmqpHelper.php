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

namespace App\Kernel\Helper;

use App\Job\AmqpProducerJob;
use Hyperf\Amqp\Message\ProducerMessageInterface;
use Hyperf\Amqp\Producer;
use Hyperf\Utils\ApplicationContext;

class AmqpHelper
{
    public static function produce(ProducerMessageInterface $message, int $retry = 2)
    {
        return retry($retry, function () use ($message) {
            return $this->getProducer()->produce($message, true);
        });
    }

    private static function getProducer(): Producer
    {
        return ApplicationContext::getContainer()->get(Producer::class);
    }
}
