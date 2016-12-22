<?php

namespace gfazioli\Morris;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MorrisServiceProvider extends ServiceProvider
{

  public function boot()
  {
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {

    App::bind( 'gfazioli.morris', function () {

      return new Morris();
    } );
  }
}
