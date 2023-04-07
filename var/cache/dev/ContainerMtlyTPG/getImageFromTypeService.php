<?php

namespace ContainerMtlyTPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageFromTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ImageFromType' shared autowired service.
     *
     * @return \App\Form\ImageFromType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ImageFromType.php';

        return $container->privates['App\\Form\\ImageFromType'] = new \App\Form\ImageFromType();
    }
}
