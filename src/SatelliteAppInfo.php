<?php declare(strict_types=1);

namespace Satellite\Launch;

class SatelliteAppInfo implements SatelliteAppInfoInterface {
    protected array $data;

    public function __construct(array $data = []) {
        $this->data = $data;
    }

    public function name(): ?string {
        return $this->data['name'] ?? null;
    }

    public function version(): ?string {
        return $this->data['version'] ?? null;
    }

    public function env(): ?string {
        return $this->data['env'] ?? null;
    }

    public function get(string $key, mixed $default): mixed {
        return $this->data[$key] ?? $default;
    }
}
