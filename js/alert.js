
if(typeof popup == "undefined"){
    var popup = document.getElementById("popup");
    var texto = document.getElementById("texto");
    var popupImg = document.getElementById("popupImg");
}else{
    popup = document.getElementById("popup");
    texto = document.getElementById("texto");
    popupImg = document.getElementById("popupImg");
}

 function msg(msg, tipo){
    if(msg){
        if(tipo == "confirmar"){
            popup.style.display = "flex";
            texto.innerHTML = msg;
            popup.setAttribute("class", "popup");
            popupImg.setAttribute("src", "img/icones/v.png");
            setTimeout(() => {
                texto.innerHTML = "";
                popup.removeAttribute("class", "popup");
                popupImg.removeAttribute("src", "img/icones/v.png");
                popup.style.display = "none";
            }, 8000);
        }else if(tipo == "error"){
            popup.style.display = "flex";
            texto.innerHTML = msg;
            popup.setAttribute("class", "popup popup-danger");
            popupImg.setAttribute("src", "img/icones/x.png");
            setTimeout(() => {
                texto.innerHTML = "";
                popup.removeAttribute("class", "popup popup-danger");
                popupImg.removeAttribute("src", "img/icones/x.png");
                popup.style.display = "none";
            }, 8000);
        }
    }
}