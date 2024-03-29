<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ab2fea467e2e2e4d23d4771a9559e6d
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ab2fea467e2e2e4d23d4771a9559e6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ab2fea467e2e2e4d23d4771a9559e6d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
