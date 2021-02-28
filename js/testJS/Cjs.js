let OBJ;

window.onload = function() {
    let xtp = new XMLHttpRequest();

    xtp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            OBJ = JSON.parse(this.responseText);
            loadID();
        }
    }
    xtp.open("GET","../js/obj/C.json","true");
    xtp.send();
}

function loadID() {
    let docs = document.querySelectorAll(".question1");
    for (let i = 0; i < 45; i++){
        let com = "OBJ.ans" + i + ".id = docs[" + i + "].id";
        eval(com);
    }
}

function toggleCh(elem, ansnum, ans){
    if (elem.classList.contains("ChOn")){
        elem.classList.remove("ChOn");
        elem.querySelector(".ch-indi").innerHTML = "";
        delAns(ansnum, ans);
    }
    else {
        elem.classList.add("ChOn");
        elem.querySelector(".ch-indi").innerHTML = "<i class='fas fa-check'></i>";
        setAns(ansnum, ans);
    }
}

function setAns(ansnum, ans) {
    let com = "OBJ.ans" + ansnum + ".ans = OBJ.ans" + ansnum + ".ans + " + ans;
    eval(com);
}
function delAns(ansnum, ans) {
    let com = "OBJ.ans" + ansnum + ".ans = OBJ.ans" + ansnum + ".ans.replace(" + ans + ",'')";
    eval(com);
}

function fullscr(elem) {
    let target = document.getElementById("fullscr");
    target.querySelector("img").setAttribute("src",elem.src);
    target.classList.remove("fullinvis");
    target.classList.add("fullvis");
}
function closeFullscr(elem){
    elem.classList.remove("fullvis");
    elem.classList.add("fullinvisA");
    setTimeout(() => {
        elem.classList.add("fullinvis");
        elem.classList.remove("fullinvisA");
    }, 300);
}

function Checkup() {
    let isDone = true;
    for (let i = 0; i < 40; i++){
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
        location.href = "../results.html";
    }
}