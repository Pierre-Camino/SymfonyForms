<?php

namespace Container614OmOq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EGCcJOeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EGCcJOe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EGCcJOe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccueilController::article' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\AccueilController::index' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\FormulaireController::index' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AccueilController:article' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\AccueilController:index' => ['privates', '.service_locator.ddtGBuI', 'get_ServiceLocator_DdtGBuIService', true],
            'App\\Controller\\FormulaireController:index' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AccueilController::article' => '?',
            'App\\Controller\\AccueilController::index' => '?',
            'App\\Controller\\FormulaireController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AccueilController:article' => '?',
            'App\\Controller\\AccueilController:index' => '?',
            'App\\Controller\\FormulaireController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
