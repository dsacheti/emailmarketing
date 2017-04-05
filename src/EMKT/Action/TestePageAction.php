<?php

namespace EMKT\Action;

use Doctrine\ORM\EntityManager;
use EMKT\Entity\Cliente;
use EMKT\Entity\Endereco;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Twig\TwigRenderer;

class TestePageAction implements ServerMiddlewareInterface
{


    private $template;
    /**
     * @var EntityManager
     */
    private $manager;

    public function __construct(EntityManager $manager, Template\TemplateRendererInterface $template = null)
    {

        $this->template = $template;
        $this->manager = $manager;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $cli = new Cliente();
        $cli->setNome('Jusandro Baptista');
        $cli->setEmail('jusatista@hotmail.com');
        $cli->setCpf('00027311100');

        $end1 = new Endereco();
        $end1->setLogradouro('Alameda dos Anjos,2994')->setCidade('Aporenciandia')->setCep('029944-776')->setEstado('LL')->setCliente($cli);
        $this->manager->persist($end1);
        $end2 = new Endereco();
        $end2->setLogradouro('Rua do Ferro,5954')->setCidade('Minas Grandes')->setCep('9876-776')->setEstado('PA')->setCliente($cli);
        $this->manager->persist($end2);
        $cli->addEndereco($end1);
        $cli->addEndereco($end2);
        $this->manager->persist($cli);
        $this->manager->flush();

        $clientes = $this->manager->getRepository(Cliente::class)->findAll();

        return new HtmlResponse($this->template->render('app::teste', [
            'dados' => 'Frase de teste',
            'clientes' => $clientes
        ]));
    }
}
