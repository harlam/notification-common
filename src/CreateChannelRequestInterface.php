<?php

declare(strict_types=1);

namespace Notification\Common;

/**
 * Запрос на создание канала отправки
 */
interface CreateChannelRequestInterface extends RequestInterface
{
    /**
     * @return string Название канала отправки
     */
    public function getName(): string;

    /**
     * @return string|null Описание канала
     */
    public function getDescription(): ?string;

    /**
     * @return object|null Конфигурация канала
     */
    public function getConfiguration(): ?object;
}