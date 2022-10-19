<?php declare(strict_types=1);

namespace Satellite\Launch;

use Psr\EventDispatcher\EventDispatcherInterface;

class SatelliteLaunch {
    protected EventDispatcherInterface $dispatcher;
    protected SatelliteAppInterface $app;

    public function __construct(
        EventDispatcherInterface $dispatcher,
        SatelliteAppInterface    $app,
    ) {
        $this->dispatcher = $dispatcher;
        $this->app = $app;
    }

    public function ignition(): SatelliteAppInterface {
        return $this->dispatcher->dispatch($this->app);
    }
}
