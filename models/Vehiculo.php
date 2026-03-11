<?php

class Vehiculo{

    protected $id;
    protected $marca;
    protected $modelo;
    protected $matricula;
    protected $precioDia;

    public function __construct($id,$marca,$modelo,$matricula,$precioDia)
    {
        $this->id=$id;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->matricula=$matricula;
        $this->precioDia=$precioDia;
    }

    public function calcularAlquiler($dias){

        return $precioTotal=$this->precioDia*$dias;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;

    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

    }

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

    }

    /**
     * Get the value of precioDia
     */
    public function getPrecioDia()
    {
        return $this->precioDia;
    }

    /**
     * Set the value of precioDia
     */
    public function setPrecioDia($precioDia)
    {
        $this->precioDia = $precioDia;

    }
}