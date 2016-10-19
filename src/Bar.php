<?php

namespace MorrisPHP;

use MorrisPHP\Charts;
use MorrisPHP\ChartTypes;

/**
 * Morris Bar Charts
 *
 * @class           MorrisBarCharts
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class Bar extends Charts {

  public $barSizeRatio = 0.75;

  public $barGap = 3;

  public $barOpacity = 1.0;

  public $barRadius = array( 0, 0, 0, 0 );

  public $xLabelMargin = 50;

  /**
   * Array containing colors for the series bars.
   *
   * @brief Bars colors
   *
   * @var array $barColors
   */
  public $barColors = array(
    '#0b62a4',
    '#7a92a3',
    '#4da74d',
    '#afd8f8',
    '#edc240',
    '#cb4b4b',
    '#9440ed'
  );

  /**
   * Set to true to draw bars stacked vertically.
   *
   * @brief Stacked
   *
   * @var bool $stacked
   */
  public $stacked = true;

  /**
   * Create an instance of MorrisBarCharts class
   *
   * @param string $element_id The element id
   *
   */
  public function __construct( $element_id )
  {
    parent::__construct( $element_id, ChartTypes::BAR );
  }
}