<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Plugin;

final class Utils
{
    private function __construct()
    {
    }

    /**
     * For data class that has an "unkown" item. Log exception if the index is unkown for this plugin. Return the unkown item at the end.
     *
     * Then wait a few centuries until some server owners are willing to report the exception. And I figured out what item is missing in the plugin.
     */
    public static function unknownItem(
        string $unknown,
        int $index
    ) : string {
    }
}