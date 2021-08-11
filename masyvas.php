<?php  

class Klientai {

    public $vardas;

    public $pavarde;

    public $asmensKodas;

    public $prisijungimoData;

    public $adresas;

    public $elPastas;

    function __construct($a,$b,$c,$d,$e,$f){

            $this -> vardas = $a;

            $this -> pavarde = $b;

            $this -> asmensKodas = $c;

            $this -> prisijungimoData = $d;

            $this -> adresas = $e;

            $this -> elpastas = $f;

    }

    



}





$klientai = array();

for ($i = 0; $i < 200; $i++) {

       array_push($klientai, new Klientai("vardas".($i+1), "pavarde".($i+1), rand(100,200), date("l jS \of F Y h:i:s A"), "adresas".($i+1), "vardas".($i+1)."pavarde".($i+1)."@gmail.com"));

}



echo "<table>";

    foreach ($klientai as $eilute) {

        // Isvedineja eilutes

        echo "<tr>";

        foreach ($eilute as $stulpelis) {

            echo "<td>";

            echo $stulpelis;

            echo "</td>";

        }

        echo "</tr>";

    }



    echo "</table>";



?>