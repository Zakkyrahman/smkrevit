<?php 


     function belajar(){
          echo "Saya belajar";
     }

     function luaspersegi(){
          $p = 5;
          $l = 4;
          $luas = $p * $l;

          echo $luas;
     }

     function luaspersegipanjang($p = 7, $l = 4){
          $luas = $p * $l;

          return $luas;
     }

     function output(){
          return 'belajar php';
     }

     echo luaspersegi();

     echo '<br>'.output();

     echo '<br>'.luaspersegipanjang(100,5);
?>