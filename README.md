# isEvenOrOdd

isEvenOrOdd adds a command that tells players whether a whole number is even or odd on an Axolotl-PM server.

[![Build and validate number command plugin](https://github.com/NhanAZ-Plugins/isEvenOrOdd/actions/workflows/build.yml/badge.svg)](https://github.com/NhanAZ-Plugins/isEvenOrOdd/actions/workflows/build.yml)

## Features

- Check positive, negative and zero values with `/isevenorodd`.
- Accept whole numbers longer than the PHP integer range because only the final digit determines parity.
- Reject decimals, exponent notation and other input that is not a whole number.

## Requirements and compatibility

The manifest requires Axolotl-PM API `5.0.0`. The server requires PHP 8.1 or newer. The [build workflow](.github/workflows/build.yml) pins the server source used for PHPStan and PHAR validation. Testing one revision does not establish compatibility with every Axolotl-PM 5.x release.

The plugin has no runtime virion dependencies or configuration file.

## Installation and usage

Download a verified PHAR from [GitHub Releases](https://github.com/NhanAZ-Plugins/isEvenOrOdd/releases), place it in the server's `plugins` directory and restart the server. Keep the previous PHAR for rollback.

Run `/isevenorodd <number>` from chat or the server console. `/evenorodd` and `/eoo` are aliases. The `isevenorodd.command` permission is granted by default.

```text
/isevenorodd -15
-15 is odd
```

Input may have an optional leading minus sign followed by decimal digits. Leading zeroes are accepted and retained in the reply. A decimal such as `1.5` produces an input warning.

## Build and development

The [GitHub Actions workflow](.github/workflows/build.yml) runs parity cases and uses [DevTools](https://github.com/NhanAZ/DevTools) to analyze the source at PHPStan level max, build the plugin PHAR and validate it before artifact upload. The workflow pins DevTools and the Axolotl-PM source to verified commits.

Run `php tests/parity.php` to check the standalone parity logic. A static check does not replace a runtime test of the built PHAR on a server.

## Support and license

Report issues through [GitHub Issues](https://github.com/NhanAZ-Plugins/isEvenOrOdd/issues) or [NhanAZ Discord](https://discord.gg/j2X83ujT6c). The plugin is licensed under the [MIT License](LICENSE).
