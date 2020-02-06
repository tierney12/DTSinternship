<?php

namespace App\Providers;

use App\Models\Mailbox;
use App\Models\MailboxUser;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $url = request()->getHost();
        $urlExploded = explode('.', $url);

        View::share('_SUBDOMAIN', $urlExploded[0]);
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
