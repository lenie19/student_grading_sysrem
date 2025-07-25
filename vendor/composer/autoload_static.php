<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1193d2405e44bb255a90ace26c1033a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Antipuesto\\Gs\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Antipuesto\\Gs\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1193d2405e44bb255a90ace26c1033a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1193d2405e44bb255a90ace26c1033a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1193d2405e44bb255a90ace26c1033a::$classMap;

        }, null, ClassLoader::class);
    }
}
