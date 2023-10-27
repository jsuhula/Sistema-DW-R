<?php
namespace dao;

use includes\MySQLConnector;
class NominaDAO
{
    private $connection;

    function __construct()
    {
        $this->connection = MySQLConnector::getInstance();
        $this->connection = $this->connection->getConnection();
    }

    public function calcularNominaSalario(string $fecha)
    {
        $query = "call calcularNominaSalario(?)";
        $prpstmt = $this->connection->prepare($query);
        $prpstmt->bindParam(1, $fecha);
        $prpstmt->execute();
        return $prpstmt;
    }

    public function guardarNominaSalario(string $fecha)
    {
        $query = "call guardarNominaSalario(?)";
        $prpstmt = $this->connection->prepare($query);
        $prpstmt->bindParam(1, $fecha);
        $prpstmt->execute();
        return $prpstmt;
    }
}
?>
