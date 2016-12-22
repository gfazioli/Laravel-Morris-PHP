<?php

namespace gfazioli\Morris;

use Log;
use gfazioli\Morris\Morris\Area;
use gfazioli\Morris\Morris\Bar;
use gfazioli\Morris\Morris\Donut;
use gfazioli\Morris\Morris\Line;

class Morris
{
  /**
   * Create an instance of Morris Area class
   *
   * @param string $elementID The element id
   *
   * @return Area
   */
  public function Area( $elementID )
  {
    return new Area( $elementID );
  }

  /**
   * Create an instance of Morris Bar class
   *
   * @param string $elementID The element id
   *
   * @return Bar
   */
  public function Bar( $elementID )
  {
    return new Bar( $elementID );
  }

  /**
   * Create an instance of Morris Donut class
   *
   * @param string $elementID The element id
   *
   * @return Donut
   */
  public function Donut( $elementID )
  {
    return new Donut( $elementID );
  }

  /**
   * Create an instance of Morris Line class
   *
   * @param string $elementID The element id
   *
   * @return Line
   */
  public function line( $elementID )
  {
    return new Line( $elementID );
  }
}