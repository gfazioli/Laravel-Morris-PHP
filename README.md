# Morris PHP v0.6.0

[![Latest Stable Version](https://poser.pugx.org/gfazioli/morris-php/version.svg)](https://packagist.org/packages/gfazioli/morris-php) [![Total Downloads](https://poser.pugx.org/gfazioli/morris-php/downloads.svg)](https://packagist.org/packages/gfazioli/morris-php) [![Latest Unstable Version](https://poser.pugx.org/gfazioli/morris-php/v/unstable.svg)](https://packagist.org/packages/gfazioli/morris-php) [![License](https://poser.pugx.org/gfazioli/morris-php/license.svg)](https://packagist.org/packages/gfazioli/morris-php)

This project is a PHP part for Morris.js ( http://morrisjs.github.io/morris.js/ ).

You can use this PHP class to wrap the Morris Javascript class

## Getting Started

1. Download Morris Javascript lib from http://morrisjs.github.io/morris.js/
2. Include main `morris.php` php file
3. Include chart base `morris-charts.php` php file
3. Include all or single chart that you like use


## Getting Started with Composer

1. Use `composer.json`

## Examples

```php

public function draw()
{
  ?>
  <div id="my-charts"></div>
<?php
  $morris = new Line( 'my-charts' );
  $morris->xkey = array( 'date' );
  $morris->ykeys = array( 'value' );
  $morris->labels = array( 'Money' );
  $morris->data = array(
    array( 'date' => '2010', 'value' => 88 ),
    array( 'date' => '2011', 'value' => 18 ),
    array( 'date' => '2012', 'value' => 28 ),
    array( 'date' => '2013', 'value' => 48 ),
  );
  echo $morris;
}

```
