<?php

namespace Container8kcxrgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6lQN65VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6lQN65V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6lQN65V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actor' => ['privates', '.errored..service_locator.6lQN65V.App\\Entity\\Actor', NULL, 'Cannot autowire service ".service_locator.6lQN65V": it references class "App\\Entity\\Actor" but no such service exists.'],
        ], [
            'actor' => 'App\\Entity\\Actor',
        ]);
    }
}
