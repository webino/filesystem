<?php

namespace Webino;

use Gaufrette\Adapter\InMemory as InMemoryAdapter;

/**
 * Class MemoryFilesystem
 * @package filesystem
 */
class MemoryFilesystem extends AbstractFilesystem implements InstanceFactoryMethodInterface
{
    /**
     * @param CreateInstanceEventInterface $event
     * @return FilesystemInterface
     */
    public static function create(CreateInstanceEventInterface $event): FilesystemInterface
    {
        $adapter = new InMemoryAdapter(...$event->getParameters());
        return new static($adapter);
    }
}
