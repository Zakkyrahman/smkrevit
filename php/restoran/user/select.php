<?php 
    $jumlahdata = $db->rowCOUNT("SELECT iduser FROM tbluser");
    $banyak = 4;

    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }
    else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbluser ORDER BY user ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);

    $no = 1+$mulai;
?>

<div class="float-left mr-4 row p-2">
    <a class="btn btn-primary col-2" href="?f=user&m=insert" role="button">TAMBAH DATA</a>
    <h3 class="col">User</h3>
</div>

<table class="table table-bordered w-70 mt-4">
    <thead>
        <th>No</th>
        <th>User</th>
        <th>Email</th>
        <th>Level</th>
        <th>Delete</th>
        <th>Status</th>
    </thead>

    <tbody>
        
        <?php foreach ($row as $r): ?>
            <?php 
                if ($r['aktif']==1) {
                    $status = "AKTIF";
                }
                else {
                    $status ="BANNED";
                }
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r['user'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['level'] ?></td>
                <td><a href="?f=user&m=delete&id=<?php echo $r['iduser'] ?>">Delete</a></td>
                <td><a href="?f=user&m=update&id=<?php echo $r['iduser'] ?>"><?php echo $status; ?></a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php 
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=user&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>