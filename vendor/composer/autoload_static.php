<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd46d673100836249f55dc84bece78c35
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd46d673100836249f55dc84bece78c35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd46d673100836249f55dc84bece78c35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd46d673100836249f55dc84bece78c35::$classMap;

        }, null, ClassLoader::class);
    }
}
