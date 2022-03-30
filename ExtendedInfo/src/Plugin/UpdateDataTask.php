<?php

declare(strict_types=1);

namespace Endermanbugzjfc\ExtendedInfo\Plugin;

use pocketmine\scheduler\AsyncTask;

final class UpdateDataTask extends AsyncTask
{
    public function __construct(
        private bool $download
    ) {
    }

    public function onRun() : void
    {
    }

    public function onProgressUpdate(
        int $progress
    ) : void {
    }

    public function onCompletion() : void
    {
    }
}