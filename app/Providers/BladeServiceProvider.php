<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('auth', function () {
            $authenticated = auth('web')->check();

            return "<?php if ($authenticated) { ?>";
        });
        Blade::directive('notauth', function () {
            return "<?php } else { ?>";
        });

        Blade::directive('endauth', function () {
            return "<?php } ?>";
        });
    }
}
