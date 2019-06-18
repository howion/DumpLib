# PHP DumpLib

## Installation

From [Packagist](https://packagist.org/packages/howion/dumplib)
```bash
$ composer require howion/dumplib
```

## Usage

```php
new DumpLib(Theme $theme = HowionBlack)
->dump(...$values)
->dd(...$values) # DUMP N DIE
->deliver($die = false)
```

```php
<?php
use DumpLib\Themes\HowionBlack\HowionBlack;
use DumpLib\DumpLib;

$d = new DumpLib(new HowionBlack([
     #---------------------
     #  DEFAULT SETTINGS
     #---------------------
    'title'  => 'DumpLib',
    'zoom'   => 1
]));

// DUMP GIVEN VARIABLES
$d->dump($variable, $variable, ...)
$d->dump($variable)

// ECHO GENERATED HTML OVERWRITES CURRENT BUFFER
// YOU CAN WRITE THIS TO END OF THE PHP SCRIPT
// DOES NOTHIN IF THERE IS NO DUMP
$d->deliver($die = false)
```

## Preinstalled Themes

* **HowionBlack** `DumpLib\Themes\HowionBlack\HowionBlack`

## I Didn't Love These Themes

Write your own theme then just **extend `DumpLib\Themes\Theme`** class. You can also use **utils**. 

## Screenshots

```php
<?php

$d->dump(M_E); # EULERS NUMBER
$d->dump(7823);
$d->dump(true);
$d->dump('Hell0 W0rld.');
$d->dump([
    'user.username' => 'howion',
    'user.details'  => [
        'detail.adress' => 'Nowhere',
        'detail.phone'  => '+00 000 000 0000'
    ],
]);
$d->deliver();
```

![Screenshot](https://raw.githubusercontent.com/howion/box/master/DumpLib/ss.jpg)

## License

[**MIT**](https://github.com/howion/DumpLib/blob/master/LICENSE)
