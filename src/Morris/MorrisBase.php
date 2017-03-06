<?php

namespace gfazioli\Morris\Morris;

/**
 * Model class constanst with Morris Chart types
 *
 */
class ChartTypes
{

  const LINE  = 'Line';
  const BAR   = 'Bar';
  const DONUT = 'Donut';
  const AREA  = 'Area';
}

/**
 * Main Morris model class
 */
class MorrisBase
{

  /**
   * Type of chart. This value is used in Javascript Morris method
   *
   * @brief Chart
   *
   * @var string $__chart_type
   */
  private $__chart_type = ChartTypes::LINE;

  /**
   * The ID of (or a reference to) the element into which to insert the graph.
   * Note: this element must have a width and height defined in its styling.
   *
   * @brief Element
   *
   * @var string $element
   */
  protected $element = '';

  /**
   * The data to plot. This is an array of objects, containing x and y attributes as described by the xkey and ykeys
   * options. Note: the order in which you provide the data is the order in which the bars are displayed.
   *
   * Note 2: if you need to update the plot, use the setData method on the object that Morris.Bar
   * returns (the same as with line charts).
   *
   * @brief Data
   *
   * @var array $data
   */
  protected $data = [];

  protected $functions = [
    'hoverCallback',
    'formatter',
    'dateFormat'
  ];

  /**
   * Create an instance of Morris class
   *
   * @brief Construct
   *
   * @param string $elementId The element id
   * @param string $chart     Optional. Chart Type of chart. Default ChartTypes::LINE
   *
   * @return MorrisBase
   */
  public function __construct( $elementId, $chart = ChartTypes::LINE )
  {
    $this->element      = $elementId;
    $this->__chart_type = $chart;
  }

  /**
   * Return the array of this object
   *
   * @brief Array
   *
   * @return array
   */
  public function toArray()
  {
    $return = [];
    foreach ( $this as $property => $value ) {
      if ( '__' == substr( $property, 0, 2 ) || '' === $value || is_null( $value ) || ( is_array( $value ) && empty( $value ) ) ) {
        continue;
      }

      if ( in_array( $property, $this->functions ) && substr( $value, 0, 8 ) == 'function' ) {
        $value = "%{$property}%";
      }

      $return[ $property ] = $value;
    }

    return $return;
  }

  /**
   * Return the jSON encode of this chart
   *
   * @brief JSON
   *
   * @return string
   */
  public function toJSON()
  {
    $json = json_encode( $this->toArray() );

    return str_replace(
      [
          '"%hoverCallback%"',
          '"%formatter%"',
          '"%dateFormat%"',
      ],
      [
          $this->hoverCallback,
          $this->formatter,
          $this->dateFormat,
      ],
      $json
    );
  }

  /**
   * Return the HTML markup for Javascript code
   *
   * @brief Brief
   * @return string
   */
  public function toJavascript()
  {
    ob_start();
    ?>
    <script type="text/javascript">
      jQuery( function( $ )
      {
        "use strict";

        Morris.<?php echo $this->__chart_type ?>(
          <?php echo $this->toJSON() ?>
        );
      } );
    </script>
    <?php
    $buffer = ob_get_contents();
    ob_end_clean();

    return $buffer;
  }

  public function __toString()
  {
    ob_start();
    ?>
    <script type="text/javascript">
      jQuery( function( $ )
      {
        "use strict";

        Morris.<?php echo $this->__chart_type ?>(
          <?php echo $this->toJSON() ?>
        );
      } );
    </script>
    <?php
    $buffer = ob_get_contents();
    ob_end_clean();

    return $buffer;
  }

  public function __get( $name )
  {
    foreach ( $this as $key => $value ) {
      if ( $name == $key ) {
        return $this->{$key};
      }
    }

    $method = 'get' . ucfirst( $name ) . 'Attribute';

    if ( method_exists( $this, $method ) ) {
      return call_user_func( [ $this, $method ] );
    }

    return null;
  }

  public function __call( $name, $arguments )
  {
    foreach ( $this as $key => $value ) {
      if ( $name == $key ) {
        $this->{$key} = $arguments[ 0 ];

        return $this;
      }
    }
  }
}