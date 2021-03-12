let OBJ;
let qCount = 10;
let serverAnswers = [];
let incorrect = [];
let maxP = 10;
let curP = 10;
let minP = 8;
let returnCounter = 0;

window.onload = function() {
    let proxy = localStorage.getItem("MansJSON");
    if ((proxy == null) || (proxy == undefined)){
        alert("Results not detected, you will now be redirected to the home page");
        location.href = "./index.html";
    }
    OBJ = JSON.parse(proxy);
    callAnswers();
}

function callAnswers() {
    let ansStr = "";
    let typeStr = "4:4:4:4:4:4:4:4:4:4:";
    for (let i=0; i<qCount; i++){
        let com = "ansStr = ansStr + OBJ.ans" + i + ".id + ':'";
        eval(com);
    }
    
    let xtp = new XMLHttpRequest();

    xtp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            processResponse(this.responseText);
        }
    }
    xtp.open("POST","./srAns.php",true);
    xtp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xtp.send("t="+ typeStr +"&i="+ ansStr);
}

function processResponse(str){
    let proxy = "";
    for (let i=0; i<str.length; i++){
        if (str[i] == ":"){
            serverAnswers.push(proxy);
            proxy = "";
        }
        else {
            proxy = proxy + str[i];
        }
    }
    checkDiff();
}

function checkDiff() {
    for (let i = 0; i<serverAnswers.length; i++){
        let str;
        com = "str = OBJ.ans" + i + ".ans";
        eval(com);
        if (str != serverAnswers[i]){
            incorrect.push(i);
        }
    }
    if (incorrect.length > 0){
        document.getElementById("container").style.setProperty("width","calc(100vw - 2vh)");
        document.getElementById("mis").style.setProperty("display","flex");
    }
    deduct();
}

function deduct() {
    for (let i=0; i<incorrect.length; i++){
        curP--;
        listout(incorrect[i]);
    }
    document.getElementById("sc-us").innerHTML = curP;
    if (curP >= minP){
        document.getElementById("sc-txt").innerHTML = "Prosao";
    }
    else {
        document.getElementById("sc-txt").innerHTML = "Pao";
    }
    localStorage.removeItem("MansJSON");
}

function listout(id) {
    let i;
    let t = 4;
    let doc = document.getElementById("mis");
    eval("i = OBJ.ans" + id + ".id");

    let xtp = new XMLHttpRequest();

    xtp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            doc.innerHTML = doc.innerHTML + this.responseText;
            if (returnCounter >= incorrect.length){
                setTimeout(() => {
                    document.getElementById("loader").classList.add("loaderE");
                    setTimeout(() => {
                        try {
                            document.getElementById("loader").remove();
                        }
                        catch (e) {}
                    }, 200);
                }, 500);
            }
        }
    }
    xtp.open("POST","./srListout.php",true);
    xtp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xtp.send("t="+ t +"&i="+ i);
    returnCounter++;
}