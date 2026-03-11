<?php

class Coche extends Vehiculo
{

    protected $numeroPuertas;
    protected $tipoCombustible;

    public function __construct($id, $marca, $modelo, $matricula, $precioDia, $numeroPuertas, $tipoCombustible)
    {
        parent::__construct($id, $marca, $modelo, $matricula, $precioDia);

        $this->numeroPuertas = $numeroPuertas;
        $this->tipoCombustible = $tipoCombustible;
    }

    public function calcularAlquiler($dias)
    {

        $precioFinal = parent::calcularAlquiler($dias);

        if ($this->tipoCombustible == "electrico") {
            $precioFinal = $precioFinal * 1.05;
        }
        return $precioFinal;
    }
    /**
     * Get the value of numeroPuertas
     */
    public function getNumeroPuertas()
    {
        return $this->numeroPuertas;
    }

    /**
     * Set the value of numeroPuertas
     */
    public function setNumeroPuertas($numeroPuertas)
    {
        $this->numeroPuertas = $numeroPuertas;
    }

    /**
     * Get the value of tipoCombustible
     */
    public function getTipoCombustible()
    {
        return $this->tipoCombustible;
    }

    /**
     * Set the value of tipoCombustible
     */
    public function setTipoCombustible($tipoCombustible)
    {
        $this->tipoCombustible = $tipoCombustible;
    }
}
