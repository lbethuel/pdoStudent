<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69bc225dfffc9b8db1c21824fea60a82
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit69bc225dfffc9b8db1c21824fea60a82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69bc225dfffc9b8db1c21824fea60a82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69bc225dfffc9b8db1c21824fea60a82::$classMap;

        }, null, ClassLoader::class);
    }
}