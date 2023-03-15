<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Schema;

use App\Models\Select;

use Illuminate\Http\Request;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       //$this->app->bind(Select::class, function ($app) {
            
        //    $request = $this->app->request;
            //$request = $app->make(Request::class);
         //   $x['race_year'] = 2023;
           // $x['race_id'] = 3;
            //return new Select(2023);

        //});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('currentYear', date("Y")); 


        // Using view composer to set following variables globally
        view()->composer('*',function($view) {
            $view->with('user', "bl");
            
        });

        Schema::defaultStringLength(191);
        
    }
}
