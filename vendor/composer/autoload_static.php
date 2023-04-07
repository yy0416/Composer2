<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4589de739db46a8e87ea98f3eef66275
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4589de739db46a8e87ea98f3eef66275::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4589de739db46a8e87ea98f3eef66275::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4589de739db46a8e87ea98f3eef66275::$classMap;

        }, null, ClassLoader::class);
    }
}
