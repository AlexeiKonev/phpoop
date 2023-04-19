<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c11d8572fd4c8c2d5f075a7aabeeb5e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c11d8572fd4c8c2d5f075a7aabeeb5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c11d8572fd4c8c2d5f075a7aabeeb5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c11d8572fd4c8c2d5f075a7aabeeb5e::$classMap;

        }, null, ClassLoader::class);
    }
}
