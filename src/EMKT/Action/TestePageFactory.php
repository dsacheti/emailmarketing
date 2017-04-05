<?php

namespace EMKT\Action;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class TestePageFactory
{
    public function __invoke(ContainerInterface $container)
    {

        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new TestePageAction($container->get(EntityManager::class), $template);
        //a linha abaixo também pode ser usada da mesma maneira
        //return new HomePageAction($container->get('Doctrine\ORM\EntityManager'), $template);
    }
}
