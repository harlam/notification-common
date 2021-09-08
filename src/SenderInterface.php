<?php

declare(strict_types=1);

namespace Notification\Common;

interface SenderInterface
{
    public function getConfiguration(): ?object;

    public function send(): NotificationResultInterface;
}
