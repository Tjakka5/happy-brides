<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02886453d7be7c09360746a97434b5f1
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\routeone\\' => 15,
            'eftec\\bladeone\\' => 15,
            'eftec\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\routeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/routeone/lib',
        ),
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'eftec\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/daoone/lib',
            1 => __DIR__ . '/..' . '/eftec/pdoone/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02886453d7be7c09360746a97434b5f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02886453d7be7c09360746a97434b5f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
