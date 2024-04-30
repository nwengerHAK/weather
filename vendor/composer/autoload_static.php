<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e960c210edc605ec5ac9468693395b2
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nwengerhak\\Weather\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nwengerhak\\Weather\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e960c210edc605ec5ac9468693395b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e960c210edc605ec5ac9468693395b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e960c210edc605ec5ac9468693395b2::$classMap;

        }, null, ClassLoader::class);
    }
}