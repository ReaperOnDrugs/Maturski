<?php
    $question = $_POST['question'];
    $a1 = $_POST['ans_1'];
    $a2 = $_POST['ans_2'];
    $a3 = $_POST['ans_3'];
    $a4 = $_POST['ans_4'];
    $a5 = $_POST['ans_5'];
    $isA = false;
    $isB = false;
    $isC = false;
    
    $correct_buffer = $_POST['correct'];
    $correct = "";
    for ($i = 0; $i < strlen($correct_buffer); $i++){
        if (is_numeric($correct_buffer[$i])){
            $correct = $correct.$correct_buffer[$i];
        }
    }
    
    $cat = $_POST['category'];
    for ($i = 0; $i < strlen($cat); $i++){
        if ($cat[$i] == "A" || $cat[$i] == "a"){
            $isA = true;
        }
        else if ($cat[$i] == "B" || $cat[$i] == "b"){
            $isB = true;
        }
        else if ($cat[$i] == "C" || $cat[$i] == "c"){
            $isC = true;
        }
    }

    $con = new mysqli("localhost", "root", "", "exodriverdb");
    if ($con -> connect_errno) {
        echo "Connection failed: " . $con -> connect_error;
    }
    if (!$con->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $con->error);
    }

    $q = "INSERT INTO pitanja (ques, ans1, ans2, ans3, ans4, ans5, correct, isA, isB, isC)
        VALUES ('$question','$a1','$a2','$a3','$a4','$a5','$correct',";
    if ($isA){
        $q = $q."true,";
    }
    else {
        $q = $q."false,";
    }
    if ($isB){
        $q = $q."true,";
    }
    else {
        $q = $q."false,";
    }
    if ($isC){
        $q = $q."true);";
    }
    else {
        $q = $q."false);";
    }

    if ($con -> query($q)) {
        echo "New record created successfully";
    }
    else {
        echo "Query error";
    }
?>