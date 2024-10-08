<?php

class Php{
        public static function framework()
        {
                // echo "Laravel is a PHP framework<br>";
                echo static::getClass()."<br>";
                
        }       
        public static function getClass(){
                return __CLASS__;
        }
        // public function getFramework(){
        //         self::framework();
        // }

        

        
        // public function framework()
        // {
        //         echo "Base class constant and class namen ->".__CLASS__."<br>";
        //         echo "Base class Function and class name -> ".get_class($this)."<br>";
        //         return $this;
        // }

        // public function symphony()
        // {
        //         echo "Symphony is a PHP framework";
        //         return $this;
        // }



}




?>