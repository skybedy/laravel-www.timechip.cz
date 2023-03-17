<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Schema;

use App\Models\Select;

use Illuminate\Http\Request;

use App\Interfaces\SelectRepositoryInterface;

use App\Repositories\SelectRepository;

use App\Interfaces\RaceRepositoryInterface;

use App\Repositories\RaceRepository;

//use App\Models\Test;

use App\Repositories\TestRepository;

use App\Interfaces\TestRepositoryInterface;

use App\Repositories\RegistrationRepository;

use App\Interfaces\RegistrationRepositoryInterface;


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


        /*
        $this->app->bind(Test::class, function ($app) {
            $request = $this->app->request;
            return new Test([$request->route()->parameters["year"],31]);
        });*/



        $this->app->bind(SelectRepositoryInterface::class, SelectRepository::class);
        $this->app->bind(RaceRepositoryInterface::class, RaceRepository::class);
        $this->app->bind(TestRepositoryInterface::class, TestRepository::class);
        $this->app->bind(RegistrationRepositoryInterface::class, RegistrationRepository::class);



        $this->app->bind(TestRepository::class, function ($app) {
            $request = $this->app->request;
            return new TestRepository(2023);
        });

        $this->app->bind(RaceRepository::class, function ($app) {
            $request = $this->app->request;
            return new RaceRepository([$request->route()->parameters["raceYear"]]);
        });

        $this->app->bind(RegistrationRepository::class, function ($app) {
            $request = $this->app->request;
            isset($request->route()->parameters["eventOrder"]) ? $eventOrder = $request->route()->parameters["eventOrder"] : $eventOrder = 1; 
            return new RegistrationRepository([$request->route()->parameters["raceYear"],$request->route()->parameters["raceId"],$eventOrder]);
        });

               




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
