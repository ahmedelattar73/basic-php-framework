<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitafd048bfe420dd65cd635ecbe8c9cb51
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

        spl_autoload_register(array('ComposerAutoloaderInitafd048bfe420dd65cd635ecbe8c9cb51', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitafd048bfe420dd65cd635ecbe8c9cb51', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitafd048bfe420dd65cd635ecbe8c9cb51::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}