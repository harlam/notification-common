<?php

declare(strict_types=1);

namespace Notification\Common;

interface NotificationSenderInterface
{
    public function send(string $channelKey, object $message): AbstractNotificationResult;
}
