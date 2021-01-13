let c = document.getElementById("content");

function showQ(){
    c.classList.add("hidden");
    document.getElementById("Qs_ui").classList.remove("hidden");
    document.getElementById("Qs_ui").classList.add("active_ui");
}
function showS(){
    c.classList.add("hidden");
    document.getElementById("Sig_ui").classList.remove("hidden");
    document.getElementById("Sig_ui").classList.add("active_ui");
}
function showC(){
    c.classList.add("hidden");
    document.getElementById("Crs_ui").classList.remove("hidden");
    document.getElementById("Crs_ui").classList.add("active_ui");
}
function back(){
    let active = document.querySelector(".active_ui");
    active.classList.remove("active_ui");
    active.classList.add("hidden");
    c.classList.remove("hidden");
}