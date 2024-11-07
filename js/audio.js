
if(typeof (squarePopup) == "undefined" || typeof (circlePopup) == "undefined" || typeof (circlePopupIcone) == "undefined" || typeof (audioControls) == "undefined"){
    const squarePopup = document.querySelector('.square-popup');
    const circlePopup = document.querySelector('.circle-popup');
    const circlePopupIcone = document.querySelector('.circle-popup-icone');
    const audioControls = document.getElementById('myAudio');
    const btnSim = document.getElementById('btn-sim');
    const btnNao = document.getElementById('btn-nao');


    myInterval = setInterval(showPopup,2000);
    let song = 0;

    function showPopup(){
        squarePopup.style.right = "30px";
        squarePopup.style.transition = "1s";
    }

    function changeSong(){
        if(song == 0){
            song = 1;
            playSong();
        }else{
            song = 0;
            stopSong();
        }
    }

    function playSong(){
        audioControls.play();
        squarePopup.style.padding = "0px";
        squarePopup.style.height = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.border = "none";
        squarePopup.style.boxShadow = "none";
        squarePopup.style.transition = "1s";
        circlePopup.style.display = "flex";
        circlePopupIcone.setAttribute('src', 'img/icones/music-on.png');
        circlePopupIcone.style.animation = "pulso 0.6s linear infinite";
        clearInterval(myInterval);
        
    }

    function stopSong(){
        audioControls.pause();
        squarePopup.style.padding = "0px";
        squarePopup.style.height = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.border = "none";
        squarePopup.style.boxShadow = "none";
        squarePopup.style.transition = "1s";
        squarePopup.style.display = "none";
        circlePopup.style.display = "flex";
        circlePopupIcone.setAttribute('src', 'img/icones/music-stop.png');
        circlePopupIcone.style.animation = "none";
        clearInterval(myInterval);
    }

    function closePopup(){
        audioControls.pause();
        squarePopup.style.padding = "0px";
        squarePopup.style.height = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.border = "none";
        squarePopup.style.boxShadow = "none";
        squarePopup.style.transition = "1s";
        circlePopup.style.display = "flex";
        circlePopupIcone.setAttribute('src', 'img/icones/music-stop.png');
        circlePopupIcone.style.animation = "none";
        clearInterval(myInterval);
    }

    
    function selectOption(options){
        if(options == 0){
            btnSim.setAttribute("class", "active");
            btnNao.removeAttribute("class", "active");
        }else if(options == 1){
            btnSim.removeAttribute("class", "active");
            btnNao.setAttribute("class", "active");
        }
    }
}else{
    myInterval = setInterval(showPopup,2000);
    let song = 0;

    function showPopup(){
        squarePopup.style.right = "30px";
        squarePopup.style.transition = "1s";
    }

    function changeSong(){
        if(song == 0){
            song = 1;
            playSong();
        }else{
            song = 0;
            stopSong();
        }
    }

    function playSong(){
        audioControls.play();
        squarePopup.style.padding = "0px";
        squarePopup.style.height = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.border = "none";
        squarePopup.style.boxShadow = "none";
        squarePopup.style.transition = "1s";
        circlePopup.style.display = "flex";
        circlePopupIcone.setAttribute('src', 'img/icones/music-on.png');
        circlePopupIcone.style.animation = "pulso 0.6s linear infinite";
        clearInterval(myInterval);
        
    }

    function stopSong(){
        audioControls.pause();
        squarePopup.style.padding = "0px";
        squarePopup.style.height = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.border = "none";
        squarePopup.style.boxShadow = "none";
        squarePopup.style.transition = "1s";
        squarePopup.style.display = "none";
        circlePopup.style.display = "flex";
        circlePopupIcone.setAttribute('src', 'img/icones/music-stop.png');
        circlePopupIcone.style.animation = "none";
        clearInterval(myInterval);
    }

    function closePopup(){
        audioControls.pause();
        squarePopup.style.padding = "0px";
        squarePopup.style.height = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.width = "0px";
        squarePopup.style.border = "none";
        squarePopup.style.boxShadow = "none";
        squarePopup.style.transition = "1s";
        circlePopup.style.display = "flex";
        circlePopupIcone.setAttribute('src', 'img/icones/music-stop.png');
        circlePopupIcone.style.animation = "none";
        clearInterval(myInterval);
    }
    
    function selectOption(options){
        if(options == 0){
            btnSim.setAttribute("class", "active");
            btnNao.removeAttribute("class", "active");
        }else if(options == 1){
            btnSim.removeAttribute("class", "active");
            btnNao.setAttribute("class", "active");
        }
    }
}


