<?php

declare(strict_types=1);

namespace Notification\Common;

interface SenderInterface
{
    public function send(object $message): NotificationResultInterface;
}
