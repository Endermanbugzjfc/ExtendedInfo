<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Plugin;

use RuntimeException;

trait ModifiableKeywordsTrait
{
    /**
     * Maps index to the corresponding item from a data class that its properties are arranged in ascending order.
     *
     * Log exception and the first item if the index has no corresponding item in this data class.
     *
     * Then wait a few centuries until some server owners are willing to report the exception. And I figured out what item is missing.
     */
    public static function fromIndex(
        int $index
    ) : string {
        $map = (array)$this;
        $return = $map[$index] ?? null;

        if ($return === null) {
            $return = $map[0];
            $class = $this::class;
            $err = new RuntimeException("Index $index has no corresponding item in data class $class");
            Loader::getInstance()->getLogger()->logException($err);
        }
        return $return;
    }
}