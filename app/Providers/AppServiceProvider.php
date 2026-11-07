<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // <-- Import View Facade
use App\Models\PageVisit;             // <-- Import PageVisit Model

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Bagikan variabel ke semua view
        View::composer('*', function ($view) {
            
            // Hapus logika cache dan langsung hitung dari database SETIAP SAAT.
            // Inilah yang membuat hitungan selalu real-time per reload.
            $count = PageVisit::count();

            // Kirim variabel 'visitorCount' ke view
            $view->with('visitorCount', $count);
        });
    }
}
