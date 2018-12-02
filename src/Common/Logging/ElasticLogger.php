<?php
namespace Toanna\SAFLaravelToolkit\Common\Logging;

use Elastica\Client;
use Monolog\Handler\ElasticSearchHandler;
use Monolog\Logger;

class ElasticLogger{

    /**
     * @param array $config
     * @return Logger
     *
     * Sample config in logging.php:
     *
     *      'stack' => [
                'driver' => 'stack',
                'channels' => ['daily', 'elastic'],
            ],

            'elastic' => [
                'driver' => 'custom',
                'via' => Toanna\SAFLaravelToolkit\Common\Logging\ElasticLogger::class,
                'host' => 'es.saf.com.vn',
                'port' => 80,
                'level' => 'debug'
            ],
     */
    public function __invoke(array $config)
    {
        $logger = new Logger('elastic');

        $client = new Client([
            'servers' => [
                [
                    'host' => isset($config['host']) ? $config['host'] : 'localhost',
                    'port' => isset($config['port']) ? $config['port'] : 9200,
                ],
            ],
        ]);

        $handler = new ElasticSearchHandler($client, [
            'index' => isset($config['index']) ? $config['index'] : 'elastictest',
            'type' => isset($config['type']) ? $config['type'] : 'record'
        ], isset($config['level']) ? $config['level'] : 'debug');

        $logger->pushHandler($handler);

        return $logger;
    }
}