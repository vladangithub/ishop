<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcde517f2fb9dc794afc70f8b44365679
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

        spl_autoload_register(array('ComposerAutoloaderInitcde517f2fb9dc794afc70f8b44365679', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcde517f2fb9dc794afc70f8b44365679', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcde517f2fb9dc794afc70f8b44365679::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
