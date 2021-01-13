let tlanimc = document.getElementById("tlAnimCont").style;
let nav = document.getElementById("nav");
let logo = document.getElementById("logoID");

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

/*window.onscroll = function () {
    if (window.scrollY > 2){
        tlanimc.setProperty("margin-top","-60vh");
        nav.style.setProperty("background-color","#00241b");

        let s = logo.getSVGDocument().querySelectorAll(".svgClass");
        for (let i = 0; i<s.length; i++){
            s[i].style.setProperty("fill","white");
        }

        let j = nav.querySelectorAll(".nav-s");
        for (let i = 0; i<j.length-1; i++){
            j[i].classList.add("nav-s-D");
        }
        j[j.length-1].classList.add("nav-Start-D");
    }
    else if (window.scrollY < 2){
        tlanimc.setProperty("margin-top","0vh");
        nav.style.setProperty("background-color","white");

        let s = logo.getSVGDocument().querySelectorAll(".svgClass");
        for (let i = 0; i<s.length; i++){
            s[i].style.setProperty("fill","#00241b");
        }

        let j = nav.querySelectorAll(".nav-s");
        for (let i = 0; i<j.length-1; i++){
            j[i].classList.remove("nav-s-D");
        }
        j[j.length-1].classList.remove("nav-Start-D");
    }
}*/