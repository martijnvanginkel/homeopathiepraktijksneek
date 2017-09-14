<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Index;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $footers = Index::all();

        View::share('footers', $footers);

        \Blade::setEchoFormat('nl2br(e(%s))');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
