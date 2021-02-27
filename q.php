<!DOCTYPE html>
<html>
    <head>
        <title> ExoDriver </title>
        <link rel="shortcut icon" href="favicon.svg">
        <meta charset="utf8">
        <link rel="stylesheet" href="./css/q.css">
        <link rel="stylesheet" href="./css/secondaryNav.css">
        <script src="./js/navActions.js"></script>
        <script defer src="./js/questionsActions.js"></script>
    </head>
    <body>
        <div id="nav">
            <div id="nav-logo">
                <object id="logoID" data="./favicon.svg" type="image/svg+xml"> Vas browser ne podrzava svg slike </object>
            </div>
            <div id="nav-Home" class="nav-s" onclick="Home()">
               <span> Početna </span>
            </div>
            <div id="nav-Start" class="nav-s nav-Start" onclick="setupStart()">
                <span> Počni test </span>
            </div>
        </div>
        <div id="content">
            <div id="q-drop">
                <div class="drop-header" onclick="toggleQdrop()"> Pitanja </div>
                <table border="1" class="table-hid table-set">
                    <?php
                        $con = new mysqli("localhost", "root", "", "exodriverdb");
                        
                        if ($con -> connect_errno){
                            echo "Connection died" . $con -> connect_error;
                            exit();
                        }
                        if (!$con->set_charset("utf8")) {
                            printf("Error loading character set utf8: %s\n", $con->error);
                        }

                        $q = "SELECT *
                                FROM pitanja";
                        $res = $con -> query($q);
                        $ind = 1;
                        while ($row = $res -> fetch_row()){
                            echo "<tr>
                                <td rowspan='2' style='text-align: center'> $ind </td>
                                <td class='table-question' style='padding-left: 2vh; border-bottom: none'> $row[1] </td>
                            </tr>
                            <tr>
                                <td style='padding-left: 2vh'> $row[2] </td>
                            </tr>";
                            $ind++;
                        }
                    ?>
                </table>
            </div>
            <div id="s-drop">
                <div class="drop-header" onclick="toggleSdrop()"> Znakovi </div>
                <table border="1" class="table-hid table-set">
                    <?php
                        $ind = 1;
                        while ($row = mysqli_fetch_array($res)){
                            echo "<tr>
                                <td rowspan='2' style='text-align: center'> $ind </td>
                                <td class='table-question' style='padding-left: 2vh; border-bottom: none'> $row[1] </td>
                            </tr>
                            <tr>
                                <td style='padding-left: 2vh'> $row[2] </td>
                            </tr>";
                            $ind++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>