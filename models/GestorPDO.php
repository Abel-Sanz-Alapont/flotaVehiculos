<?php

class GestorPDO extends Connection
{

    public function __construct()
    {
        return parent::__construct();
    }

    public function listarVehiculos()//Para listar tanto Coches como Motocicletas
    {

        $consulta = "SELECT * FROM flotaVehiculos";
        $rtdo = $this->getConn()->query($consulta);
        $arrayVehiculos = [];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)) {
            if ($value['tipoVehiculo'] == 'Coche') {
                $Vehiculo = new Coche(
                    $value['id'],
                    $value['marca'],
                    $value['modelo'],
                    $value['matricula'],
                    $value['precioDia'],
                    $value['numeroPuertas'],
                    $value['tipoCombustible']
                );
            } elseif ($value['tipoVehiculo'] == 'Motocicleta') {
                $Vehiculo = new Motocicleta(
                    $value['id'],
                    $value['marca'],
                    $value['modelo'],
                    $value['matricula'],
                    $value['precioDia'],
                    $value['cilindrada'],
                    $value['incluyeCasco']
                );
            }
            $arrayVehiculos[] = $Vehiculo;
        }
        return $arrayVehiculos;
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

    public function eliminar($id)
    {
        $consultaSQL = 'DELETE FROM flotaVehiculos WHERE id=:id';
        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
    public function agregarMotocicletas(Motocicleta $moto)
    {

        $consultaSQL = 'INSERT INTO flotaVehiculos (tipoVehiculo, marca, modelo, matricula, precioDia, incluyeCasco, cilindrada) VALUES (:tipoVehiculo, :marca, :modelo, :matricula, :precioDia, :incluyeCasco, :cilindrada)';

        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':tipoVehiculo', 'Coche');
        $stmt->bindValue(':marca', $moto->getMarca());
        $stmt->bindValue(':modelo', $moto->getModelo());
        $stmt->bindValue(':matricula', $moto->getMatricula());
        $stmt->bindValue(':precioDia', $moto->getPrecioDia());
        $stmt->bindValue(':incluyeCasco', $moto->getIncluyeCasco());
        $stmt->bindValue(':cilindrada', $moto->getCilindrada());


        return $stmt->execute();
    }
        public function editarMotocicletas($id, $marca, $modelo, $matricula, $precioDia, $incluyeCasco, $cilindrada)
    {
        $consultaSQL = 'UPDATE flotaVehiculos SET marca=:marca, modelo=:modelo, matricula=:matricula, precioDia=:precioDia, incluyeCasco=:incluyeCasco, cilindrada=:cilindrada WHERE id=:id'; //consulta SQL
        $stmt = $this->conn->prepare($consultaSQL);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':marca', $marca, PDO::PARAM_STR);
        $stmt->bindValue(':modelo', $modelo, PDO::PARAM_STR);
        $stmt->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $stmt->bindValue(':precioDia', $precioDia, PDO::PARAM_INT);
        $stmt->bindValue(':cilindrada', $cilindrada, PDO::PARAM_INT);
        $stmt->bindValue(':incluyeCasco', $incluyeCasco, PDO::PARAM_BOOL);

        return $stmt->execute();
    }
}
