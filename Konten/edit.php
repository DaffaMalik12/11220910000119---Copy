<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include "../koneksi.php";
    $select = "select * from register where id='$id'";
    $hasil = mysqli_query($conn, $select);
    while ($buff = mysqli_fetch_array($hasil)) {
    ?>
        <h2>EDIT DATA</h2> <br>
        <form action="edit2.php" method="post">
            <table width="487" border="0">
                <input type="hidden" name="id" value="<?php echo $buff['id']; ?>">
                <tr>
                    <td width="150">nama depan</td>
                    <td width="327"><input type="text" name="namadep" value="<?php echo $buff['namadep']; ?>" /></td>
                </tr>
                <tr>
                    <td>nama belakang</td>
                    <td><input type="text" name="namalabel" value="<?php echo $buff['namalabel']; ?>" /></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" value="<?php echo $buff['username']; ?>" /></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" value="<?php echo $buff['password']; ?>" /></td>
                </tr>
                <tr>
                    <td>usia</td>
                    <td><input type="text" name="usia" value="<?php echo $buff['usia']; ?>" /></td>
                </tr>
                <tr>
                    <td>jenis kelamin</td>
                    <td><input type="text" name="jk" value="<?php echo $buff['jk']; ?>" /></td>
                </tr>
                <tr>
                    <td>tempat tanggal lahir</td>
                    <td><input type="text" name="ttl" value="<?php echo $buff['ttl']; ?>" /></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" value="<?php echo $buff['email']; ?>" /></td>
                </tr>
                <tr>
                    <td>no telp</td>
                    <td><input type="text" name="notel" value="<?php echo $buff['notel']; ?>" /></td>
                </tr>
                <tr>
                    <td height=" align=" right"><input type="reset" value="reset"></td>
                    <td><input type="submit" value="submit" /></td>
                </tr>
            </table>
        </form>
    <?php
    };
    mysqli_close($conn);
    ?>
</body>

</html>