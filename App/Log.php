<?php


namespace App;


use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class Log
    extends AbstractLogger implements LoggerInterface
{
    use LoggerTrait;
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * @inheritDoc
     */
    public function log($level, $message, array $context = array())
    {

    }
}