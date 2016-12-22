<?php

namespace gfazioli\Morris\Morris;

use gfazioli\Morris\Morris\Chart;
use gfazioli\Morris\Morris\ChartTypes;

/**
 * Morris Area Charts
 */
class Area extends Chart {

  /**
   * Change the opacity of the area fill colour.
   * Accepts values between 0.0 (for completely transparent) and 1.0 (for completely opaque).
   *
   * @brief Opacity
   *
   * @var string $fillOpacity
   */
  protected $fillOpacity = 'auto';

  /**
   * Set to true to overlay the areas on top of each other instead of stacking them.
   *
   * @brief Line
   *
   * @var bool $behaveLikeLine
   */
  protected $behaveLikeLine = false;

  /**
   * Create an instance of MorrisAreaCharts class
   *
   * @param string $elementId The element id
   *
   */
  public function __construct( $elementId )
  {
    parent::__construct( $elementId, ChartTypes::AREA );
  }
}