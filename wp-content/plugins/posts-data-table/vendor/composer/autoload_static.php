<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4
{
    public static $files = array (
        '6e0964b6067f0d2c3111d0b1361110f6' => __DIR__ . '/../..' . '/src/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Barn2\\Plugin\\Posts_Table_Search_Sort\\' => 37,
            'Barn2\\PTS_Lib\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Barn2\\Plugin\\Posts_Table_Search_Sort\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Barn2\\PTS_Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb3a4de6c50f8f4e22675e159c48cfe4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
