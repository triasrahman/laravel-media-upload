<?php namespace Triasrahman\MediaUpload;

use Illuminate\Support\ServiceProvider;

class MediaUploadServiceProvider extends ServiceProvider {

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
        // Publish config files
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('media-upload.php'),
        ], 'config');

        // Define the route
        $routeConfig = [
            'namespace' => 'Triasrahman\MediaUpload',
        ];

        if($this->app['config']->get('media-upload.middleware'))
        {
        	$routeConfig['middleware'] = $this->app['config']->get('media-upload.middleware');
        }

        $this->app['router']->group($routeConfig, function($router) {
            $router->any($this->app['config']->get('media-upload.route', 'media-upload').'/{type?}', [
                'uses' => 'MediaUploadController@index',
                'as' => 'media-upload',
            ]);
        });
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//sad
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
