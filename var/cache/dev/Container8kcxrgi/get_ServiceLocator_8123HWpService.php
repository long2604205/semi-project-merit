<?php

namespace Container8kcxrgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8123HWpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8123HWp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8123HWp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actor' => ['privates', '.errored..service_locator.8123HWp.App\\Entity\\Actor', NULL, 'Cannot autowire service ".service_locator.8123HWp": it references class "App\\Entity\\Actor" but no such service exists.'],
            'movieRepository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
        ], [
            'actor' => 'App\\Entity\\Actor',
            'movieRepository' => 'App\\Repository\\MovieRepository',
        ]);
    }
}
