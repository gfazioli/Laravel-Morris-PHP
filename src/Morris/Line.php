<?php

namespace gfazioli\Morris\Morris;

use gfazioli\Morris\Morris\Chart;
use gfazioli\Morris\Morris\ChartTypes;

/**
 * Morris Line Charts
 */
class Line extends Chart
{

  /**
   * Array containing colors for the series lines/points.
   *
   * @brief Line colors
   *
   * @var array $lineColors
   */
  protected $lineColors = [ '#0b62a4', '#7A92A3', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed' ];

  /**
   * Width of the series lines, in pixels.
   *
   * @brief Line width
   *
   * @var int $lineWidth
   */
  protected $lineWidth = 3;

  /**
   * Diameter of the series points, in pixels.
   *
   * @brief Point size
   *
   * @var int $pointSize
   */
  protected $pointSize = 4;

  /**
   * Colors for the series points. By default uses the same values as lineColors
   *
   * @brief Point fill colors
   *
   * @var array $pointFillColors
   */
  protected $pointFillColors = [];

  /**
   * Colors for the outlines of the series points. (#ffffff by default).
   *
   * @brief Point stroke color
   *
   * @var array $pointStrokeColors
   */
  protected $pointStrokeColors = [];

  /**
   * Set to false to disable line smoothing.
   *
   * @brief Smooth
   *
   * @var bool smooth
   */
  protected $smooth = true;

  /**
   * A function that accepts millisecond timestamps and formats them for display as chart labels.
   * default: function (x) { return new Date(x).toString(); }
   *
   * @brief Date format
   *
   * @var string $dateFormat
   */
  protected $dateFormat = '';

  /**
   * Sets the x axis labelling interval. By default the interval will be automatically computed.
   * The following are valid interval strings:
   *
   * "decade"
   * "year"
   * "month"
   * "day"
   * "hour"
   * "30min"
   * "15min"
   * "10min"
   * "5min"
   * "minute"
   * "30sec"
   * "15sec"
   * "10sec"
   * "5sec"
   * "second"
   *
   * @brief X labels
   *
   * @var array $xLabels
   */
  protected $xLabels = [];

  /**
   * A function that accepts Date objects and formats them for display as x-axis labels. Overrides the default formatter
   * chosen by the automatic labeller or the xLabels option.
   *
   * eg: function (x) { return x.toString(); }
   *
   * @brief X label format
   *
   * @var string $xLabelFormat
   */
  protected $xLabelFormat = '';

  /**
   * A function that accepts y-values and formats them for display as y-axis labels.
   *
   * eg: function (y) { return y.toString() + 'km'; }
   *
   * @brief Y label format
   *
   * @var string $yLabelFormat
   */
  protected $yLabelFormat = '';

  /**
   * When set to false (the default), all null and undefined values in a data series will be ignored and lines will be
   * drawn spanning them.
   * When set to true, null values will break the line and undefined values will be spanned.
   *
   * Note: in v0.5.0, this setting will be removed and the behaviour will be to break lines at null values.
   *
   * @brief      Continous line
   * @deprecated since 0.5.1
   *
   * @var bool $continuousLine
   */
  protected $continuousLine = false;

}