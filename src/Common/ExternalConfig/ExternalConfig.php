<?php

namespace Toanna\SAFLaravelToolkit\Common\ExternalConfig;

use RemoteConfig\Client\RemoteConfig;

class ExternalConfig
{
    /**
     * @param string|array $services
     * @return array
     */
    public static function getConfig($services)
    {
        return RemoteConfig::get($services);
    }
}
