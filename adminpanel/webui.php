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
                <input type="text" class="ui_input" name="question" placeholder="Pitanje" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_1" placeholder="Odgovor 1" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_2" placeholder="Odgovor 2" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_3" placeholder="Odgovor 3" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_4" placeholder="Odgovor 4" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_5" placeholder="Odgovor 5" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="correct" placeholder="Tacni odgovori. Unijeti samo redni broj odgovora" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="category" placeholder="Kategorije (ABC)" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="submit" class="ui_input" value="Dodaj Pitanje">
            </form>
        </div>
        <div id="Sig_ui" class="hidden ui_container">
            <div class="back_btn"> <span onclick="back()">Nazad</span>  <span>Obrisi podatke</span> </div>
            <form action="sig.php" method="POST">
                <input type="text" class="ui_input" name="img_p" placeholder="Naziv slike znaka" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_1" placeholder="Odgovor 1" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_2" placeholder="Odgovor 2" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_3" placeholder="Odgovor 3" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_4" placeholder="Odgovor 4" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_5" placeholder="Odgovor 5" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="correct" placeholder="Tacni odgovori. Unijeti samo redni broj odgovora" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="category" placeholder="Kategorije (ABC)" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="submit" class="ui_input" value="Dodaj Znak">
            </form>
        </div>
        <div id="Crs_ui" class="hidden ui_container">
            <div class="back_btn"> <span onclick="back()">Nazad</span>  <span>Obrisi podatke</span> </div>
            <form action="crs.php" method="POST">
                <input type="text" class="ui_input" name="img_p" placeholder="Naziv slike raskrsnice" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_1" placeholder="Odgovor 1" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_2" placeholder="Odgovor 2" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_3" placeholder="Odgovor 3" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_4" placeholder="Odgovor 4" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="ans_5" placeholder="Odgovor 5" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="correct" placeholder="Tacni odgovori. Unijeti samo redni broj odgovora" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="text" class="ui_input" name="category" placeholder="Kategorije (ABC)" autocomplete="off" autocorrect="off" spellcheck="false">
                <input type="submit" class="ui_input" value="Dodaj Raskrsnicu">
            </form>
        </div>
    </body>
</html>