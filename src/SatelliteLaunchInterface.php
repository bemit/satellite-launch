<?php declare(strict_types=1);

namespace Satellite\Launch;

use Psr\EventDispatcher\EventDispatcherInterface;

interface SatelliteLaunchInterface {
    public function ignition(): SatelliteAppInterface;
}
