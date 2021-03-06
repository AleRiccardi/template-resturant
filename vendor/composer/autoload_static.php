<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25d8982fd9688af6d30c22dfb8afeedb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Templates\\' => 10,
        ),
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Templates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/templates',
        ),
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25d8982fd9688af6d30c22dfb8afeedb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25d8982fd9688af6d30c22dfb8afeedb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
