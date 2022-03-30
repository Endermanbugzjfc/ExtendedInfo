<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Device;

use Endermanbugzjfc\ExtendedInfo\Plugin\ModifiableKeywordsTrait;

final class GuiScales
{
    use ModifiableKeywordsTrait {
        fromIndex as private fromIndexOffset;
    }

    public string $minimum = "Minimum";
    public string $medium = "Medium";
    public string $maximum = "Maximum";

    public static function fromIndex(
        int $index
    ) : string {
        return self::fromIndexOffset($index - 2);
    }
}