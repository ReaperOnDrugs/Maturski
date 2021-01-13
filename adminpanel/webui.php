<!DOCTYPE html>
<html>
    <head>
        <title> Admin Panel </title>
        <meta charset="utf8">
        <link rel="shortcut icon" href="../favicon.svg">
        <link rel="stylesheet" href="./ss.css">
        <script defer type="text/javascript" src="nav-a.js"></script>
    </head>
    <body>
        <div id="content">
            <div id="Qs_btn" class="con_btn" onclick="showQ()"> Pitanja </div>
            <div id="Sig_btn" class="con_btn" onclick="showS()"> Znakovi </div>
            <div id="Crs_btn" class="con_btn" onclick="showC()"> Raskrsnice </div>
        </div>
        <div id="Qs_ui" class="hidden ui_container">
            <div class="back_btn"> <span onclick="back()">Nazad</span>  <span>Obrisi podatke</span> </div>
            <form action="qs.php" method="POST">
                <input type="text" class="ui_input" name="question" placeholder="Pitanje">
                <input type="text" class="ui_input" name="ans_1" placeholder="Odgovor 1">
                <input type="text" class="ui_input" name="ans_2" placeholder="Odgovor 2">
                <input type="text" class="ui_input" name="ans_3" placeholder="Odgovor 3">
                <input type="text" class="ui_input" name="ans_4" placeholder="Odgovor 4">
                <input type="text" class="ui_input" name="ans_5" placeholder="Odgovor 5">
                <input type="text" class="ui_input" name="correct" placeholder="Tacni odgovori. Odvojiti zarezom">
                <input type="submit" class="ui_input" value="Dodaj Pitanje">
            </form>
        </div>
        <div id="Sig_ui" class="hidden ui_container">
            <div class="back_btn"> <span onclick="back()">Nazad</span>  <span>Obrisi podatke</span> </div>
        </div>
        <div id="Crs_ui" class="hidden ui_container">
            <div class="back_btn"> <span onclick="back()">Nazad</span>  <span>Obrisi podatke</span> </div>
        </div>
    </body>
</html>