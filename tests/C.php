<!DOCTYPE html>
<html>
    <head>
        <title> ExoDriver </title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../favicon.svg">
        <link rel="stylesheet" href="../css/test.css">
        <link rel="stylesheet" href="../css/tests-inter.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    </head>
<?php
    $numOfQ = 25;
    $numOfS = 10;
    $numOfR = 10;
    $curQ = 0;

    $con = new mysqli("localhost","root","","exodriverdb");
    if ($con -> connect_errno){
        echo "Connection to server has been lost: " . $con -> connect_error;
        exit();
    }
    if (!$con->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $con->error);
    }

    $res = $con -> query("SELECT ID FROM pitanja WHERE isC = true");

    $tmpArray = [];
    $quesArray = [];
    
    while ($row = $res -> fetch_row()){
        array_push($tmpArray, $row[0]);
    }
    for ($i = 0; $i < $numOfQ; $i++){
        $rand = rand(0, sizeof($tmpArray) - 1);
        array_push($quesArray,$tmpArray[$rand]);
        array_splice($tmpArray, $rand, 1);
    }

?>
    <body>
        <div id="fullscr" onclick="closeFullscr(this)" class="fullinvis">
            <img src="">
        </div>
<?php
    #Generate questions
    for ($i = 0; $i < $numOfQ; $i++){
        $res = $con -> query("SELECT * FROM pitanja WHERE ID = $quesArray[$i]");
        echo "<div id='$quesArray[$i]' class='question1'>";
        while ($row = $res -> fetch_row()){
            echo "<div class='question'> $row[1] </div>";
            echo "<div class='answers'> <div class='custom-check' onclick='toggleCh(this,$curQ,1)'><div class='ch-indi'></div> <div class='ch-txt'>$row[2]</div> </div><div class='custom-check' onclick='toggleCh(this,$curQ,2)'><div class='ch-indi'></div> <div class='ch-txt'>$row[3]</div> </div>";
            if($row[4] != ""){
                echo "<div class='custom-check' onclick='toggleCh(this,$curQ,3)'><div class='ch-indi'></div> <div class='ch-txt'>$row[4]</div> </div>";
                if ($row[5] != ""){
                    echo "<div class='custom-check' onclick='toggleCh(this,$curQ,4)'><div class='ch-indi'></div> <div class='ch-txt'>$row[5]</div> </div>";
                    if ($row[6] != ""){
                        echo "<div class='custom-check' onclick='toggleCh(this,$curQ,5)'><div class='ch-indi'></div> <div class='ch-txt'>$row[6]</div> </div>";
                    }
                }
            }
            echo "</div></div>";
        }
        $curQ++;
    }
    #Generate signs
    $res = $con -> query("SELECT ID FROM znakovi");

    $tmpArray = [];
    $quesArray = [];
    
    while ($row = $res -> fetch_row()){
        array_push($tmpArray, $row[0]);
    }
    for ($i = 0; $i < $numOfS; $i++){
        $rand = rand(0, sizeof($tmpArray) - 1);
        array_push($quesArray,$tmpArray[$rand]);
        array_splice($tmpArray, $rand, 1);
    }

    for ($i = 0; $i < $numOfS; $i++){
        $res = $con -> query("SELECT * FROM znakovi WHERE ID = $quesArray[$i]");
        echo "<div id='$quesArray[$i]' class='question1'>";
        while ($row = $res -> fetch_row()){
            echo "<div class='question'> $row[1] </div>";
            echo "<div class='answers'> <div class='custom-check' onclick='toggleCh(this,$curQ,1)'><div class='ch-indi'></div> <div class='ch-txt'>$row[3]</div> </div><div class='custom-check' onclick='toggleCh(this,$curQ,2)'><div class='ch-indi'></div> <div class='ch-txt'>$row[4]</div> </div>";
            if($row[5] != ""){
                echo "<div class='custom-check' onclick='toggleCh(this,$curQ,3)'><div class='ch-indi'></div> <div class='ch-txt'>$row[5]</div> </div>";
                if ($row[6] != ""){
                    echo "<div class='custom-check' onclick='toggleCh(this,$curQ,4)'><div class='ch-indi'></div> <div class='ch-txt'>$row[6]</div> </div>";
                    if ($row[7] != ""){
                        echo "<div class='custom-check' onclick='toggleCh(this,$curQ,5)'><div class='ch-indi'></div> <div class='ch-txt'>$row[7]</div> </div>";
                    }
                }
            }
            echo "</div> <div class='image'><image onclick='fullscr(this)' src='../assets/signs/$row[2]'></div> </div>";
        }
        $curQ++;
    }
    #Generate crossroads
    $res = $con -> query("SELECT ID FROM raskrsnice");

    $tmpArray = [];
    $quesArray = [];
    
    while ($row = $res -> fetch_row()){
        array_push($tmpArray, $row[0]);
    }
    for ($i = 0; $i < $numOfR; $i++){
        $rand = rand(0, sizeof($tmpArray) - 1);
        array_push($quesArray,$tmpArray[$rand]);
        array_splice($tmpArray, $rand, 1);
    }

    for ($i = 0; $i < $numOfR; $i++){
        $res = $con -> query("SELECT * FROM raskrsnice WHERE ID = $quesArray[$i]");
        echo "<div id='$quesArray[$i]' class='question1'>";
        while ($row = $res -> fetch_row()){
            echo "<div class='question'> $row[1] </div>";
            echo "<div class='answers'> <div class='custom-check' onclick='toggleCh(this,$curQ,1)'><div class='ch-indi'></div> <div class='ch-txt'>$row[3]</div> </div><div class='custom-check' onclick='toggleCh(this,$curQ,2)'><div class='ch-indi'></div> <div class='ch-txt'>$row[4]</div> </div>";
            if($row[5] != ""){
                echo "<div class='custom-check' onclick='toggleCh(this,$curQ,3)'><div class='ch-indi'></div> <div class='ch-txt'>$row[5]</div> </div>";
                if ($row[6] != ""){
                    echo "<div class='custom-check' onclick='toggleCh(this,$curQ,4)'><div class='ch-indi'></div> <div class='ch-txt'>$row[6]</div> </div>";
                    if ($row[7] != ""){
                        echo "<div class='custom-check' onclick='toggleCh(this,$curQ,5)'><div class='ch-indi'></div> <div class='ch-txt'>$row[7]</div> </div>";
                    }
                }
            }
            echo "</div> <div class='image'><image onclick='fullscr(this)' src='../assets/crossroads/$row[2]'></div> </div>";
        }
        $curQ++;
    }
?>
        <div id="last" onclick="Checkup()"> Pregledaj test </div>
    </body>
    <script defer src="../js/testJS/Cjs.js"></script>
</html>