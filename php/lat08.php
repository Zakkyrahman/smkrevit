<?php 

// array dimensi

$nama = array("joni","tejo","sinta","heffina",100,2.5);

var_dump($nama);

echo "<br>";

echo $nama[5];

echo "<br>";

// for ($i-0; $i < 6; $i++){
//     //echo $i;
//     echo $nama[$i]."<br>";
// }

// foreach ($nama as $k ){
//     echo $k.'<br>';
// }

// array asosiatif

// $nama = array(
//     "joni"  => "Surabaya",
//     "sinta" => "Jakarta",
//     "nela"  => "Jombang",
//     "nina"  => "Malang"
// );

$nama["joni"]="Surabaya";
$nama["sinta"]="Jakarta";
$nama["nela"]="Jombang";
$nama["nina"]="Malang";
$nama["dinda"]="Bandung";

var_dump($nama);

echo "<br>";

// echo $nama['budi'];

foreach ($nama as $k => $v){
    echo $k."=>".$v;
    echo "<br>";
}





?>