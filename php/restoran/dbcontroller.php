<?php 

    class DB{

    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database= "dbrestoran";
    private $koneksi;

    public function __construct(){
       $this->koneksi = $this->koneksiDB();
    }

    public function koneksiDB(){
         $koneksi = mysqli_connect($this->host,$this->user,$this->password,$this->database);
         return $koneksi;  
    }

    public function getAll($sql){
        $result = mysqli_query($this->koneksi,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
           $data[]=$row;
        }

        if (!empty($data)) {
            return $data;
        }        
           
    }

    public function getItem($sql){
        $result = mysqli_query($this->koneksi,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function rowCount($sql){
        $result = mysqli_query($this->koneksi,$sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function runSql($sql){
        $result = mysqli_query($this->koneksi,$sql);

    }

    public function pesan($text=""){
        echo $text;
    }

}

    // $db = new DB;
    // $db->pesan("berhasil");
    //$db->runSql("INSERT INTO tblkategori VALUES ('','Seblak')");
    // $db->runSql("DELETE FROM tblkategori WHERE idkategori=22");
    //$row = $db->getAll("SELECT * FROM tblkategori");
    // $row = $db->getItem("SELECT *FROM tblkategori WHERE idkategori=12");
    // $count = $db->rowCount("SELECT * FROM tblkategori");
    // echo $count;
    // echo $row['kategori'];
    // var_dump($row);
    // foreach ($row as $key) {
    //    echo $key ['kategori'].'<br>';
    // }
    // var_dump($db);





?>