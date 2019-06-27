<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/filesystem
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

use Tester\Assert;
use Tester\Environment;

Environment::setup();
chdir(__DIR__);


$container = new InstanceContainer;


$files = [basename(__FILE__) => file_get_contents(__FILE__)];

/** @var FilesystemInterface $memoryFiles */
$memoryFiles = $container->make(MemoryFilesystem::class, $files);

$indexFile = $memoryFiles->get(basename(__FILE__));


Assert::same(file_get_contents(__FILE__), $indexFile->getContent());
