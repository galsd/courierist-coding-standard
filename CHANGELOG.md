# Changelog

Since this library is forked from ramsey/coding-standard there is no more "releases". Every version is ready to use.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/).

## 2024-03-07

### Changed

* Assign the library to Courierist Team.
* Sort imports case-insensitive.
* Forbid a whitespace after a type cast (cause PHPStorm does by default).
* Forbid space after `fn` keyword (to follow PRE standard).
* Remove spaces from union types.

### Added

* Require classes be ether abstract or final.

### Removed

* Do not require arrow functions.
* Allow use of "Exception" and "Error" suffixes in class name.


## 2.2.0 - 2023-03-17

### Changed

* Set minimum PHP version to 8.1.


## 2.1.0 - 2023-01-14

### Changed

* Bump phpcsstandards/phpcsextra and dealerdirect/phpcodesniffer-composer-installer
  to their stable 1.0 releases.


## 2.0.3 - 2021-08-05

### Fixed

* Allow comments to run longer than 120 characters.


## 2.0.2 - 2021-07-07

### Fixed

* Allow doc comments without variable names above return statements.


## 2.0.1 - 2021-06-30

### Fixed

* Ignore the `IncorrectWhitespaceBeforeDeclare` error emitted by the `SlevomatCodingStandard.TypeHints.DeclareStrictTypes` sniff.

  In my personal projects, I usually have 2 newlines before the `declare` statement. One before the file header comment and one after. However, in tests, I have no file header comment, so there is only 1 newline before the `declare` statement. Since I like my tests to follow the same coding standard as the rest of my source, it is easiest to ignore this error.


## 2.0.0 - 2021-06-30

### Added

* Check format of union type hints on PHP 8, using `SlevomatCodingStandard.TypeHints.UnionTypeHintFormat`.

### Changed

* Upgrade to slevomat/coding-standard version 7.

  This may require downstream changes, since some Slevomat sniffs have BC breaks. This is why ramsey/coding-standard is bumping to version 2.0.0 for this change.

  See the [Slevomat changelog for 7.0.0](https://github.com/slevomat/coding-standard/releases/tag/7.0.0) for details.


## 1.3.0 - 2020-11-14

### Added

* Enforce the use of strict comparisons.
* Check for and disallow duplicate spaces everywhere.


## 1.2.0 - 2020-09-05

### Added

* Revised rules for absolute class name references


## 1.1.2 - 2020-08-28

### Fixed

* Use correct command prefixes


## 1.1.1 - 2020-08-28

### Fixed

* Explicitly require [PHPCSUtils](https://github.com/PHPCSStandards/PHPCSUtils)
  to avoid setting minimum-stability


## 1.1.0 - 2020-08-27

### Changed

* Package name is now "ramsey/coding-standard"


## 1.0.3 - 2020-08-21

### Fixed

* Allow bin dir in dist packages, avoiding Composer warnings


## 1.0.2 - 2020-08-21

### Fixed

* Move ext-dom to require-dev


## 1.0.1 - 2020-08-21

### Fixed

* Remove unnecessary (and unused) tools, commands, and code


## 1.0.0 - 2020-08-20

### Added

* Initial release of Ramsey coding standard
