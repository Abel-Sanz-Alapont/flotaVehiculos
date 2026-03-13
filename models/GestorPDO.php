<?php

class GestorPDO extends Connection
{

    public function __construct()
    {
        return parent::__construct();
    }

    public function listarCoche()
    {

        $consulta = "SELECT * FROM flotaVehiculos";
        $rtdo = $this->getConn()->query($consulta);
        $arrayCoches = [];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)) {
            $Cohe = new Vehiculo($value['matricula'], $value['modelo'], $value['numeroPuertas'], $value['tipoCombustible'], $value['tipoVehiculo'], $value['id']);
            $arrayVehiculos[] = $Cohe;
        }
        return $arrayCoches;
    }
    /*public function listarMoto()
    {

        $consulta = "SELECT * FROM flotaVehiculos";
        $rtdo = $this->getConn()->query($consulta);
        $arrayMotocicletas = [];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)) {
            $motocileta = new Vehiculo($value['matricula'], $value['modelo'], $value['incluyeCasco'], $value['cilindrada'], $value['tipoVehiculo'], $value['id']);
            $arrayVehiculos[] = $motocileta;
        }
        return $arrayMotocicletas;
    }*/
}
