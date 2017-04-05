<?php

namespace EMKT\Infrastructure;


use EMKT\Service\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{

    public function create()
    {
        require __DIR__.'/config/doctrine.php';
    }
}