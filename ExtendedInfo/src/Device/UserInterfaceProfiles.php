<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use RuntimeException;

final class UserInterfaceProfiles
{
    public string $classicUI = "Classic UI";
    public string $pocketUI = "Pocket UI";

    public function fromIndex(
        int $index
    ) : string {
        return match ($index) {
            0 => $this->classicUI,
            1 => $this->pocketUI,
            default => throw new RuntimeException("unknown user interface profile index $index")
        };
    }
}