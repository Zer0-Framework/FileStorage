<?php

namespace Zer0\Brokers;

use PHPDaemon\Core\ClassFinder;
use Zer0\Config\Interfaces\ConfigInterface;

/**
 * Class FileStorage
 * @package Zer0\Brokers
 */
class FileStorage extends Base
{
    /**
     * @param ConfigInterface $config
     * @return object
     */
    public function instantiate(ConfigInterface $config)
    {
        $class = ClassFinder::find($config->type, $ns = ClassFinder::getNamespace(\Zer0\FileStorage\Base::class), '~');
        return new $class($config);
    }

    /**
     * @param string $name
     * @param bool $caching
     * @return \Zer0\FileStorage\Base
     */
    public function get(string $name = '', bool $caching = true): \Zer0\FileStorage\Base
    {
        return parent::get($name, $caching);
    }
}
