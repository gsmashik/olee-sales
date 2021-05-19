<?php

namespace Olee\Sales;

//use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
class SalesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
	 $this->app->make('Olee\Sales\Http\Controllers\SalesQuotationController');
        $this->loadViewsFrom(__DIR__.'/Resources/Views', 'sales');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
     
		 $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
		
		$this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
		   // publish css jss aseet in 
        $this->publishes([
            __DIR__.'/Resources/Views/vendor' => base_path('public/olee/sales'),
        ]);
    }
}
