# random-user-agent
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

Generate real random user-agents. The user agent list is largely pulled from the Firefox extension [random-agent-spoofer](https://addons.mozilla.org/en-US/firefox/addon/random-agent-spoofer/) h/t [dillbyrne/random-agent-spoofer](https://github.com/dillbyrne/random-agent-spoofer). Additional entries were sourced from [UserAgentString.com](http://www.useragentstring.com/) and [WiiBrew](http://wiibrew.org/wiki/User_agents) to provide more options for consoles and common web crawlers

You should be running at least PHP 5.4 to use this class

## Install

Via Composer

``` bash
$ composer require campo/random-user-agent
```

## Usage

### Generating a User Agent

To generate a random user agent, you can simply use the following:

``` php
echo \Campo\UserAgent::random(), "\n";
```

### Filtering the Type of User Agent

To limit the types of user agents that are returned, you can pass a filter array to random():

``` php
echo \Campo\UserAgent::random([
    'os_type' => 'Windows',
    'device_type' => 'Mobile'
]), "\n";
```

A filter is simply an array with key-value pairs specifying the types of agent strings that you want to have returned. The types of keys in this filtered array may include the following:

- `agent_name`
- `agent_type`
- `device_type`
- `os_name`
- `os_type`

Filters also support passing additional arrays to better segment the results you will receive from random():

```php
echo \Campo\UserAgent::random([
    'os_type' => ['Android', 'iOS'],
    'device_type' => ['Mobile', 'Tablet']
]), "\n";
```

The above will return only user-agent’s for Android & iOS OS types that are either mobile or tablets.

To get a list of values that can be accepted by these filter fields, you can use the following methods which will return arrays of values that can be used with the respected fields noted above:

- `UserAgent::getDeviceTypes()`
- `UserAgent::getAgentTypes()`
- `UserAgent::getAgentNames()`
- `UserAgent::getOSTypes()`
- `UserAgent::getOSNames()`

Values passed to filters are case-insensitive

### Error Handling

This class will throw an exception if either a filter returns no user agent strings, which means that a filter was invalid or too specific, or if one of the fields above was not present, which means that this library has been corrupted.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/campo/random-user-agent.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/campo/random-user-agent
