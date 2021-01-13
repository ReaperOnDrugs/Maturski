<!DOCTYPE html>
<html>
    <head>
        <title> ExoDriver </title>
        <link rel="shortcut icon" href="favicon.svg">
        <meta charset="utf8">
        <link rel="stylesheet" href="./css/q.css">
        <link rel="stylesheet" href="./css/secondaryNav.css">
        <script src="./js/navActions.js"></script>
    </head>
    <body>
        <div id="nav">
            <div id="nav-logo">
                <object id="logoID" data="./favicon.svg" type="image/svg+xml"> Vas browser ne podrzava svg slike </object>
            </div>
            <div id="nav-Home" class="nav-s" onclick="Home()">
               <span> Početna </span>
            </div>
            <div id="nav-Start" class="nav-s nav-Start">
                <span> Počni test </span>
            </div>
        </div>
        <table border="1" style="margin-top: 50vh">
            <?php
                $con = mysql_connect("localhost","root","");
                $db = mysql_select_db("exodriverdb",$con);
                $q = "SELECT p, bro
                        FROM pitanja";
                $res = mysql_query($q);
                while ($red = mysql_fetch_array($res)){
                    echo "<tr>
                        <td> $red[0] </td>
                        <td> $red[1] </td>
                    </tr>";
                }
            ?>
        </table>
    </body>
</html>