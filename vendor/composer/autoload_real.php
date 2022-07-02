<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit323a8fca5bdbd7179a9aeb4c38e50929
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

        spl_autoload_register(array('ComposerAutoloaderInit323a8fca5bdbd7179a9aeb4c38e50929', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit323a8fca5bdbd7179a9aeb4c38e50929', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit323a8fca5bdbd7179a9aeb4c38e50929::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
