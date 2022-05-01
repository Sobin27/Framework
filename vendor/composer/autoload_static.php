<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe6554a68ed1e4c446dd787bd96c640e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sobre\\Framework\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sobre\\Framework\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe6554a68ed1e4c446dd787bd96c640e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe6554a68ed1e4c446dd787bd96c640e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe6554a68ed1e4c446dd787bd96c640e::$classMap;

        }, null, ClassLoader::class);
    }
}
