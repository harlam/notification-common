<?php

declare(strict_types=1);

namespace Notification\Common;

class NotificationResult implements NotificationResultInterface
{
    protected bool $isSuccess;
    protected ?string $detailedMessage;
    protected ?object $result;

    public function __construct(bool $isSuccess, ?object $result = null)
    {
        $this->isSuccess = $isSuccess;
        $this->result = $result;
    }

    public function isSuccess(): bool
    {
        return $this->isSuccess;
    }

    public function setDetailedMessage(?string $message): self
    {
        $this->detailedMessage = $message;
        return $this;
    }

    public function getDetailedMessage(): ?string
    {
        return $this->detailedMessage;
    }

    public function getResult(): ?object
    {
        return $this->result;
    }
}
