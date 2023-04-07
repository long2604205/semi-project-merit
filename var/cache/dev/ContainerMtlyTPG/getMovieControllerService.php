<?php

namespace ContainerMtlyTPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMovieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MovieController' shared autowired service.
     *
     * @return \App\Controller\MovieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MovieController.php';

        $container->services['App\\Controller\\MovieController'] = $instance = new \App\Controller\MovieController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\MovieRepository'] ?? $container->load('getMovieRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\MovieController', $container));

        return $instance;
    }
}
