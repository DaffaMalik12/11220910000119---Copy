<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cari Member</h2>
    <form action="cari.php" method="get">
        <input type="text" name="Username" placeholder="Ketikan username" />
        <input type="submit" value="cari">
    </form><br>

    <h2>Hasil pencarian</h2>
    <?php
    include "../koneksi.php";
    if(isset($_GET['username'])){
    $username = $_GET['username'];
    $hasil = mysqli_query($conn, "SELECT * FROM register where username like '$username'");
    }
    ?>
    <table width="1200" border="1">
        <tr>
            <td width="31">id</td>
            <td width="85">nama depan</td>
            <td width="99">nama belakang</td>
            <td width="82">username</td>
            <td width="87">password</td>
            <td width="41">usia</td>
            <td width="41">jk</td>
            <td width="128">ttl</td>
            <td width="182">email</td>
            <td width="152">notel</td>
            <td colspan="2">aksi</td>
        </tr>
    </table>
    <?php
    if(isset($_GET['username'])):
    while($buff = mysqli_fetch_assoc($hasil)):
        ?>
    <table width="1200" border="1">
        <tr>
            <td width="31"><?php echo $buff["id"];?></td>
            <td width="85"><?php echo $buff['namadep'];?></td>
            <td width="99"><?php echo $buff["namabel"];?></td>
            <td width="82"><?php echo $buff["username"];?></td>
            <td width="87"><?php echo $buff["password"];?></td>
            <td width="41"><?php echo $buff["usia"];?></td>
            <td width="41"><?php echo $buff["jk"];?></td>
            <td width="128"><?php echo $buff["ttl"];?></td>
            <td width="182"><?php echo $buff["email"];?></td>
            <td width="152"><?php echo $buff["notel"];?></td>
            <td width="100"><a href="edit.php?id=<?php echo $buff["id"];?>">edit</a></td>
            <td width="96"><a href="hapus.php?id=<?php echo $buff["id"];?>">hapus</a></td>
        </tr>
    </table>
    <?php
    endwhile;
endif;
    ?>
    <br>
    <a href="../index.php"><---- Kembali ke index</a>
</body>
</html>