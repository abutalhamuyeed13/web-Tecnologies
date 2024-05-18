<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82aea7c5becc4b0abff7ff55d906e5ca
{
    public static $files = array (
        '9ad3b3d18667be34bb9a42f9baff51a1' => __DIR__ . '/../..' . '/app/helper/helpers.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInit82aea7c5becc4b0abff7ff55d906e5ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82aea7c5becc4b0abff7ff55d906e5ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82aea7c5becc4b0abff7ff55d906e5ca::$classMap;

        }, null, ClassLoader::class);
    }
}
