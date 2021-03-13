let OBJ;
let qCount;
let serverAnswers = [];
let incorrect = [];
let maxP;
let curP;
let minP;
let returnCounter = 0;

window.onload = function() {
    let proxy = localStorage.getItem("ansJSON");
    if ((proxy == null) || (proxy == undefined)){
        alert("Results not detected, you will now be redirected to the home page");
        location.href = "./index.html";
    }
    OBJ = JSON.parse(proxy);
    qCount = OBJ.qc;
    maxP = OBJ.maxP;
    curP = OBJ.maxP;
    minP = OBJ.minP;
    callAnswers();
}

function callAnswers() {
    let ansStr = "";
    let typeStr = "";
    for (let i=0; i<qCount; i++){
        let com = "ansStr = ansStr + OBJ.ans" + i + ".id + ':'";
        let com2 = "typeStr = typeStr + OBJ.ans" + i + ".type + ':'";
        eval(com);
        eval(com2);
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
    let str1 = "";
    let str2 = "";
    for (let i=0; i<qCount; i++){
        eval("str1 = OBJ.ans" + i + ".ans");
        str2 = serverAnswers[i];
        let err = false;
        for (let j = 0; j<str1.length; j++){
            if (str2.search(str1[j]) == -1){
                incorrect.push(i);
                err = true;
                break;
            }
        }
        if (!err) {
            for(let j = 0; j<str2.length; j++){
                if (str1.search(str2[j]) == -1){
                    incorrect.push(i);
                    break;
                }
            }
        }
    }
    if (incorrect.length > 0){
        document.getElementById("container").style.setProperty("width","calc(100vw - 2vh)");
        document.getElementById("mis").style.setProperty("display","flex");
    }
    deduct();
}

function deduct() {
    let type;
    for (let i=0; i<incorrect.length; i++){
        eval("type = OBJ.ans" + incorrect[i] + ".type");
        if (type == 1){
            curP -= 2;
        }
        else if (type == 2){
            curP -= 3;
        }
        else {
            curP -= 5;
        }
        listout(incorrect[i]);
    }
    document.getElementById("sc-us").innerHTML = curP;
    document.getElementById("max").innerHTML = maxP;
    if (curP >= minP){
        document.getElementById("sc-txt").innerHTML = "Prosao";
    }
    else {
        document.getElementById("sc-txt").innerHTML = "Pao";
    }
}

function listout(id) {
    let i;
    let t;
    let doc = document.getElementById("mis");
    eval("i = OBJ.ans" + id + ".id");
    eval("t = OBJ.ans" + id + ".type");

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

window.onunload = function() {
    localStorage.removeItem("ansJSON");
}