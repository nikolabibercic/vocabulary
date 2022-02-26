<?php
    class Connection {
        //Parametri za konekciju na localhost
        public $host = 'localhost';
        public $dbname = 'vocabulary';
        public $username = 'root';
        public $password = '';

        //Parametri za konekciju na Unlimited hosting
        //public $host = 'localhost';
        //public $dbname = 'spanskir_vocabulary';
        //public $username = 'spanskir_vocabulary';
        //public $password = 'vocabulary#Piksi#1987';

        public function connect(){
            try{
                return new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8",$this->username,$this->password);
            }
            catch(PDOException $e){
                echo 'Error'.$e->getMessage();
            }
        }
    }
?>