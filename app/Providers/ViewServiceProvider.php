<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Position;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.layouts.header', function ($view) {
            $branchPositions = Position::whereHas('lavozimCategory', function ($query) {
                $query->where('name', 'Filial lavozimlari'); // Adjust as needed
            })->get();

            $officePositions = Position::whereHas('lavozimCategory', function ($query) {
                $query->where('name', 'Ofis lavozimlari'); // Adjust as needed
            })->get();

            $view->with(compact('branchPositions', 'officePositions'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
