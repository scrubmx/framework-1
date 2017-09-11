<?php

/**
 * This file is part of Zero Framework.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace LaravelZero\Framework\Commands\Component\Illuminate\Filesystem;

use LaravelZero\Framework\Commands\Component\AbstractComponentProvider;

/**
 * This is the Zero Framework illuminate/filesystem component provider class.
 *
 * @author Nuno Maduro <enunomaduro@gmail.com>
 */
class ComponentProvider extends AbstractComponentProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        if (! class_exists(\Illuminate\Filesystem\FilesystemServiceProvider::class)) {
            return;
        }

        $this->registerServiceProvider(\Illuminate\Filesystem\FilesystemServiceProvider::class);

        // Make this Filesystem instance available globally via static methods
        $this->app->make(\Illuminate\Filesystem\Filesystem::class)
            ->setAsGlobal();
    }
}
