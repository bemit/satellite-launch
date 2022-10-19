<?php declare(strict_types=1);

namespace Satellite\Launch;

class SatelliteAppConfig implements SatelliteAppConfigInterface {
    protected array $data;

    public function __construct(array $data = []) {
        $this->data = $data;
    }

    public function get(string $key, mixed $default = null): mixed {
        return $this->data[$key] ?? $default;
    }
}
