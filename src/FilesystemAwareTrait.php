<?php

namespace Webino;

/**
 * Trait FilesystemAwareTrait
 * @package filesystem
 */
trait FilesystemAwareTrait
{
    /**
     * @var FilesystemInterface
     */
    protected $filesystem;

    /**
     * @return FilesystemInterface
     */
    protected function getFilesystem(): FilesystemInterface
    {
        return $this->filesystem;
    }

    /**
     * @param FilesystemInterface $filesystem
     */
    protected function setFilesystem(FilesystemInterface $filesystem): void
    {
        $this->filesystem = $filesystem;
    }
}
