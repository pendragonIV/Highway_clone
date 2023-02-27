document.getElementById("slide__cart__container--id").style.display="none";
let slideCart = document.getElementById("slide__cart__container--id");
function slideIn(){
    if(slideCart.style.display == "none"){
        document.getElementById("slide__cart__container--id").style.display="block";
        document.getElementById("slide__cart--id").style.animation="slideIn ease .5s";
    }
    else{
        document.getElementById("slide__cart__container--id").style.display="none";
    }
}