<?php
    require("koneksi.php");

    class Matakuliah extends Koneksi{

        public function __construct($server, $user, $pass, $db){
            parent::__construct($server, $user, $pass, $db);
        }
        
        public function GetMatakuliah(){
            $sql = "SELECT * FROM matakuliah";
            $res = $this->con->query($sql);

            return $res;
        }
        public function __destruct()
        {
            $this->con->close();
        }
    }
?>