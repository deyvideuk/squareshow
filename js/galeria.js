if(typeof imgs == "undefined"){
    let mural = document.querySelector("#mural");
    let printMural = document.querySelector("#printMural");
    let showMural;
    var removeMural = document.querySelector("#removeMural");
    var areaImgs = document.getElementsByClassName(".area-img");
    var imgs = document.getElementsByClassName(".imgObras");
    var counter = 0;
    
}


$(".obras").click(function() {
    let show = $(this).find(".imgObras").clone(); // Clona o elemento em vez de removê-lo
    showMural = show;
    
    if (counter == 0) {
        counter = 1;
        mural.style.display = "flex"; // Mostra o mural
        printMural.appendChild(show[0]); // Adiciona a imagem ao mural
    }

    document.addEventListener("keyup", (e)=>{
        if(e.keyCode == '27'){
            $("#removeMural").click();
        }
    })
});

$("#removeMural").click(function() {
    counter = 0;
    mural.style.display = "none"; // Oculta o mural
    printMural.removeChild(showMural[0]); // Remove a imagem do mural
});

$("#mural").click(function() {
    $("#removeMural").click();
});





