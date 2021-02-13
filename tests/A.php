<!DOCTYPE html>
<html>
    <head>
        <title> ExoDriver </title>
        <meta charset="utf8">
        <link rel="stylesheet" href="../css/test.css">
        <script type="module" src="../js/testJS/Ajs.js"></script>
    </head>
<?php
    $numOfQ = 5;

    $con = new mysqli("localhost","root","","exodriverdb");
    if ($con -> connect_errno){
        echo "Connection to server has been lost: " . $con -> connect_error;
        exit();
    }

    $res = $con -> query("SELECT ID FROM pitanja");

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
        <div id="content">
<?php
    for ($i = 0; $i < $numOfQ; $i++){
        $res = $con -> query("SELECT * FROM pitanja WHERE ID = $quesArray[$i]");
        echo "<div class='question1'>";
        while ($row = $res -> fetch_row()){
            echo "<div class='question'> $row[1] </div>";
            echo "<div class='answers'> $row[2] <br> $row[3] <br> $row[4] </div>";
            echo "<div class='image'> </div>";
        }
    }
?>
            <!-- <div id="question1">
                <div class="question"> This is my question </div>
                <div class="answers"> Answers go here </div>
                <div class="image"> this is my image </div>
            </div> -->
        </div>
    </body>
</html>