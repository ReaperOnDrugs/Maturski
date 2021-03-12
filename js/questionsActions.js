let togQ = false;
let togS = false;
let togC = false;

function toggleQdrop(){
    let a = document.getElementById("q-drop");
    let b = a.querySelector("table");
    if (togQ){
        b.classList.add("table-hid");
        togQ = false;
    }
    else {
        b.classList.remove("table-hid");
        togQ = true;
    }
}

function toggleSdrop(){
    let a = document.getElementById("s-drop");
    let b = a.querySelector("table");
    if (togS){
        b.classList.add("table-hid");
        togS = false;
    }
    else {
        b.classList.remove("table-hid");
        togS = true;
    }
}

function toggleCdrop(){
    let a = document.getElementById("c-drop");
    let b = a.querySelector("table");
    if (togC){
        b.classList.add("table-hid");
        togC = false;
    }
    else {
        b.classList.remove("table-hid");
        togC = true;
    }
}