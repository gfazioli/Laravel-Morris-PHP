# Laravel Morris PHP

[![Latest Stable Version](https://poser.pugx.org/gfazioli/laravel-morris-php/version.svg)](https://packagist.org/packages/gfazioli/laravel-morris-php) 
[![Total Downloads](https://poser.pugx.org/gfazioli/laravel-morris-php/downloads.svg)](https://packagist.org/packages/gfazioli/laravel-morris-php) 
[![Latest Unstable Version](https://poser.pugx.org/gfazioli/laravel-morris-php/v/unstable.svg)](https://packagist.org/packages/gfazioli/laravel-morris-php) 
[![License](https://poser.pugx.org/gfazioli/laravel-morris-php/license.svg)](https://packagist.org/packages/gfazioli/laravel-morris-php)

Laravel Morris PHP is the version for Laravel of [MorrisPHP](https://github.com/gfazioli/morris-php)
With this Service Provider, you can draw amazing char by usign [Morris.js]( http://morrisjs.github.io/morris.js/ ).

## Requirements

* PHP 5.5.9 or greater
* Laravel 5.2 or greater

## Installation

    composer require gfazioli/laravel-morris-php

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

## HTML

Remember to include the following Javascript and styles before use Morris.

```html
  <!-- Morris -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
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
