<?php declare(strict_types=1);

namespace Satellite\Launch;

class SatelliteApp implements SatelliteAppInterface {
    protected SatelliteAppInfoInterface $info;
    protected bool $cli;

    public function __construct(
        ?SatelliteAppInfoInterface $info = null,
    ) {
        $this->cli = PHP_SAPI === 'cli';
        $this->info = $info ?? new SatelliteAppInfo();
    }

    public function getInfo(): SatelliteAppInfoInterface {
        return $this->info;
    }

    public function isCLI(): bool {
        return $this->cli;
    }
}
