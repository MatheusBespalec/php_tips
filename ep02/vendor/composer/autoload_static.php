<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8c6c65a2043b2fbbdae37f2b5f4573e
{
    public static $files = array (
        '13198c9f0b3148963eee20bd0203c7b4' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8c6c65a2043b2fbbdae37f2b5f4573e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8c6c65a2043b2fbbdae37f2b5f4573e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8c6c65a2043b2fbbdae37f2b5f4573e::$classMap;

        }, null, ClassLoader::class);
    }
}
