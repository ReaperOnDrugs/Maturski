let tabs = document.getElementById("cat-tabs");
let conts = document.getElementById("cat-cont");

function tabSwitch(index) {
    tabs.querySelector(".tabs-sel").classList.remove("tabs-sel");
    let allTabs = tabs.querySelectorAll(".tabs-op");
    allTabs[index].classList.add("tabs-sel");
    conSwitch(index);
}
function conSwitch(index) {
    conts.querySelector(".tabs-c-vis").classList.remove("tabs-c-vis");
    let allCont = conts.querySelectorAll(".tabs-cont");
    allCont[index].classList.add("tabs-c-vis");
}

function toA(){
    location.href = "./tests/A.php";
}
function toB(){
    location.href = "./tests/B.php";
}
function toC(){
    location.href = "./tests/C.php";
}
function toM(){
    location.href = "./tests/M.php";
}