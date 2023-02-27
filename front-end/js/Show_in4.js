var x = document.getElementById("content__container__item__in4__more--text-id");
x.style.display = "none";
function ShowIn4(){
    if(x.style.display == "none" && y.style.display == "none"){
        document.getElementById("content__container__item__in4__more--text-id").style.display = "block";
    }
    else if (x.style.display == "none" && y.style.display == "block"){
        document.getElementById("content__container__item__in4__more--text-id").style.display = "block";
        document.getElementById("content__container__item__in4__more--text-id2").style.display = "none";
    }
    else {
        document.getElementById("content__container__item__in4__more--text-id").style.display = "none";
    }
};

var y = document.getElementById("content__container__item__in4__more--text-id2");
y.style.display = "none";
function ShowIn4_2(){
    if(x.style.display == "none" && y.style.display == "none"){
        document.getElementById("content__container__item__in4__more--text-id2").style.display = "block";
    }
    else if (y.style.display == "none" && x.style.display == "block"){
        document.getElementById("content__container__item__in4__more--text-id2").style.display = "block";
        document.getElementById("content__container__item__in4__more--text-id").style.display = "none";
    }
    else {
        document.getElementById("content__container__item__in4__more--text-id2").style.display = "none";
    }
};

var z = document.getElementById("content__container__item__in4__more--text-id3");
z.style.display = "none";
function ShowIn4_3(){
    if(z.style.display == "none" && g.style.display == "none"){
        document.getElementById("content__container__item__in4__more--text-id3").style.display = "block";
    }
    else if (z.style.display == "none" && g.style.display == "block"){
        document.getElementById("content__container__item__in4__more--text-id3").style.display = "block";
        document.getElementById("content__container__item__in4__more--text-id4").style.display = "none";
    }
    else {
        document.getElementById("content__container__item__in4__more--text-id3").style.display = "none";
    }
};

var g = document.getElementById("content__container__item__in4__more--text-id4");
g.style.display = "none";
function ShowIn4_4(){
    if(z.style.display == "none" && g.style.display == "none"){
        document.getElementById("content__container__item__in4__more--text-id4").style.display = "block";
    }
    else if (g.style.display == "none" && z.style.display == "block"){
        document.getElementById("content__container__item__in4__more--text-id4").style.display = "block";
        document.getElementById("content__container__item__in4__more--text-id3").style.display = "none";
    }
    else {
        document.getElementById("content__container__item__in4__more--text-id4").style.display = "none";
    }
};