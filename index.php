<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Mywebsite</title>

    <link href="style/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="header1">
        <div id="container">
            <!-- <div id="gambar">    
    <img src="Images/car.png.png" class="car">
    <img src="Images/scane1-jalan.png" class="road">
    </div> -->
            <div id="header">

            </div>


            <div id="fb">
                <div id="sidebar">
                    <h3>NAVIGASI</h3>
                    <ul id="navmenu">
                        <li><a href="index.php">Insert</a></li>
                        <li><a href="?module=galeri#pos">View Data</a></li>
                        <li><a href="?module=jadwal#pos">Search</a></li>
                    </ul>
                </div>

                <div id="page">
                    <?php if (isset($_GET['module']))
                        include "Konten/$_GET[module].php";
                    else
                        include "Konten/home.php"; ?>
                </div>

            </div>
            <div id="clear"></div>
                <div id="login"><pre>
                    <form action="?module=loginproc#pos" method="post">
                            username
                            <input type="text" name="username">

                            password
                            <input type="password" name="password">

                            <input type="submit" value="Login">
                    </form>
                </pre>
            </div>
            <div id="footer">
                <p>&copy; 2010</p>
            </div>

        </div>
    </div>
</body>

</html>