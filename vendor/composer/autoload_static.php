<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd18bdc90a017fc678f5f2c54a59458e
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/util/App.php',
        'ComposerAutoloaderInitfd18bdc90a017fc678f5f2c54a59458e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitfd18bdc90a017fc678f5f2c54a59458e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Conntection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/util/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/util/Router.php',
        'Task' => __DIR__ . '/../..' . '/core/model/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfd18bdc90a017fc678f5f2c54a59458e::$classMap;

        }, null, ClassLoader::class);
    }
}
