<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita4271a8ec85245d35604f6fdb063b3af
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

        spl_autoload_register(array('ComposerAutoloaderInita4271a8ec85245d35604f6fdb063b3af', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita4271a8ec85245d35604f6fdb063b3af', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita4271a8ec85245d35604f6fdb063b3af::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
