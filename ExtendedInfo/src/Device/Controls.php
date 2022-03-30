<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\IndexToItemTrait;

final class Controls
{
    use IndexToItemTrait;

    public string $unknown = "Unknown";
    public string $mouse = "Mouse";
    public string $touch = "Touch";
    public string $controller = "Controller";
}