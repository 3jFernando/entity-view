<?php
 
namespace Fernando\EntityView\Providers;
 
use Illuminate\Support\ServiceProvider;
 
class EntityServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
      // load routes
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
 
      // load view files
      $this->loadViewsFrom(__DIR__.'/../views', 'entityview');
       
      // publish files
      $this->publishes([
      __DIR__.'/../views' => resource_path('views/vendor/entityview'),
    ]);
  }
 
  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
  }
}