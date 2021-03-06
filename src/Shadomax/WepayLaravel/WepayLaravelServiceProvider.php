<?php 

namespace Shadomax\WepayLaravel;

use Illuminate\Support\ServiceProvider;

class WepayLaravelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('shadomax/wepay-laravel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// $this->app['wepay-laravel'] = $this->app->share(function() {
  //           return new WepayLaravel();
  //       });
		$this->app->bind('wepay-laravel', function ($app) {
            return new WepayLaravel();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
