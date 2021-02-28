let OBJ;
let qCount;
let serverAnswers = [];

window.onload = function() {
    let proxy = localStorage.getItem("ansJSON");
    if ((proxy == null) || (proxy == undefined)){
        alert("Results not detected, you will now be redirected to the home page");
        location.href = "./index.html";
    }
    OBJ = JSON.parse(proxy);
    qCount = OBJ.qc;
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
            console.log(this.responseText);
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
    console.log(serverAnswers);
}

function check() {

}