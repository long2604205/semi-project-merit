<?php

namespace Container8kcxrgi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DQmztWCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DQmztWC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DQmztWC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ActorController::addimage' => ['privates', '.service_locator.bDDYr2G', 'get_ServiceLocator_BDDYr2GService', true],
            'App\\Controller\\ActorController::addmovie' => ['privates', '.service_locator.8123HWp', 'get_ServiceLocator_8123HWpService', true],
            'App\\Controller\\ActorController::create' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ActorController::delete' => ['privates', '.service_locator.bDDYr2G', 'get_ServiceLocator_BDDYr2GService', true],
            'App\\Controller\\ActorController::detail' => ['privates', '.service_locator.6lQN65V', 'get_ServiceLocator_6lQN65VService', true],
            'App\\Controller\\ActorController::index' => ['privates', '.service_locator.sOHAWjM', 'get_ServiceLocator_SOHAWjMService', true],
            'App\\Controller\\ClientController::detail' => ['privates', '.service_locator.6lQN65V', 'get_ServiceLocator_6lQN65VService', true],
            'App\\Controller\\ClientController::findByClosestName' => ['privates', '.service_locator.o5rlq0m', 'get_ServiceLocator_O5rlq0mService', true],
            'App\\Controller\\ContactController::detail' => ['privates', '.service_locator.oSPAca_', 'get_ServiceLocator_OSPAcaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SignInController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::create' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ActorController:addimage' => ['privates', '.service_locator.bDDYr2G', 'get_ServiceLocator_BDDYr2GService', true],
            'App\\Controller\\ActorController:addmovie' => ['privates', '.service_locator.8123HWp', 'get_ServiceLocator_8123HWpService', true],
            'App\\Controller\\ActorController:create' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ActorController:delete' => ['privates', '.service_locator.bDDYr2G', 'get_ServiceLocator_BDDYr2GService', true],
            'App\\Controller\\ActorController:detail' => ['privates', '.service_locator.6lQN65V', 'get_ServiceLocator_6lQN65VService', true],
            'App\\Controller\\ActorController:index' => ['privates', '.service_locator.sOHAWjM', 'get_ServiceLocator_SOHAWjMService', true],
            'App\\Controller\\ClientController:detail' => ['privates', '.service_locator.6lQN65V', 'get_ServiceLocator_6lQN65VService', true],
            'App\\Controller\\ClientController:findByClosestName' => ['privates', '.service_locator.o5rlq0m', 'get_ServiceLocator_O5rlq0mService', true],
            'App\\Controller\\ContactController:detail' => ['privates', '.service_locator.oSPAca_', 'get_ServiceLocator_OSPAcaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SignInController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:create' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.Nhkyqt4', 'get_ServiceLocator_Nhkyqt4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ActorController::addimage' => '?',
            'App\\Controller\\ActorController::addmovie' => '?',
            'App\\Controller\\ActorController::create' => '?',
            'App\\Controller\\ActorController::delete' => '?',
            'App\\Controller\\ActorController::detail' => '?',
            'App\\Controller\\ActorController::index' => '?',
            'App\\Controller\\ClientController::detail' => '?',
            'App\\Controller\\ClientController::findByClosestName' => '?',
            'App\\Controller\\ContactController::detail' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SignInController::login' => '?',
            'App\\Controller\\UserController::create' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ActorController:addimage' => '?',
            'App\\Controller\\ActorController:addmovie' => '?',
            'App\\Controller\\ActorController:create' => '?',
            'App\\Controller\\ActorController:delete' => '?',
            'App\\Controller\\ActorController:detail' => '?',
            'App\\Controller\\ActorController:index' => '?',
            'App\\Controller\\ClientController:detail' => '?',
            'App\\Controller\\ClientController:findByClosestName' => '?',
            'App\\Controller\\ContactController:detail' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SignInController:login' => '?',
            'App\\Controller\\UserController:create' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
