<?php
class Person{
        public $Name="Sazzad Bhai";
        public $Age="52";
        public $Designation= "Technical Lead";

        private $Email = "sazzadbhai@gmail.com";
        protected $Password = "123456";


        function iteratorInner(){
                echo "Inside class";
                foreach ($this as $key => $value) {
                        echo"<pre>";
                        echo "$key => $value";
                        echo"</pre>";
                }
        }
        
        
}




?>