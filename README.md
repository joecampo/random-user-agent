# random-user-agent
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

Generate real random user-agents. The list is pulled from the Firefox extension [random-agent-spoofer](https://addons.mozilla.org/en-US/firefox/addon/random-agent-spoofer/) h/t [dillbyrne/random-agent-spoofer](https://github.com/dillbyrne/random-agent-spoofer)

## Install

Via Composer

``` bash
$ composer require campo/random-user-agent
```

## Usage

``` php
$ua = new Campo\UserAgent();
echo $ua::random();
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/campo/random-user-agent.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/campo/random-user-agent
