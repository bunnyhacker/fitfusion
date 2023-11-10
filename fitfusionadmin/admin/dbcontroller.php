<?php 
class dbcontroller
{
    protected $server  = "localhost";
    protected $user  = "root";
    protected $pass  = "";
    protected $dbname  = "fitfusion";

    public $conn ;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->server,$this->user,$this->pass,$this->dbname);
        if($this->conn->connect_error)
        {
            echo("cannection error".$this->conn->connect_error);
        }
       

    }
    

}
?>