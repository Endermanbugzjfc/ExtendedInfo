<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Plugin;

use Endermanbugzjfc\ExtendedInfo\DeviceInfo;
use pocketmine\plugin\PluginBase;

final class Loader extends PluginBase
{
    protected function onLoad() : void
    {
        self::$instance = $this;
    }

    protected function onEnable() : void
    {
        DeviceInfo::init();
    }

    private static self $instance;

    public static function getInstance() : self
    {
        return self::$instance;
    }
}
