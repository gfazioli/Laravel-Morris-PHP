# Laravel Morris PHP

[![Latest Stable Version](https://poser.pugx.org/gfazioli/morris-php/version.svg)](https://packagist.org/packages/gfazioli/morris-php) 
[![Total Downloads](https://poser.pugx.org/gfazioli/morris-php/downloads.svg)](https://packagist.org/packages/gfazioli/morris-php) 
[![Latest Unstable Version](https://poser.pugx.org/gfazioli/morris-php/v/unstable.svg)](https://packagist.org/packages/gfazioli/morris-php) 
[![License](https://poser.pugx.org/gfazioli/morris-php/license.svg)](https://packagist.org/packages/gfazioli/morris-php)

This project is a Laravel Service provider porting of [Morris.js]( http://morrisjs.github.io/morris.js/ ).

You can use this PHP class to wrap the Morris Javascript class

## Requirements

* PHP 5.5.9 or greater
* Laravel 5.2 or greater

## Laravel

We include service providers and a facade for easy integration and a nice syntax for Laravel.

Firstly, add the `gfazioli\Morris\MorrisServiceProvider` provider to the providers array in `config/app.php`

```php
'providers' => [
  ...
  gfazioli\Morris\MorrisServiceProvider::class,
],
```

and then add the facade to your `aliases` array

```php
'aliases' => [
  ...
  'Morris' => gfazioli\Morris\Facades\MorrisFacade::class,
],
```

## Examples

```html
  
<div id="morris-area"></div>

<?php

echo Morris::area( 'morris-area' )
           ->xkey( [ 'y' ] )
           ->ykeys( [ 'a', 'b' ] )
           ->labels( [ 'Series A', 'Series B' ] )
           ->data( [
                     [ "y" => '2006', "a" => 100, "b" => 90 ],
                     [ "y" => '2007', "a" => 75, "b" => 65 ],
                     [ "y" => '2008', "a" => 50, "b" => 40 ],
                     [ "y" => '2009', "a" => 75, "b" => 65 ],
                     [ "y" => '2010', "a" => 50, "b" => 40 ],
                     [ "y" => '2011', "a" => 75, "b" => 65 ],
                     [ "y" => '2012', "a" => 100, "b" => 90 ]
                   ] );

```

```html
  
<div id="morris-bar"></div>
<?php

echo Morris::bar( 'morris-bar' )
           ->xkey( [ 'y' ] )
           ->ykeys( [ 'a', 'b' ] )
           ->labels( [ 'Series A', 'Series B' ] )
           ->data( [
                     [ "y" => '2006', "a" => 100, "b" => 90 ],
                     [ "y" => '2007', "a" => 75, "b" => 65 ],
                     [ "y" => '2008', "a" => 50, "b" => 40 ],
                     [ "y" => '2009', "a" => 75, "b" => 65 ],
                     [ "y" => '2010', "a" => 50, "b" => 40 ],
                     [ "y" => '2011', "a" => 75, "b" => 65 ],
                     [ "y" => '2012', "a" => 100, "b" => 90 ]
                   ] );

```

```html
  
<div id="morris-donut"></div>
<?php

echo Morris::donut( 'morris-donut' )
           ->data( [
                     [ "label" => "Download Sales", "value" => 12 ],
                     [ "label" => "In-Store Sales", "value" => 30 ],
                     [ "label" => "Mail-Order Sales", "value" => 20 ]
                   ] );

```

```html
  
<div id="morris-line"></div>
<?php

echo Morris::line( 'morris-line' )
           ->xkey( [ 'date' ] )
           ->ykeys( [ 'value' ] )
           ->labels( [ 'Money' ] )
           ->data( [
                     [ 'date' => '2010', 'value' => 88 ],
                     [ 'date' => '2011', 'value' => 18 ],
                     [ 'date' => '2012', 'value' => 28 ],
                     [ 'date' => '2013', 'value' => 48 ],
                   ] );

```
