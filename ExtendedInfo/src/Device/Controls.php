<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\Utils;

final class Controls
{
    public string $unknown = "Unknown";
    public string $mouse = "Mouse";
    public string $touch = "Touch";
    public string $controller = "Controller";

    public function fromIndex(
        int $index
    ) : string {
        return match ($index) {
            1 => $this->mouse,
            2 => $this->touch,
            3 => $this->controller,
            default => Utils::unknownItem($this->unknown, $index)
        };
    }
}