<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04807e1a29b8a9f9174e712b9ba7116e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tire\\PhpTire\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tire\\PhpTire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit04807e1a29b8a9f9174e712b9ba7116e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04807e1a29b8a9f9174e712b9ba7116e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04807e1a29b8a9f9174e712b9ba7116e::$classMap;

        }, null, ClassLoader::class);
    }
}
