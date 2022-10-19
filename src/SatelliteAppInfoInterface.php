<?php declare(strict_types=1);

namespace Satellite\Launch;

interface SatelliteAppInfoInterface {
    public function name(): ?string;

    public function version(): ?string;

    public function env(): ?string;

    public function get(string $key, mixed $default): mixed;
}
