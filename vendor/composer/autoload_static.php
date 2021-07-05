<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0e53c8a331b072235a5ccb20821d79f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Liamp\\PhpFoundation\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Liamp\\PhpFoundation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0e53c8a331b072235a5ccb20821d79f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0e53c8a331b072235a5ccb20821d79f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0e53c8a331b072235a5ccb20821d79f::$classMap;

        }, null, ClassLoader::class);
    }
}