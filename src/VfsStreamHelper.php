<?php

namespace TomaszNassalski\VfsStreamHelper;

use org\bovigo\vfs\vfsStream;

class VfsStreamHelper
{
    public static function setUpDir(array $directory)
    {
        // setup and cache the virtual file system
        $dir = vfsStream::setup('root', 444, $directory);
        return $dir->url() . '/';
    }
}
