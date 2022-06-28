<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ec2864abd408a922c100a5a946729c4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ec2864abd408a922c100a5a946729c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ec2864abd408a922c100a5a946729c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ec2864abd408a922c100a5a946729c4::$classMap;

        }, null, ClassLoader::class);
    }
}