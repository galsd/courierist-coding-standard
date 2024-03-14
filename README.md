<h1 align="center">galsd/courierist-coding-standard</h1>

<p align="center">
    <strong>A common coding standard for <a href="https://courierist.ru">Courierist</a> PHP code.</strong>
</p>

<p align="center">
    <a href="https://github.com/galsd/courierist-coding-standard"><img src="https://img.shields.io/badge/source-galsd/courierist--coding--standard-blue.svg?style=flat-square" alt="Source Code"></a>
    <a href="https://packagist.org/packages/galsd/courierist-coding-standard"><img src="https://img.shields.io/packagist/dt/galsd/courierist-coding-standard.svg?style=flat-square" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://img.shields.io/packagist/dependency-v/galsd/courierist-coding-standard/php.svg?version=dev-main&style=flat-square&colorB=%238892BF" alt="PHP Programming Language"></a>
    <a href="https://github.com/galsd/courierist-coding-standard/blob/main/LICENSE"><img src="https://img.shields.io/github/license/galsd/courierist-coding-standard.svg?style=flat-square&colorB=darkcyan" alt="Read License"></a>
    <a href="https://github.com/galsd/courierist-coding-standard/actions/workflows/continuous-integration.yml"><img src="https://img.shields.io/github/actions/workflow/status/galsd/courierist-coding-standard/continuous-integration.yml?branch=main&style=flat-square&logo=github" alt="Build Status"></a>
</p>

## About

It is a fork from [ramsey/coding-standard](https://github.com/ramsey/coding-standard). The fork is adopted and dedicated to Courierist Team.

This project adheres to a [code of conduct](CODE_OF_CONDUCT.md).
By participating in this project and its community, you are expected to
uphold this code.

## Installation

Install this package as a development dependency using [Composer](https://getcomposer.org).

``` bash
composer require --dev galsd/courierist-coding-standard dev-main
```

## Usage

To use this coding standard, add `<rule ref="Courierist"/>` to your `phpcs.xml`
configuration.

Here are the contents of an example `phpcs.xml.dist` file that you may place in
the root of your repository:

``` xml
<?xml version="1.0"?>
<ruleset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="vendor/squizlabs/php_codesniffer/phpcs.xsd">

    <arg name="extensions" value="php"/>
    <arg name="colors"/>
    <arg value="sp"/>

    <file>./src</file>
    <file>./tests</file>

    <rule ref="Courierist"/>

</ruleset>
```

Then, run PHP_CodeSniffer:

```bash
./vendor/bin/phpcs
```

## Contributing

Contributions are welcome! To contribute, please familiarize yourself with
[CONTRIBUTING.md](CONTRIBUTING.md).

## Copyright and License

The galsd/courierist-coding-standard library is copyright © [Courierist Team](https://courierist.ru)
and licensed for use under the terms of the
MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
