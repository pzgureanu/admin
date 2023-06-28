<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting; // Nu uita să incluzi modelul Setting dacă nu a fost inclus deja

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Încarcă setările din baza de date
        $settings = Setting::first();

        // Partajează variabila $settings cu toate view-urile
        view()->share('settings', $settings);
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