if(typeof countData == 'undefined' || data == 'undefined'){
    const countData = "feb 28, 2024 12:00:00";
    const data = "__/__/2024";
    const valor = 49.99 + ' &euro;';
    const gratis = 'Gratuito'; 
    const show = document.querySelector('.valor');

    if(typeof countdownInner == 'undefined' || dataInner == 'undefined'){
      var countDownDate = new Date(countData).getTime();

    show.innerHTML = gratis;

    var x = setInterval(()=>{

    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    document.getElementById("data").innerHTML = data;
      // erro no codigo ao entrar na pagina de eventos


    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "Non ci sono eventi in programma:";
      document.getElementById("data").innerHTML = data;
    }
    

  }, 1000);
    }
}
else{
  var countDownDate = new Date(countData).getTime();

    show.innerHTML = gratis;

    var x = setInterval(()=>{

    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    document.getElementById("data").innerHTML = data;



    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "Non ci sono eventi in programma:";
      document.getElementById("data").innerHTML = data;
    }
    
  }, 1000);
}






