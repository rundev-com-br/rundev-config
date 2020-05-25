<?php


namespace RunDev\Config\Container;


/**
 * Interface ConfigInterface
 * @package RunDev\Config\Container
 */
interface ConfigInterface
{
    public function addConfig(string $key, callable $config): void;
    public function getConfig(): array;
}