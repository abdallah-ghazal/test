<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite84ba1ed992b3de670001ef9a70642e4
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite84ba1ed992b3de670001ef9a70642e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite84ba1ed992b3de670001ef9a70642e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite84ba1ed992b3de670001ef9a70642e4::$classMap;

        }, null, ClassLoader::class);
    }
}
