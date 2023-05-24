<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Member</h2><br>

    <?php
    include "koneksi.php";
    $select = "SELECT * FROM register";
    $hasil = mysqli_query($conn, $select);
    ?>


    <div style="overflow: auto;">
        <table border="1">
            <tr>
                <td width="31">id</td>
                <td width="85">nama depan</td>
                <td width="99">nama belakang</td>
                <td width="82">username</td>
                <td width="87">password</td>
                <td width="41">usia</td>
                <td width="41">jk</td>
                <td width="80">ttl</td>
                <td width="182">email</td>
                <td width="100">notel</td>
                <td colspan="2">aksi</td>
            </tr>
            <?php
            while ($buff = mysqli_fetch_array($hasil)) {
            ?>
                <tr>
                    <td width="31"><?php echo $buff['id']; ?></td>
                    <td width="85"><?php echo $buff['namadep']; ?></td>
                    <td width="99"><?php echo $buff['namalabel']; ?></td>
                    <td width="82"><?php echo $buff['username']; ?></td>
                    <td width="87"><?php echo $buff['password']; ?></td>
                    <td width="41"><?php echo $buff['usia']; ?></td>
                    <td width="41"><?php echo $buff['jk']; ?></td>
                    <td width="80"><?php echo $buff['ttl']; ?></td>
                    <td width="182"><?php echo $buff['email']; ?></td>
                    <td width="100"><?php echo $buff['notel']; ?></td>
                    <td width="100"><a href="Konten/edit.php?id=<?php echo $buff['id']; ?>">edit</a></td>
                    <td width="100"><a href="Konten/hapus.php?id=<?php echo $buff['id']; ?>">hapus</a></td>
                </tr>
            <?php
            };
            mysqli_close($conn);
            ?>
        </table>
    </div>
    </br>
    <a href="index.php"><----- kembali ke index</a>
</body>

</html>