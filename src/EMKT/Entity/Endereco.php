<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 30/03/2017
 * Time: 17:02
 */

namespace EMKT\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @ORM\Table(name="enderecos")
 */
class Endereco
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $logradouro;

    /**
     * @ORM\Column(type="string")
     */
    private $cidade;

    /**
     * @ORM\Column(type="string")
     */
    private $cep;

    /**
     * @ORM\Column(type="string")
     */
    private $estado;

    /** MANY-TO-ONE BIDIRECTIONAL, OWNING SIDE
     * @var Cliente
     * @ORM\ManyToOne(targetEntity="EMKT\Entity\Cliente", inversedBy="enderecos")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    protected $cliente;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

//    /**
//     * @param mixed $id
//     * @return Endereco
//     */
//    public function setId($id)
//    {
//        $this->id = $id;
//        return $this;
//    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     * @return Endereco
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     * @return Endereco
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     * @return Endereco
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     * @return Endereco
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }



}