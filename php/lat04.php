<?php 
    //OPERATOR MATEMATIKA

    $a = 9;
    $b = 6;

    $c = $a + $b;
        echo $c.'<br>';
    
    $c = $a - $b;
        echo $c .'<br>';

    $c = $a * $b;
        echo $c .'<br>';

    $c = $a / $b;
        echo round($c) .'<br>';

    $c = $a % $b;
        echo $c.'<br>';


    //OPERATOR LOGIKA

    $c = $a < $b;
        echo $c . '<br>';

    $c = $a > $b;
        echo $c.'<br>';

    $c = $a == $b;
        echo $c.'<br>';

    $c = $a != $b;
        echo $c.'<br>';


    //INCREMENT

    $a++;
        echo $a.'<br>';

    //OPERATOR STRING

    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata.$kota;
    $hasil.='Kota pahlawan';

        echo $hasil;


?>