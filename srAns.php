<?php
    $typesPROXY = $_POST['t'];
    $ansIDsPROXY = $_POST['i'];
    $return = "";

    $types = array();
    $ansIDs = array();

    $proxy = "";
    for ($i = 0; $i<strlen($typesPROXY); $i++){
        if ($typesPROXY[$i] == ":"){
            array_push($types,$proxy);
            $proxy = "";
        }
        else {
            $proxy = $proxy . $typesPROXY[$i];
        }
    }

    for ($i = 0; $i<strlen($ansIDsPROXY); $i++){
        if ($ansIDsPROXY[$i] == ":"){
            array_push($ansIDs,$proxy);
            $proxy = "";
        }
        else {
            $proxy = $proxy . $ansIDsPROXY[$i];
        }
    }

    $con = new mysqli("localhost","root","","exodriverdb");
    if ($con -> connect_errno){
        echo "Connection error: " . $con -> connect_error;
        exit();
    }
    if (!$con->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $con->error);
    }

    for ($i = 0; $i<sizeof($types); $i++){
        $q = "SELECT correct FROM ";

        if ($types[$i] == "1"){
            $q = $q . "pitanja ";
        }
        else if ($types[$i] == "2"){
            $q = $q . "znakovi ";
        }
        else if ($types[$i] == "3"){
            $q = $q . "raskrsnice ";
        }
        else {
            $q = $q . "ppomoc ";
        }

        $q = $q . "WHERE ID = " . $ansIDs[$i];

        $res = $con -> query($q);

        while ($row = $res -> fetch_row()){
            $return = $return . $row[0] . ":";
        }
    }
    
    echo $return;
?>