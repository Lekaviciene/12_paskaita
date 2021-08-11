<?php
class Keturkampis {
    public  $krastineA;
    public  $krastineB;





    function __construct($a,$b){
        $this -> KrastineA = $a;
        $this -> KrastineB = $b;
        $this -> perimetras();
        $this -> plotas();
        $this -> istrizaine();
    }



    function perimetras (){
    $perimetras = (($this -> KrastineA + $this -> KrastineB)*2);
    echo "Keturkampio perimetras". " " . $perimetras. "<br>";
   
    }
    function plotas (){
    $plotas = ((($this -> KrastineA + $this -> KrastineB)*2)*2);
    echo "Keturkampio plotas". " " . $plotas. "<br>";   

    }
    function istrizaine (){
    $istrizaine = (sqrt(($this -> KrastineA)*2)+(($this -> KrastineB)*2));
    echo "Keturkampio istrizaine". " " . $istrizaine. "<br>";  
    }



}



$perimetras = new Keturkampis (5,6);








?>