<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb0ad617a958d2db0bd92d3d38013bab
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb0ad617a958d2db0bd92d3d38013bab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb0ad617a958d2db0bd92d3d38013bab::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfb0ad617a958d2db0bd92d3d38013bab::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
