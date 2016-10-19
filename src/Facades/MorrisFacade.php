<?php

namespace gfazioli\Morris\Facades;

use Illuminate\Support\Facades\Facade;

class MorrisFacade extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return 'gfazioli.morris';
  }

}