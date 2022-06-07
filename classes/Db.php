<?php


class DB
{

    public $mysqli;

    function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'phpgrupp4')
            or die(mysqli_error($this->mysqli));
    }


    function query($sql, $type = null, $dataArr = [])
    {
        $stmt = $this->mysqli->prepare($sql);

        if (isset($type)) {
            $stmt->bind_param($type, ...$dataArr);
        }

        $stmt->execute();

        $result = $stmt->get_result();

        if (gettype($result) === "object") {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $returnObject = new stdClass();

            $returnObject->affected_rows = $stmt->affected_rows;

            return $returnObject;
        }
    }
}
