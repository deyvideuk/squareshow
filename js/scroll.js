src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js";

function toTop(event){
  const tela = document.getElementById("body").clientWidth;
  
  if(typeof(event) != "string"){
    if(tela <= 600){
      window.scrollTo({
        top: event,
        behavior: 'smooth'
        });
    }
    else{
      window.scrollTo({
        top: event,
        behavior: 'smooth'
        });
    }
  }//else{
  //   var el = event;
  //   var cordenadas = el.getBoundingClientRect();
  //   console.log(cordenadas);
  //   if(tela <= 600){
  //     window.scrollTo({
  //       top: elemento.y,
  //       behavior: 'smooth'
  //       });
  //   }
  //   else{
  //     window.scrollTo({
  //       top: elemento.y,
  //       behavior: 'smooth'
  //       });
  //   }
  // }

  
}

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

