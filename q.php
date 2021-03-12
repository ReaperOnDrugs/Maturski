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

                        $q = "SELECT ques, ans1, ans2, ans3, ans4, ans5, correct
                                FROM pitanja";
                        $res = $con -> query($q);
                        $ind = 1;
                        while ($row = $res -> fetch_row()){
                            $ansNUM = 2;
                            $toEcho = "";

                            $iden = gettype(strpos($row[6],"1"));
                            if ($iden == "boolean"){
                                $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[1] </td></tr>";
                            }
                            else {
                                $toEcho = $toEcho . "<tr><td class='td-correct'> $row[1] </td></tr>";
                            }

                            $iden = gettype(strpos($row[6],"2"));
                            if ($iden == "boolean"){
                                $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[2] </td></tr>";
                            }
                            else {
                                $toEcho = $toEcho . "<tr><td class='td-correct'> $row[2] </td></tr>";
                            }

                            if ($row[3] != ""){
                                $iden = gettype(strpos($row[6],"3"));
                                $ansNUM = 3;
                                if ($iden == "boolean"){
                                    $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[3] </td></tr>";
                                }
                                else {
                                    $toEcho = $toEcho . "<tr><td class='td-correct'> $row[3] </td></tr>";
                                }
                                if ($row[4] != ""){
                                    $iden = gettype(strpos($row[6],"4"));
                                    $ansNUM = 4;
                                    if ($iden == "boolean"){
                                        $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[4] </td></tr>";
                                    }
                                    else {
                                        $toEcho = $toEcho . "<tr><td class='td-correct'> $row[4] </td></tr>";
                                    }
                                    if ($row[5] != ""){
                                        $iden = gettype(strpos($row[6],"5"));
                                        $ansNUM = 5;
                                        if ($iden == "boolean"){
                                            $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[5] </td></tr>";
                                        }
                                        else {
                                            $toEcho = $toEcho . "<tr><td class='td-correct'> $row[5] </td></tr>";
                                        }
                                    }
                                }
                            }
                            $ansNUM++;
                            echo "<tr style='border-top: 2vh solid white'><td rowspan='$ansNUM' style='text-align: center; padding: 0.5vh'> $ind </td>
                            <td class='td-question'> $row[0] </td></tr>" . $toEcho;

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
                        $q = "SELECT ques, ans1, ans2, ans3, ans4, ans5, correct, path
                                FROM znakovi";
                        $res = $con -> query($q);
                        while ($row = $res -> fetch_row()){
                            $ansNUM = 2;
                            $toEcho = "";

                            $iden = gettype(strpos($row[6],"1"));
                            if ($iden == "boolean"){
                                $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[1] </td></tr>";
                            }
                            else {
                                $toEcho = $toEcho . "<tr><td class='td-correct'> $row[1] </td></tr>";
                            }

                            $iden = gettype(strpos($row[6],"2"));
                            if ($iden == "boolean"){
                                $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[2] </td></tr>";
                            }
                            else {
                                $toEcho = $toEcho . "<tr><td class='td-correct'> $row[2] </td></tr>";
                            }

                            if ($row[3] != ""){
                                $iden = gettype(strpos($row[6],"3"));
                                $ansNUM = 3;
                                if ($iden == "boolean"){
                                    $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[3] </td></tr>";
                                }
                                else {
                                    $toEcho = $toEcho . "<tr><td class='td-correct'> $row[3] </td></tr>";
                                }
                                if ($row[4] != ""){
                                    $iden = gettype(strpos($row[6],"4"));
                                    $ansNUM = 4;
                                    if ($iden == "boolean"){
                                        $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[4] </td></tr>";
                                    }
                                    else {
                                        $toEcho = $toEcho . "<tr><td class='td-correct'> $row[4] </td></tr>";
                                    }
                                    if ($row[5] != ""){
                                        $iden = gettype(strpos($row[6],"5"));
                                        $ansNUM = 5;
                                        if ($iden == "boolean"){
                                            $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[5] </td></tr>";
                                        }
                                        else {
                                            $toEcho = $toEcho . "<tr><td class='td-correct'> $row[5] </td></tr>";
                                        }
                                    }
                                }
                            }
                            $ansNUM += 2;
                            echo "<tr style='border-top: 2vh solid white'><td rowspan='$ansNUM' style='text-align: center; padding: 0.5vh'> $ind </td>
                            <td class='td-question'> $row[0] </td></tr>" . $toEcho . "<tr><td><img src='assets/signs/$row[7]'></td></tr>";

                            $ind++;
                        }
                    ?>
                </table>
            </div>
            <div id="c-drop">
                <div class="drop-header" onclick="toggleCdrop()"> Raskrsnice </div>
                <table border="1" class="table-hid table-set">
                    <?php
                        $ind = 1;
                        $q = "SELECT ques, ans1, ans2, ans3, ans4, ans5, correct, path
                                FROM raskrsnice";
                        $res = $con -> query($q);
                        while ($row = $res -> fetch_row()){
                            $ansNUM = 2;
                            $toEcho = "";

                            $iden = gettype(strpos($row[6],"1"));
                            if ($iden == "boolean"){
                                $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[1] </td></tr>";
                            }
                            else {
                                $toEcho = $toEcho . "<tr><td class='td-correct'> $row[1] </td></tr>";
                            }

                            $iden = gettype(strpos($row[6],"2"));
                            if ($iden == "boolean"){
                                $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[2] </td></tr>";
                            }
                            else {
                                $toEcho = $toEcho . "<tr><td class='td-correct'> $row[2] </td></tr>";
                            }

                            if ($row[3] != ""){
                                $iden = gettype(strpos($row[6],"3"));
                                $ansNUM = 3;
                                if ($iden == "boolean"){
                                    $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[3] </td></tr>";
                                }
                                else {
                                    $toEcho = $toEcho . "<tr><td class='td-correct'> $row[3] </td></tr>";
                                }
                                if ($row[4] != ""){
                                    $iden = gettype(strpos($row[6],"4"));
                                    $ansNUM = 4;
                                    if ($iden == "boolean"){
                                        $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[4] </td></tr>";
                                    }
                                    else {
                                        $toEcho = $toEcho . "<tr><td class='td-correct'> $row[4] </td></tr>";
                                    }
                                    if ($row[5] != ""){
                                        $iden = gettype(strpos($row[6],"5"));
                                        $ansNUM = 5;
                                        if ($iden == "boolean"){
                                            $toEcho = $toEcho . "<tr><td class='td-incorrect'> $row[5] </td></tr>";
                                        }
                                        else {
                                            $toEcho = $toEcho . "<tr><td class='td-correct'> $row[5] </td></tr>";
                                        }
                                    }
                                }
                            }
                            $ansNUM += 2;
                            echo "<tr style='border-top: 2vh solid white'><td rowspan='$ansNUM' style='text-align: center; padding: 0.5vh'> $ind </td>
                            <td class='td-question'> $row[0] </td></tr>" . $toEcho . "<tr><td><img src='assets/crossroads/$row[7]'></td></tr>";

                            $ind++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>