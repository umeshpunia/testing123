<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2a8ac6e58b0bbff27a9ec0f8a5b6fb41
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit2a8ac6e58b0bbff27a9ec0f8a5b6fb41', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2a8ac6e58b0bbff27a9ec0f8a5b6fb41', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2a8ac6e58b0bbff27a9ec0f8a5b6fb41::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
