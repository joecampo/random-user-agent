# random-user-agent
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
