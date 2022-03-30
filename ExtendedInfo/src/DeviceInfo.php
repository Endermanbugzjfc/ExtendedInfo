<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo;

use SOFe\InfoAPI\Info;
use SOFe\InfoAPI\StringInfo;

final class DeviceInfo extends Info
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

    public static function init() : void
    {
    }
}