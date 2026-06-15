<?php

declare(strict_types=1);

namespace Docile\Security\Tests\Fixtures;

use DateTimeImmutable;
use Psr\Clock\ClockInterface;

final class TestClock implements ClockInterface
{
    private int $currentTime = 0;

    public function now(): DateTimeImmutable
    {
        return DateTimeImmutable::createFromFormat('U', (string) $this->currentTime) ?: new DateTimeImmutable();
    }

    public function setCurrentTime(int $timestamp): void
    {
        $this->currentTime = $timestamp;
    }
}
