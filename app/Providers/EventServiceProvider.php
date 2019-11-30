<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\EventServices\EventHandler;
use App\EventServices\Tools\UpdateOrCreate;
use App\EventServices\Tools\Data;
use App\EventServices\Tools\ValidateEvent;
use App\EventServices\ConfigHandler;


class EventServiceProvider extends ServiceProvider
{

      /**
       * Register any event services.
       *
       * @return void
       */
      public function register()
      {
        $this->app->bind('EventHandler', function ($app) {
          return new EventHandler;
        });

        $this->app->bind('UpdateOrCreate', function ($app) {
          return new UpdateOrCreate;
        });

        $this->app->bind('Data', function ($app) {
          return new Data;
        });

        /*$this->app->bind('ConfigHandler', function ($app) {
          return new ConfigHandler;
        });*/

      }
      /**
       * Bootstrap any event services.
       *
       * @return void
       */
      public function boot()
      {
          //
      }

}
