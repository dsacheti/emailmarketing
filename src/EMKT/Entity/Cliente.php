<?php

namespace EMKT\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientes")
 */
class Cliente
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\Column(type="string",length=100)
    */
    private $nome;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cpf;

    /**
     * One Cliente have Many Endereco
     * ONE-TO-MANY BIDIRECTIONAL, INVERSE SIDE
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="EMKT\Entity\Endereco",mappedBy="cliente")
     */
    protected $enderecos;

    public function __construct()
    {
        $this->enderecos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /*
     * @param mixed $id
     * @return Cliente
     */
//    public function setId($id)
//    {
//        $this->id = $id;
//        return $this;
//    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEnderecos()
    {
        return $this->enderecos;
    }

    public function putEnderecos($enderecos)
    {
        $this->enderecos->clear();
        foreach($enderecos as $t) {
            $this->enderecos->add($t);
        }
    }

    public function addEndereco($endereco)
    {
        $this->enderecos->add($endereco);
        return $this;
    }
}