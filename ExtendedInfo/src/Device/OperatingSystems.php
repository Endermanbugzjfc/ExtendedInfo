<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\Utils;

final class OperatingSystems
{
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

    public function fromIndex(
        int $index
    ) : string {
        return match ($index) {
            1 => $this->android,
            2 => $this->iOS,
            3 => $this->macOS,
            4 => $this->fireOS,
            5 => $this->gearVR,
            6 => $this->holoLens,
            7 => $this->windows10,
            8 => $this->windows,
            9 => $this->dedicated,
            10 => $this->orbis,
            11 => $this->playstation4,
            12 => $this->nintentoSwitch,
            13 => $this->xboxOne,
            default => Utils::unknownItem($this->unknown, $index)
        };
    }
}