<?php declare(strict_types=1);

namespace Satellite\Launch;

class SatelliteModule {
    public function __invoke(): array {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    protected function getDependencies(): array {
        return [
            'services' => [
                \Satellite\Launch\SatelliteLaunch::class => \Satellite\Launch\SatelliteLaunch::class,
                \Satellite\Launch\SatelliteAppInfoInterface::class => \Satellite\Launch\SatelliteAppInfo::class,
                \Satellite\Launch\SatelliteAppInterface::class => \Satellite\Launch\SatelliteApp::class,
            ],
        ];
    }
}
