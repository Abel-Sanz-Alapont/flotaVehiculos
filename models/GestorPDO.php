<?php

class GestorPDO extends Connection
{

    public function __construct()
    {
        return parent::__construct();
    }

    public function listarCoches()
    {

        $consulta = "SELECT * FROM flotaVehiculos";
        $rtdo = $this->getConn()->query($consulta);
        $arrayCoches = [];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)) {
            $coche = new Coche(
                $value['id'], 
                $value['marca'],
                $value['modelo'],
                $value['matricula'], 
                $value['precioDia'], 
                $value['numeroPuertas'], 
                $value['tipoCombustible']
            );

            $arrayVehiculos[] = $coche;
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
        public function agregarCoches(Coche $coche)
    {
        $consultaSQL = 'INSERT INTO flotaVehiculos (tipoVehiculo, marca, modelo, matricula, precioDia, numeroPuertas, tipoCombustible) VALUES (:tipoVehiculo, :marca, :modelo, :precioDia, :numeroPuertas, :tipoCombustible)';

        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':tipoVehiculo', 'Coche');
        $stmt->bindValue(':marca', $coche->getMarca());
        $stmt->bindValue(':modelo', $coche->getModelo());
        $stmt->bindValue(':matricula', $coche->getMatricula());
        $stmt->bindValue(':precioDia', $coche->getPrecioDia());
        $stmt->bindValue(':numeroPuertas', $coche->getNumeroPuertas());
        $stmt->bindValue(':tipoCombustible', $coche->getTipoCombustible());

        
        return $stmt->execute();    
    }
}
