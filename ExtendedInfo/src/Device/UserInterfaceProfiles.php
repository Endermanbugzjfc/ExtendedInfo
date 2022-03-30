<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\IndexToItemTrait;

final class UserInterfaceProfiles
{
    use IndexToItemTrait;

    public string $classicUI = "Classic UI";
    public string $pocketUI = "Pocket UI";
}