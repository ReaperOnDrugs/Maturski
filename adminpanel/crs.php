<?php
    $image_path = $_POST['img_p'];
    $question = $_POST['question'];
    $a1 = $_POST['ans_1'];
    $a2 = $_POST['ans_2'];
    $a3 = $_POST['ans_3'];
    $a4 = $_POST['ans_4'];
    $a5 = $_POST['ans_5'];
    
    $correct_buffer = $_POST['correct'];
    $correct = "";
    for ($i = 0; $i < strlen($correct_buffer); $i++){
        if (is_numeric($correct_buffer[$i])){
            $correct = $correct.$correct_buffer[$i];
        }
    }

    $con = new mysqli("localhost", "root", "", "exodriverdb");
    if ($con -> connect_errno) {
        echo "Connection failed: " . $con -> connect_error;
    }
    if (!$con->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $con->error);
    }

    $q = "INSERT INTO raskrsnice (ques, path, ans1, ans2, ans3, ans4, ans5, correct)
        VALUES ('$question','$image_path','$a1','$a2','$a3','$a4','$a5','$correct')";

    if ($con -> query($q)) {
        echo "New record created successfully";
    }
    else {
        echo "Query error: " . $con -> error;
    }