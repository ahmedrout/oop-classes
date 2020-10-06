<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4963022bb9a7544154799dd184b7ab2b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\TestController' => __DIR__ . '/../..' . '/app/Controllers/TestController.php',
        'App\\Models\\Test' => __DIR__ . '/../..' . '/app/Models/Test.php',
        'Core\\Db' => __DIR__ . '/../..' . '/core/Db.php',
        'Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Core\\Session' => __DIR__ . '/../..' . '/core/Session.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4963022bb9a7544154799dd184b7ab2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4963022bb9a7544154799dd184b7ab2b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4963022bb9a7544154799dd184b7ab2b::$classMap;

        }, null, ClassLoader::class);
    }
}
