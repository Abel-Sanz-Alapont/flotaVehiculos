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

            $arrayCoches[] = $coche;
        }
        return $arrayCoches;
    }
    //CRUD COCHES
    public function agregarCoches(Coche $coche)
    {

        $consultaSQL = 'INSERT INTO flotaVehiculos (tipoVehiculo, marca, modelo, matricula, precioDia, numeroPuertas, tipoCombustible) VALUES (:tipoVehiculo, :marca, :modelo, :matricula, :precioDia, :numeroPuertas, :tipoCombustible)';

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

    public function editarCoches($id, $marca, $modelo, $matricula, $precioDia, $numeroPuertas, $tipoCombustible) 
    {
        $consultaSQL = 'UPDATE flotaVehiculos SET marca=:marca, modelo=:modelo, matricula=:matricula, precioDia=:precioDia, numeroPuertas=:numeroPuertas, tipoCombustible=:tipoCombustible WHERE id=:id'; //consulta SQL
        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':marca', $marca, PDO::PARAM_STR);
        $stmt->bindValue(':modelo', $modelo, PDO::PARAM_STR);
        $stmt->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindValue(':precioDia', $precioDia, PDO::PARAM_INT);
        $stmt->bindValue(':numeroPuertas', $numeroPuertas, PDO::PARAM_INT);
        $stmt->bindValue(':tipoCombustible', $tipoCombustible, PDO::PARAM_STR);
        
        return $stmt->execute();
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
