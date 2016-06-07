# nhieu-php

A very simple helper library for pluralizing Vietnamese.

## Installation

Via Composer:

```
$ composer require petehouston/nhieu-php
```

## Usage

Nothing much to tell, just a simple function:

```php
nhieu("xe", 0); // không xe

nhieu("ô tô", 2); // hai ô tô

nhieu("cái bánh", 8); // tám cái bánh

nhieu("người"); // nhiều người

nhieu("lập trình viên", -100); // không lập trình viên
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.