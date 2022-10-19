<?php declare(strict_types=1);

namespace Satellite\Launch;

interface SatelliteAppInterface {
    public function getInfo(): SatelliteAppInfoInterface;

    public function isCLI(): bool;
}
