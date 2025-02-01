#!/usr/bin/env php
<?php

declare(strict_types=1);

namespace Ghostwriter\Changelog\Console;

use Ghostwriter\Changelog\Foo;

use const STDERR;

use function fwrite;
use function sprintf;

/** @var ?string $_composer_autoload_path */
(static function (string $composerAutoloadPath): void {
    /** @psalm-suppress UnresolvableInclude */
    require '' !== $composerAutoloadPath && '0' !== $composerAutoloadPath ? $composerAutoloadPath : fwrite(
        STDERR,
        sprintf('[ERROR]Cannot locate "%s"\n please run "composer install"\n', $composerAutoloadPath)
    ) && exit(1);

    /**
     * #BlackLivesMatter.
     */
    echo (new Foo())->test();
})($_composer_autoload_path ?? null);
