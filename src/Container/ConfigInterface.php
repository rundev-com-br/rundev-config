<?php


namespace RunDev\Config\Container;


use IteratorAggregate;

interface ConfigInterface
{
    /**
     * @return IteratorAggregate Returns configuration to merge with application configuration
     *
     */
    public function getConfig(): IteratorAggregate;
}