<?php

declare(strict_types=1);

namespace App\Message\Stamp;

use Symfony\Component\Messenger\Stamp\StampInterface;

class UniqueIdStamp implements StampInterface
{
    private string $uniqueId;

    public function __construct()
    {
        $this->uniqueId = uniqid();
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }
}
