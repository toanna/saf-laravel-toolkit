<?php

namespace Toanna\SAFLaravelToolkit\Common\CircuitBreaker;

use FrancescoMalatesta\LaravelCircuitBreaker\Manager\CircuitBreakerManager;

class CircuitBreaker
{
	private $circuitBreaker;

	public function __construct(CircuitBreakerManager $circuitBreaker)
    {
        $this->circuitBreaker = $circuitBreaker;
    }

    public function isAvailable(string $identifier): bool
    {
        return $this->circuitBreaker->isAvailable($identifier);
    }

    public function reportFailure(string $identifier) : void
    {
        $this->circuitBreaker->reportFailure($identifier);
    }

    public function reportSuccess(string $identifier) : void
    {
        $this->circuitBreaker->reportSuccess($identifier);
    }
}

