<?php

declare(strict_types=1);

namespace Notification\Common;

interface SenderConfigurationInterface
{
    public function getConfiguration(): ?object;
}
