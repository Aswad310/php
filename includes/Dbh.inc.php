<?php
class Dbh
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "*Aswad*123#";
        $this->dbname = "crud";
        $this->port = 3306;

        // create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die('mysqli connection error: ' . $conn->connect_error);
        }

        echo "Successfully Connected<hr>";

        return $conn;
    }
}
