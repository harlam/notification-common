<?php

declare(strict_types=1);

namespace Notification\Common;

interface NotificationResultInterface
{
    public function isSuccess(): bool;

    public function getDetailedMessage(): ?string;

    public function getResult(): ?object;
}
