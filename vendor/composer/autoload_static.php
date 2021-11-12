<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit201b821038be2488b77e455624620ac6
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Estep\\HelloComposer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Estep\\HelloComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit201b821038be2488b77e455624620ac6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit201b821038be2488b77e455624620ac6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit201b821038be2488b77e455624620ac6::$classMap;

        }, null, ClassLoader::class);
    }
}
