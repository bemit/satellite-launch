<?php declare(strict_types=1);

namespace Satellite\Launch;

interface SatelliteAppConfigInterface {
    public function get(string $key, mixed $default = null): mixed;
}
