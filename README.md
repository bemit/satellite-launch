# Orbiter\Satellite: Launch

[![Latest Stable Version](https://poser.pugx.org/orbiter/satellite-launch/version.svg)](https://packagist.org/packages/orbiter/satellite-launch)
[![Latest Unstable Version](https://poser.pugx.org/orbiter/satellite-launch/v/unstable.svg)](https://packagist.org/packages/orbiter/satellite-launch)
[![codecov](https://codecov.io/gh/bemit/satellite/branch/master/graph/badge.svg?token=N376EQ2T5O)](https://codecov.io/gh/bemit/satellite)
[![Total Downloads](https://poser.pugx.org/orbiter/satellite-launch/downloads.svg)](https://packagist.org/packages/orbiter/satellite-launch)
[![Github actions Build](https://github.com/bemit/satellite/actions/workflows/blank.yml/badge.svg)](https://github.com/bemit/satellite/actions)
[![PHP Version Require](http://poser.pugx.org/orbiter/satellite-launch/require/php)](https://packagist.org/packages/orbiter/satellite-launch)

PHP `SatelliteApp` interface, to launch a new cli or routing app with a **PSR-14** event dispatcher.

Check [satellite-app](https://github.com/bemit/satellite-app) for a ready to use template.

```shell
composer require orbiter/satellite-launch
```

## Dev Notices

Commands to set up and run e.g. tests:

```bash
# on windows:
docker run -it --rm -v %cd%:/app composer install

docker run -it --rm -v %cd%:/var/www/html php:8.1-cli-alpine sh

docker run --rm -v %cd%:/var/www/html php:8.1-cli-alpine sh -c "cd /var/www/html && ./vendor/bin/phpunit --testdox -c phpunit-ci.xml --bootstrap vendor/autoload.php"

# on unix:
docker run -it --rm -v `pwd`:/app composer install

docker run -it --rm -v `pwd`:/var/www/html php:8.1-cli-alpine sh

docker run --rm -v `pwd`:/var/www/html php:8.1-cli-alpine sh -c "cd /var/www/html && ./vendor/bin/phpunit --testdox -c phpunit-ci.xml --bootstrap vendor/autoload.php"
```

## Versions

This project adheres to [semver](https://semver.org/), **until `1.0.0`** and beginning with `0.1.0`: all `0.x.0` releases are like MAJOR releases and all `0.0.x` like MINOR or PATCH, modules below `0.1.0` should be considered experimental.

## License

This project is free software distributed under the [**MIT LICENSE**](LICENSE).

### Contributors

By committing your code to the code repository you agree to release the code under the MIT License attached to the repository.

***

Maintained by [Michael Becker](https://i-am-digital.eu)
