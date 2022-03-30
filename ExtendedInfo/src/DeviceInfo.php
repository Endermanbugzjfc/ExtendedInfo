<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo;

use SOFe\InfoAPI\Info;
use SOFe\InfoAPI\StringInfo;
use Stringable;

final class DeviceInfo extends Info implements Stringable
{
    public function __construct(
        private StringInfo $operatingSystem,
        private StringInfo $deviceModel,
        private StringInfo $userInterfaceProfile,
        private StringInfo $guiScale,
        private StringInfo $controls, // Current Input Mode is indeed a confusing name.
    ) {
    }

    public function toString() : string
    {
        $model = $this->deviceModel->toString();
        $os = $this->operatingSystem->toString();
        return "$model, running on $os";
    }

    public function __toString() : string
    {
        return $this->toString();
    }

    public static function init() : void
    {
    }
}