<?php

class Database
{
        public $driver;
        public $link;

        public function setDriver($driver)
        {
                $this->driver = $driver;
        }
        public function connect()
        {
                if ($this->driver == "mysql") {
                        # code...
                      
                        $mngmysql = new ManageMysql();
                        $mngmysql->setHost('examplehost');
                        $mngmysql->setDb('exampledb');
                        $mngmysql->setUsuer('rootUserName');
                        $mngmysql->setPass('Paassword_ucanudcnoaincoan83ue0q');
                        $this->link = $mngmysql->connect();
                }
        }
}
