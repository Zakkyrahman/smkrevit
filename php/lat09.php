<?php 

// $nama= array('dinda','sinta','sheila',100);

// var_dump($nama);
// echo '<br>';

// foreach($nama as $key){
//     echo $key.'<br>';
// }


$nama= array (
    "dinda" => "Jakarta",
    "sinta" => "Bandung",
    "sheila" => "Solo",

);

var_dump($nama);
echo '<br>';
foreach($nama as $a => $b){
    echo $a."-".$b;
    echo '<br>';
}

?>