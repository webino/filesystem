<?php

namespace Webino;

use Gaufrette\Adapter\Local as LocalAdapter;

/**
 * Class LocalFilesystem
 * @package filesystem
 */
class LocalFilesystem extends AbstractFilesystem implements InstanceFactoryMethodInterface
{
    /**
     * @param CreateInstanceEventInterface $event
     * @return FilesystemInterface
     */
    public static function create(CreateInstanceEventInterface $event): FilesystemInterface
    {
        $adapter = new LocalAdapter(realpath('.'));
        return new static($adapter);
    }
}
