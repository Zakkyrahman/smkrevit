<nav>
    <ul>
        <li><a href="?menu=kontak">kontak</li>
        <li><a href="?menu=sejarah">sejarah</li>
        <li><a href="?menu=jurusan">jurusan</li>
    </ul>
</nav>

<?php

// if(isset($_POST['kirim'])){

//     $email = $_POST['email'];
//     $password= $_POST['password'];
   
//     echo $email;
//     echo '<br>';
//     echo $password;
//    }

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        require_once $menu.'.php';
    }

?> 