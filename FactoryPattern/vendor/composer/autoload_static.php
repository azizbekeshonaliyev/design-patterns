<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit284ac3e9ffac8a01b5e6a812cdef0a98
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FactoryPattern\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FactoryPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit284ac3e9ffac8a01b5e6a812cdef0a98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit284ac3e9ffac8a01b5e6a812cdef0a98::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
