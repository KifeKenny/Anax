<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8cf3cf3667af1b0009f16f3ff832967
{
    public static $files = array (
        '6b9cbd293adb7d895e163aebb2790539' => __DIR__ . '/..' . '/anax/common/src/functions.php',
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        'dfc9e5dd545737efbb98020db79bfa08' => __DIR__ . '/..' . '/mos/cimage/defines.php',
        '507fe79d3e285fab95fad400b8d42245' => __DIR__ . '/..' . '/mos/cimage/functions.php',
        'caf2ec0a102cfabe343e0b096c06797c' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'A' => 
        array (
            'Anax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Anax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/anax/request/src',
            2 => __DIR__ . '/..' . '/anax/common/src',
            3 => __DIR__ . '/..' . '/anax/url/src',
            4 => __DIR__ . '/..' . '/anax/configure/src',
            5 => __DIR__ . '/..' . '/anax/di/src',
            6 => __DIR__ . '/..' . '/anax/router/src',
            7 => __DIR__ . '/..' . '/anax/response/src',
            8 => __DIR__ . '/..' . '/anax/session/src',
            9 => __DIR__ . '/..' . '/anax/textfilter/src',
            10 => __DIR__ . '/..' . '/anax/view/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-smartypants',
                1 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
        'H' => 
        array (
            'Highlight\\' => 
            array (
                0 => __DIR__ . '/..' . '/scrivo/highlight.php',
            ),
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'CAsciiArt' => __DIR__ . '/..' . '/mos/cimage/CAsciiArt.php',
        'CCache' => __DIR__ . '/..' . '/mos/cimage/CCache.php',
        'CFastTrackCache' => __DIR__ . '/..' . '/mos/cimage/CFastTrackCache.php',
        'CHttpGet' => __DIR__ . '/..' . '/mos/cimage/CHttpGet.php',
        'CImage' => __DIR__ . '/..' . '/mos/cimage/CImage.php',
        'CRemoteImage' => __DIR__ . '/..' . '/mos/cimage/CRemoteImage.php',
        'CWhitelist' => __DIR__ . '/..' . '/mos/cimage/CWhitelist.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8cf3cf3667af1b0009f16f3ff832967::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8cf3cf3667af1b0009f16f3ff832967::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf8cf3cf3667af1b0009f16f3ff832967::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf8cf3cf3667af1b0009f16f3ff832967::$classMap;

        }, null, ClassLoader::class);
    }
}
