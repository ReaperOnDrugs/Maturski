<?php
    $question = $_POST['question'];
    $ans_num = 0;
    $a1 = $_POST['ans_1'];
    $a2 = $_POST['ans_2'];
    $a3 = $_POST['ans_3'];
    $a4 = $_POST['ans_4'];
    $a5 = $_POST['ans_5'];
    $answers = array($a1,$a2,$a3,$a4,$a5);
    for ($i = 0; $i < 5; $i++){
        if ($answers[$i] != ""){
            $ans_num++;
        }
    }
    $correct_buffer = $_POST['correct'];
    $correct = "";
    for ($i = 0; $i < strlen($correct_buffer); $i++){
        if (is_numeric($correct_buffer[$i])){
            $correct = $correct.$correct_buffer[$i].",";
        }
    }
    $JSONnotation = "{'ans':['$a1','$a2','$a3','$a4','$a5'],'cor':'".substr($correct,0,-1)."'}";
    echo $JSONnotation;
?>