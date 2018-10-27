<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\SchoolDetail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer('frontEnd.compare',function ($id){
            $schooldataById = SchoolDetail::find($id);
          View::share('schooldataById',$schooldataById);
        });*/
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
