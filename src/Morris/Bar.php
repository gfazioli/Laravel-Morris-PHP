<?php

namespace gfazioli\Morris\Morris;

use gfazioli\Morris\Morris\Chart;
use gfazioli\Morris\Morris\ChartTypes;

/**
 * Morris Bar Charts
 */
class Bar extends Chart
{

  protected $barSizeRatio = 0.75;

  protected $barGap = 3;

  protected $barOpacity = 1.0;

  protected $barRadius = [ 0, 0, 0, 0 ];

  protected $xLabelMargin = 50;

  /**
   * Array containing colors for the series bars.
   *
   * @brief Bars colors
   *
   * @var array $barColors
   */
  protected $barColors = [
    '#0b62a4',
    '#7a92a3',
    '#4da74d',
    '#afd8f8',
    '#edc240',
    '#cb4b4b',
    '#9440ed',
  ];

  /**
   * Set to true to draw bars stacked vertically.
   *
   * @brief Stacked
   *
   * @var bool $stacked
   */
  protected $stacked = true;

  /**
   * Create an instance of MorrisBarCharts class
   *
   * @param string $elementId The element id
   *
   */
  public function __construct( $elementId )
  {
    parent::__construct( $elementId, ChartTypes::BAR );
  }
}