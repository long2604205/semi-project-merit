<?php

namespace Container8kcxrgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ClientController' shared autowired service.
     *
     * @return \App\Controller\ClientController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ClientController.php';

        $container->services['App\\Controller\\ClientController'] = $instance = new \App\Controller\ClientController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\ActorRepository'] ?? $container->load('getActorRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ClientController', $container));

        return $instance;
    }
}
