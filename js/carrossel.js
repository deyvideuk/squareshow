
if(typeof imgs == 'undefined' || typeof img == 'undefined' || typeof idx == 'undefined'){ 
    //typeof interval == 'undefined'
    const imgs = document.getElementById("img");
    const img = document.querySelectorAll("#img img");
    const valueMax = document.getElementById("img").ariaValueMax;
    const valueMin = document.getElementById("img").ariaValueMin;
    const classeCarrossel = document.querySelector(".carrossel");
    let idx = 0;
    let carrosselWidth;
    
    if(typeof classeCarrossel != 'undefined'){
        var tela = setInterval(() => {
            const width = classeCarrossel.clientWidth;
            carrosselWidth = width; 
        }, 100);
    }

    clearInterval(interval);
    var interval = setInterval(carrossel, 9000);

    function carrossel(){
        if(typeof carrosselWidth != "undefined"){
            const carrosselWidth = document.querySelector("#carrossel").clientWidth;
            idx++;
            if(idx > img.length - 1){
                idx = 0;
            }

            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
        }
    }

    function next(){
        if(idx == valueMax){
            idx = 0;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }else{
            idx++;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }
    }

    function prev(){
        if(idx == valueMin){
            idx = valueMax;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }else{
            idx--;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }
    }
}
else{
    clearInterval(interval);
    interval = setInterval(carrossel, 2700);

    function carrossel(){
        const carrosselWidth = document.querySelector("#carrossel").clientWidth;
        idx++;
        if(idx > img.length - 1){
            idx = 0;
        }

        imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
    }

    function next(){
        if(idx == valueMax){
            idx = 0;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }else{
            idx++;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }
    }

    function prev(){
        if(idx == valueMin){
            idx = valueMax;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }else{
            idx--;
            clearInterval(interval);
            imgs.style.transform = `translateX(${-idx * carrosselWidth}px)`;
            interval = setInterval(carrossel, 10000);
        }
    }
}

