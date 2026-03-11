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

}