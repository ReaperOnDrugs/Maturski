let OBJ;

window.onload = function() {
    let xtp = new XMLHttpRequest();

    xtp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            OBJ = JSON.parse(this.responseText);
            loadID();
        }
    }
    xtp.open("GET","../js/obj/Medi.json","true");
    xtp.send();
}

function loadID() {
    let docs = document.querySelectorAll(".question1");
    for (let i = 0; i < 10; i++){
        let com = "OBJ.ans" + i + ".id = docs[" + i + "].id";
        eval(com);
    }
}

function clickCh(elem, ansnum, ans){
    if (!elem.classList.contains("ChOn")){
        try {
            let tmpE = elem.parentElement.querySelector(".ChOn");
            tmpE.classList.remove("ChOn");
            tmpE.querySelector(".ch-indi").innerHTML = "";
        }
        catch(e) {

        }
        elem.querySelector(".ch-indi").innerHTML = "<i class='fas fa-check'></i>";
        elem.classList.add("ChOn");
        setAns(ansnum, ans);
    }
}

function setAns(ansnum, ans) {
    let com = "OBJ.ans" + ansnum + ".ans = " + ans;
    eval(com);
}

function Checkup() {
    let isDone = true;
    for (let i = 0; i < 10; i++){
        let ans = "";
        let com = "ans = OBJ.ans" + i + ".ans";
        eval(com);
        if (ans == ""){
            isDone = false;
            let docs = document.querySelectorAll(".question1");
            docs[i].scrollIntoView();
            break;
        }
    }
    if (isDone){
        localStorage.setItem("MansJSON",JSON.stringify(OBJ));
        location.href = "../Mresults.html";
    }
}