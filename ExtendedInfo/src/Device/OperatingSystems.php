<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\ModifiableKeywordsTrait;

final class OperatingSystems
{
    use ModifiableKeywordsTrait;

    public string $unknown = "Unknown";
    public string $android = "Android";
    public string $iOS = "iOS";
    public string $macOS = "macOS";
    public string $fireOS = "FireOS";
    public string $gearVR = "GearVR";
    public string $holoLens = "HoloLens";
    public string $windows10 = "Windows 10";
    public string $windows = "Windows";
    public string $dedicated = "Dedicated";
    public string $orbis = "Orbis";
    public string $playstation4 = "Playstation 4";
    public string $nintentoSwitch = "Nintento Switch";
    public string $xboxOne = "Xbox One";
}