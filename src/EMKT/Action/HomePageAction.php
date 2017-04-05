<?php

namespace EMKT\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Twig\TwigRenderer;

class HomePageAction implements ServerMiddlewareInterface
{
    private $router;

    private $template;

    public function __construct(Router\RouterInterface $router, Template\TemplateRendererInterface $template = null)
    {
        $this->router   = $router;
        $this->template = $template;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        if (! $this->template) {
            return new JsonResponse([
                'welcome' => 'Congratulations! You have installed the zend-expressive skeleton application.',
                'docsUrl' => 'https://docs.zendframework.com/zend-expressive/',
            ]);
        }

        $data = [];

        if ($this->router instanceof Router\AuraRouter) {
            $data['routerName'] = 'Aura.Router';
            $data['routerDocs'] = 'http://auraphp.com/packages/2.x/Router.html';
        }

        if  ($this->template instanceof TwigRenderer) {
            $data['templateName'] = 'Twig';
            $data['templateDocs'] = 'http://twig.sensiolabs.org/documentation';
        }

        return new HtmlResponse($this->template->render('app::home-page', $data));
    }
}
