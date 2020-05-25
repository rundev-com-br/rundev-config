<?php


namespace RunDev\Config\Module;

/**
 * Interface ProviderInterface
 * @package RunDev\Config\Module
 */
interface ProviderInterface
{
    public function __invoke(): array ;
}