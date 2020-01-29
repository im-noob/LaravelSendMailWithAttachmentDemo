<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
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
        // \URL::forceRootUrl(\Config::get('app.url'));
        // // And this if you wanna handle https URL scheme
        // // It's not usefull for http://www.example.com, it's just to make it more independant from the constant value
        //         if (\Str::contains(\Config::get('app.url'), 'https://')) {
        //             \URL::forceScheme('https');
        //             //use \URL:forceSchema('https') if you use laravel < 5.4
        //         }

        // function url(){
        //     if(isset($_SERVER['HTTPS'])){
        //         $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        //     }
        //     else{
        //         $protocol = 'http';
        //     }
        //     return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        // }
    }
}
