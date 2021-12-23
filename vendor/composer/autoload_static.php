<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd45ec4f6f805d3444cab6afb867ffde3
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vitkuz573\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vitkuz573\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'vitkuz573\\GetFreeId' => __DIR__ . '/../..' . '/src/GetFreeId.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd45ec4f6f805d3444cab6afb867ffde3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd45ec4f6f805d3444cab6afb867ffde3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd45ec4f6f805d3444cab6afb867ffde3::$classMap;

        }, null, ClassLoader::class);
    }
}
