<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Plugin;

use pocketmine\plugin\PluginBase;

final class ExtendedInfo extends PluginBase
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
