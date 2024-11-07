
if(typeof inpTel == 'undefined' || typeof pais == 'undefined'){
    var inpTel = document.getElementById('telefone');
    var inpTelUser = document.getElementsByClassName('telefone-user');
    var pais = document.getElementById('pais');
    var Flag = document.getElementById('flag');
    var Tecla;
    // const onFocus = false;


    var getPhone = setInterval(() => {
        if(inpTel.value.length < 3){
            changePais();
        }
    }, 1);

    document.addEventListener('keydown', (tecla)=>{
        Tecla = tecla.key;
    });

    function changePais(){
        if(pais.value === ""){
            // inpTel.placeholder = "Seleziona un Paese";
            inpTel.setAttribute('disabled', true);
            inpTel.style.cursor = "not-allowed";
            inpTel.value = '';
            Flag.setAttribute('src', '');
        }
        if(pais.value == "China"){
            inpTel.removeAttribute('disabled');
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '';
            inpTel.value = '+86';
            inpTel.setAttribute('minlength', '14');
            inpTel.setAttribute('maxlength', '14');
            Flag.setAttribute('src', 'img/paises/Flag_of_the_Peoples_Republic_of_China.webp');
        }
        if(pais.value == "Brasil"){
            inpTel.removeAttribute('disabled');
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '+55';
            inpTel.setAttribute('minlength', '14');
            inpTel.setAttribute('maxlength', '14');
            Flag.setAttribute('src', 'img/paises/Flag_of_Brazil.webp');
        }
        if(pais.value == "Italia"){
            inpTel.removeAttribute('disabled');
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.value = '+39';
            inpTel.style.cursor = "text";
            inpTel.setAttribute('minlength', '13');
            inpTel.setAttribute('maxlength', '13');
            Flag.setAttribute('src', 'img/paises/Flag_of_Italy.webp');
        }
        if(pais.value == "Russia"){
            inpTel.removeAttribute('disabled', true);
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '+7';
            inpTel.setAttribute('minlength', '12');
            inpTel.setAttribute('maxlength', '12');
            Flag.setAttribute('src', 'img/paises/Flag_of_Russia.webp');
        }
        if(pais.value == "Repubblica_Dominicana"){
            inpTel.removeAttribute('disabled', true);
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '+1';
            inpTel.setAttribute('minlength', '12');
            inpTel.setAttribute('maxlength', '12');
            Flag.setAttribute('src', 'img/paises/Flag_of_the_Dominican_Republic.webp'); 
        }
        
    }
}else{
    var inpTel = document.getElementById('telefone');
    var inpTelUser = document.getElementsByClassName('telefone-user');
    var pais = document.getElementById('pais');
    var Flag = document.getElementById('flag');
    var Tecla;

    var getPhone = setInterval(() => {
        if(inpTel.value.length < 3){
            changePais();
        }
    }, 1);

    document.addEventListener('keydown', (tecla)=>{
        Tecla = tecla.key;
    });

    function changePais(){
        if(pais.value === ""){
            // inpTel.placeholder = "Seleziona un Paese";
            inpTel.setAttribute('disabled', true);
            inpTel.style.cursor = "not-allowed";
            inpTel.value = '';
            Flag.setAttribute('src', '');
        }
        if(pais.value == "China"){
            inpTel.removeAttribute('disabled');
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '';
            inpTel.value = '+86';
            inpTel.setAttribute('minlength', '15');
            inpTel.setAttribute('maxlength', '15');
            Flag.setAttribute('src', 'img/paises/Flag_of_the_Peoples_Republic_of_China.webp');
        }
        if(pais.value == "Brasil"){
            inpTel.removeAttribute('disabled');
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '+55';
            inpTel.setAttribute('minlength', '14');
            inpTel.setAttribute('maxlength', '14');
            Flag.setAttribute('src', 'img/paises/Flag_of_Brazil.webp');
        }
        if(pais.value == "Italia"){
            inpTel.removeAttribute('disabled');
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.value = '+39';
            inpTel.style.cursor = "text";
            inpTel.setAttribute('minlength', '13');
            inpTel.setAttribute('maxlength', '13');
            Flag.setAttribute('src', 'img/paises/Flag_of_Italy.webp');
        }
        if(pais.value == "Russia"){
            inpTel.removeAttribute('disabled', true);
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '+7';
            inpTel.setAttribute('minlength', '12');
            inpTel.setAttribute('maxlength', '12');
            Flag.setAttribute('src', 'img/paises/Flag_of_Russia.webp');
        }
        if(pais.value == "Repubblica_Dominicana"){
            inpTel.removeAttribute('disabled', true);
            inpTel.setAttribute('required', true);
            inpTel.focus();
            inpTel.style.cursor = "text";
            inpTel.value = '+1';
            inpTel.setAttribute('minlength', '12');
            inpTel.setAttribute('maxlength', '12');
            Flag.setAttribute('src', 'img/paises/Flag_of_the_Dominican_Republic.webp'); 
        }
        
    }
}
