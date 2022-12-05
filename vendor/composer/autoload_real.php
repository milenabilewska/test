<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitedc3bb789391dc11ead6ee4d328c3132
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

        spl_autoload_register(array('ComposerAutoloaderInitedc3bb789391dc11ead6ee4d328c3132', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitedc3bb789391dc11ead6ee4d328c3132', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitedc3bb789391dc11ead6ee4d328c3132::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
