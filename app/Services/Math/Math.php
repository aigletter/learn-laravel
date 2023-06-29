<?php

namespace App\Services\Math;

use Psr\Log\LoggerInterface;

class Math implements MathInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function sum($a, $b)
    {
        $result = $a + $b;

        $this->logger->debug('Result for ' . $a . ' + ' . $b . ' = ' . $result);

        return $result;
    }
}
