<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87697021f6f3c3d2e9da026bb376c24e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87697021f6f3c3d2e9da026bb376c24e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87697021f6f3c3d2e9da026bb376c24e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
