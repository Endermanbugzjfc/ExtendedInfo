<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\ModifiableKeywordsTrait;

final class UserInterfaceProfiles
{
    use ModifiableKeywordsTrait;

    public string $classicUI = "Classic UI";
    public string $pocketUI = "Pocket UI";
}