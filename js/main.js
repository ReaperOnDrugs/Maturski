let nav = document.getElementById("nav");
let selections = document.getElementById("nav-selections");

function openNav(){
    nav.classList.toggle("navOPEN");
    selections.classList.toggle("navOPEN");
    Array.from(selections.children).forEach((e) => {
        e.classList.toggle("navIcoOP");
    });
}