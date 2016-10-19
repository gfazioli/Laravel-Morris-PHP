<?php

namespace gfazioli\Morris\Morris;

use gfazioli\Morris\Morris\Chart;
use gfazioli\Morris\Morris\ChartTypes;

/**
 * Morris Donut Charts
 */
class Donut extends Chart
{

  /**
   * An array of strings containing HTML-style hex colors for each of the donut segments. Note: if there are fewer
   * colors than segments, the colors will cycle back to the start of the array when exhausted.
   *
   * @brief Colors
   *
   * @var array $colors
   */
  protected $colors = array(
    '#0B62A4',
    '#3980B5',
    '#679DC6',
    '#95BBD7',
    '#B0CCE1',
    '#095791',
    '#095085',
    '#083E67',
    '#052C48',
    '#042135'
  );

  /**
   * A function that will translate a y-value into a label for the centre of the donut.
   *
   * eg: currency function (y, data) { return '$' + y }
   *
   * Note: if required, the method is also passed an optional second argument, which is the complete data row for the
   * given value.
   *
   * @brief Formatter
   *
   * @var string $formatter
   */
  protected $formatter = '';

  protected $backgroundColor = '#FFFFFF';
  protected $labelColor      = '#000000';

  /**
   * Create an instance of MorrisDonutCharts class
   *
   * @brief Construct
   *
   * @param string $element_id The element id
   *
   */
  public function __construct( $element_id )
  {
    parent::__construct( $element_id, ChartTypes::DONUT );
  }

}