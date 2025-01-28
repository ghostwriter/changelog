# Changelog

[![Automation](https://github.com/ghostwriter/changelog/actions/workflows/automation.yml/badge.svg)](https://github.com/ghostwriter/changelog/actions/workflows/automation.yml)
[![Supported PHP Version](https://badgen.net/packagist/php/ghostwriter/changelog?color=8892bf)](https://www.php.net/supported-versions)
[![GitHub Sponsors](https://img.shields.io/github/sponsors/ghostwriter?label=Sponsor+@ghostwriter/changelog&logo=GitHub+Sponsors)](https://github.com/sponsors/ghostwriter)
[![Downloads](https://badgen.net/packagist/dt/ghostwriter/changelog?color=blue)](https://packagist.org/packages/ghostwriter/changelog)

work in progress

> [!WARNING]
>
> This project is not finished yet, work in progress.

## Installation

You can install the package via composer:

``` bash
composer require ghostwriter/changelog
```

### Star ⭐️ this repo if you find it useful

You can also star (🌟) this repo to find it easier later.

## Usage

```php
$changelog = Changelog::new();

$changelog->add('Added', 'Added a new feature');
$changelog->add('Changed', 'Changed the way we do things');
$changelog->add('Fixed', 'Fixed a bug');

echo $changelog->render();
```

## Types of changes

- `Added` for new features.
- `Changed` for changes in existing functionality.
- `Deprecated` for soon-to-be removed features.
- `Removed` for now removed features.
- `Fixed` for any bug fixes.
- `Security` in case of vulnerabilities.
- `Unreleased` for changes that have not been released yet.

```markdown
# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com),
and this project adheres to [Semantic Versioning](https://semver.org).

## [Unreleased]

### Added

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Changed

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$authorUsername)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Deprecated

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Removed

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Fixed

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Security

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

## [0.1.0] - 2025-01-01

### Added

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Changed

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$authorUsername)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Deprecated

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Removed

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Fixed

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

### Security

- [$issueRequestNumber: $title](https://github.com/$nameWithOwner/issues/$issueRequestNumber) by (@$author)
- [$pullRequestNumber: $title](https://github.com/$nameWithOwner/pull/$pullRequestNumber) by (@$author)

[unreleased]: https://github.com/$nameWithOwner/compare/1.1.1...HEAD
[1.1.1]: https://github.com/$nameWithOwner/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/$nameWithOwner/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/$nameWithOwner/compare/0.2.0...1.0.0
[0.2.0]: https://github.com/$nameWithOwner/compare/0.1.0...0.2.0
[0.1.0]: https://github.com/$nameWithOwner/releases/tag/0.1.0
```

### Credits

- [Nathanael Esayeas](https://github.com/ghostwriter)
- [All Contributors](https://github.com/ghostwriter/changelog/contributors)

### Changelog

Please see [CHANGELOG.md](./CHANGELOG.md) for more information on what has changed recently.

### License

Please see [LICENSE](./LICENSE) for more information on the license that applies to this project.

### Security

Please see [SECURITY.md](./SECURITY.md) for more information on security disclosure process.
