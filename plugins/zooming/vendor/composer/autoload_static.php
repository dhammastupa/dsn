<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita622068869512c16edfefb7b1a331c21
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita622068869512c16edfefb7b1a331c21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita622068869512c16edfefb7b1a331c21::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
