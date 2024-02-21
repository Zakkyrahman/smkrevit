<nav>
    <ul>
        <li><a href="?menu=isi">ISI</a></li>
        <li><a href="?menu=hapus">HAPUS</a></li>
        <li><a href="?menu=destroy">DESTROY</a></li>
    </ul>
</nav>

<?php 

    session_start();

    var_dump($_SESSION);

    echo '<br>';

    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        echo $menu;

        switch ($menu) {
            case 'isi':
                isisession();
                break;
            case 'hapus':
                unset($_SESSION['user']);
                break;
            case 'destroy':
                session_destroy();
                break;
            default:
                # code...
                break;
        }
    }

    
    

    function isisession(){
        $_SESSION['user'] = 'Zakky';
        $_SESSION['nama'] = 'Zakky Rahman';
        $_SESSION['alamat'] = 'Sidoarjo';
    }
?>