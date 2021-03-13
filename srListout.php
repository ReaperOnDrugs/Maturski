<?php
    $id = $_POST['i'];
    $type = $_POST['t'];
    $q = "";
    $return = "";

    $con = new mysqli("localhost","root","","exodriverdb");
    if ($con -> connect_errno){
        echo "Connection error: " . $con -> connect_error;
        exit();
    }
    if (!$con->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $con->error);
    }

    if ($type == 1){
        $q = "SELECT ques, ans1, ans2, ans3, ans4, ans5, correct
            FROM pitanja
            WHERE ID=$id";
    }
    else if ($type == 2){
        $q = "SELECT ques, ans1, ans2, ans3, ans4, ans5, correct, path
            FROM znakovi
            WHERE ID=$id";
    }
    else if ($type == 3){
        $q = "SELECT ques, ans1, ans2, ans3, ans4, ans5, correct, path
            FROM raskrsnice
            WHERE ID=$id";
    }
    else {
        $q = "SELECT ques, ans1, ans2, ans3, correct
            FROM ppomoc
            WHERE ID=$id";
        $res = $con -> query($q);
        $row = $res -> fetch_row();

        $return = "<div class='er'><div class='er-q'> $row[0] </div><div class='er-ans ";

        $iden = gettype(strpos($row[4],"1"));
        if ($iden == "boolean"){
            $return = $return . "er-incorrect'> <span>$row[1]</span> </div>";
        }
        else {
            $return = $return . "er-correct'> <span>$row[1]</span> </div>";
        }

        $iden = gettype(strpos($row[4],"2"));
        if ($iden == "boolean"){
            $return = $return . "<div class='er-ans er-incorrect'> <span>$row[2]</span> </div>";
        }
        else {
            $return = $return . "<div class='er-ans er-correct'> <span>$row[2]</span> </div>";
        }

        $iden = gettype(strpos($row[4],"3"));
        if ($iden == "boolean"){
            $return = $return . "<div class='er-ans er-incorrect'> <span>$row[3]</span> </div>";
        }
        else {
            $return = $return . "<div class='er-ans er-correct'> <span>$row[3]</span> </div>";
        }

        echo $return;
        exit();
    }

    $res = $con -> query($q);
    $row = $res -> fetch_row();
    

    $return = "<div class='er'><div class='er-q'> $row[0] </div><div class='er-ans ";

    $iden = gettype(strpos($row[6],"1"));
    if ($iden == "boolean"){
        $return = $return . "er-incorrect'> <span>$row[1]</span> </div>";
    }
    else {
        $return = $return . "er-correct'> <span>$row[1]</span> </div>";
    }

    $iden = gettype(strpos($row[6],"2"));
    if ($iden == "boolean"){
        $return = $return . "<div class='er-ans er-incorrect'> <span>$row[2]</span> </div>";
    }
    else {
        $return = $return . "<div class='er-ans er-correct'> <span>$row[2]</span> </div>";
    }

    if ($row[3] != ""){
        $iden = gettype(strpos($row[6],"3"));
        if ($iden == "boolean"){
            $return = $return . "<div class='er-ans er-incorrect'> <span>$row[3]</span> </div>";
        }
        else {
            $return = $return . "<div class='er-ans er-correct'> <span>$row[3]</span> </div>";
        }
        if ($row[4] != ""){
            $iden = gettype(strpos($row[6],"4"));
            if ($iden == "boolean"){
                $return = $return . "<div class='er-ans er-incorrect'> <span>$row[4]</span> </div>";
            }
            else {
                $return = $return . "<div class='er-ans er-correct'> <span>$row[4]</span> </div>";
            }
            if ($row[5] != ""){
                $iden = gettype(strpos($row[6],"5"));
                if ($iden == "boolean"){
                    $return = $return . "<div class='er-ans er-incorrect'> <span>$row[5]</span> </div>";
                }
                else {
                    $return = $return . "<div class='er-ans er-correct'> <span>$row[5]</span> </div>";
                }
            }
        }
    }

    if ($type == 2){
        $return = $return . "<div class='er-img'> <img src='.\assets\signs\\$row[7]'> </div>";
    }
    else if ($type == 3){
        $return = $return . "<div class='er-img'> <img src='.\assets\crossroads\\$row[7]'> </div>";
    }
    $return = $return . "</div>";

    echo $return;
?>