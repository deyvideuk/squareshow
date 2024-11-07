if(typeof formatCurrency == "undefined"){

    var formatCurrency = (value, currency, localeString) => {
        const options = { style: "currency", currency };
        var moeda = (parseInt(value).toLocaleString(localeString, options));
        if(value == "undefined" || value == 0){
            document.getElementById('preco_eventos').value = toString("Gratuito");
        }else{
            document.getElementById('preco_eventos').value = moeda;
        }
        
      }
      
}else{
    formatCurrency = (value, currency, localeString) => {
        const options = { style: "currency", currency };
        var moeda = (parseInt(value).toLocaleString(localeString, options));
        if(value == "" || value == 0){
            document.getElementById('preco_eventos').value = 'Gratuito';
        }else{
            document.getElementById('preco_eventos').value = moeda;
        }
      }
}




if(typeof areaLogin == 'undefined' ||  typeof eyes1 == 'undefined'){
    // const btnLogin = document.getElementById('btn-login');
    var areaLogin = document.getElementById('area-login');
    var formLogin = document.getElementById('form-login');
    const cetaJogar = document.getElementById('jogar');
    const cetaJogar2 = document.getElementById('jogar2');
    const password = document.getElementById('password');
    const password1 = document.getElementById('password1');
    const password2 = document.getElementById('password2');
    const atualPassword = document.getElementById('senha-atual');
    const subMenu = document.querySelector('#sub-menu');
    const password3 = document.getElementById('password3');
    const password4 = document.getElementById('password4');
    const eyes = document.getElementById('olho');
    const eyes1 = document.getElementById('olho1');
    const eyes2 = document.getElementById('olho2');
    const eyes3 = document.getElementById('olho3');

    let count = 0;
    let count2 = 0;
    let showEyes = 0;
    let showEyes1 = 0;
    let showEyes2 = 0;
    let showEyes3 = 0;


    function openMenu(){
        let tela = document.querySelector("#menu").clientWidth;
        const menu = document.getElementById('menu');
        const iconMenu = document.getElementById('area-icone-menu');
        const nav = document.getElementById('nav');

        if(tela <= 905){
            menu.style.backgroundColor = "rgba(0, 0, 0, 0.800)";
            menu.style.zIndex = "3";
            menu.style.justifyContent = "start";
            nav.style.left = "0";
            iconMenu.style.display = "none";
        }
        else{
            iconMenu.style.display = "none";
        }
    
    }

    function closeMenu(){
        let tela = document.querySelector("#menu").clientWidth;
        const menu = document.getElementById('menu');
        const iconMenu = document.getElementById('area-icone-menu');
        const nav = document.getElementById("nav");

        if(tela <= 905){
            menu.style.backgroundColor = "transparent";
            menu.style.zIndex = "-1";
            nav.style.left = "-900px";
            nav.style.zIndex = "0";
            iconMenu.style.display = "flex";
        }
    }

    function openLogin(event){
        let tela = document.querySelector("#menu").clientWidth;
        if(event == "open"){
            if(tela <= 905){
                areaLogin.style.display = "flex !important";
                areaLogin.style.height = "max-content";
                areaLogin.style.padding = "20px";
                formLogin.style.height = "max-content";
                // formLogin.style.right = "0 !important";
                // areaLogin.style.right = "0 !important";
                cetaJogar.style.transform = `rotateZ(-90deg)`;
                areaLogin.style.transition = "0.5s ease-in-out";
                
                }else{
                    areaLogin.style.display = "flex !important";
                    areaLogin.style.height = "max-content";
                    // areaLogin.style.padding = "20px";
                    formLogin.style.height = "max-content";
                    cetaJogar.style.transform = `rotateZ(-90deg)`;
                    areaLogin.style.transition = "0.5s ease-in-out";
                }
        }
        else if(event == "close"){
            areaLogin.style.display = "none !important";
            areaLogin.style.height = "0";
            // areaLogin.style.padding = "0";
            formLogin.style.height = "0px";
            cetaJogar.style.transform = `rotateZ(90deg)`;
            areaLogin.style.transition = "0.5s ease-in-out";
            // areaLogin.style.border = "none";
            // password.style.border = "none";
        }
        else{
            if(count < 1){
                count = 1;
                if(tela <= 905){
                    areaLogin.style.display = "flex !important";
                    areaLogin.style.height = "max-content";
                    formLogin.style.height = "max-content";
                    // areaLogin.style.padding = "20px";
                    cetaJogar.style.transform = `rotateZ(-90deg)`;
                    areaLogin.style.transition = "0.5s ease-in-out";
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                        });
                }
                else{
                    areaLogin.style.display = "flex !important";
                    areaLogin.style.height = "max-content";
                    formLogin.style.height = "max-content";
                    // areaLogin.style.padding = "20px";
                    cetaJogar.style.transform = `rotateZ(-90deg)`;
                    areaLogin.style.transition = "0.5s ease-in-out";
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                        });
                }
            }
            else{
                count = 0
                areaLogin.style.display = "none !important";
                areaLogin.style.height = "0";
                areaLogin.style.padding = "0";
                formLogin.style.height = "0";
                areaLogin.style.left = "calc(100% - 166%);";
                cetaJogar.style.transform = `rotateZ(90deg)`;
                areaLogin.style.transition = "0.5s ease-in-out";
                // arealogin.style.border = "none";
                // password.style.border = "none";
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                    });
            }
        }
    }

    openLogin('close');

    function openSubMenu(){
        if(count2 == 0){
            subMenu.style.display = "flex";
            count2 = 1;
            cetaJogar2.style.transform = `rotateZ(-90deg)`;
        }else{
            subMenu.style.display = "none";
            count2 = 0;
            cetaJogar2.style.transform = `rotateZ(90deg)`;
        }
        botaoHome.removeAttribute("class", "active");
        botaoArtisti.removeAttribute("class", "active");
        botaoFormazione.removeAttribute("class", "active");
        botaoEventi.removeAttribute("class", "active");
        botaoTariffe.removeAttribute("class", "active");
        botaoContatti.removeAttribute("class", "active");
    }

    function closeSubMenu(){
        subMenu.style.display = "none";
        count2 = 0;
        cetaJogar2.style.transform = `rotateZ(90deg)`;
    }

    function showPassword(event){
        if(event == 1){
            if(showEyes != "undefined"){
                if(showEyes == 0){
                    password.setAttribute("type", "text");
                    eyes.setAttribute("src", "img/icones/olho-aberto-preto.png");
                    showEyes = 1;
                }else{
                    password.setAttribute("type", "password");
                    eyes.setAttribute("src", "img/icones/olho-fechado-preto.png");
                    showEyes = 0;
                }
            }
        }
        else if(event == 2){
            console.log(showEyes1);
            if(typeof showEyes1 != "undefined"){
                if(showEyes1 == 0){
                    password1.setAttribute("type", "text");
                    password2.setAttribute("type", "text");
                    eyes1.setAttribute("src", "img/icones/olho-aberto-branco.png");
                    showEyes1 = 1;
                }else{
                    password1.setAttribute("type", "password");
                    password2.setAttribute("type", "password");
                    eyes1.setAttribute("src", "img/icones/olho-fechado-branco.png");
                    showEyes1 = 0;
                }
            }
        }
        else if(event == 3){
            if(showEyes2 != "undefined"){
                if(showEyes2 == 0){
                    password.setAttribute("type", "text");
                    eyes2.setAttribute("src", "img/icones/olho-aberto-preto.png");
                    showEyes2 = 1;
                }else{
                    password.setAttribute("type", "password");
                    eyes2.setAttribute("src", "img/icones/olho-fechado-preto.png");
                    showEyes2 = 0;
                }
            }
        }
        else if(event == 4){
            if(showEyes3 != "undefined"){
                if(showEyes3 == 0){
                    password3.setAttribute("type", "text");
                    password4.setAttribute("type", "text");
                    eyes3.setAttribute("src", "img/icones/olho-aberto-preto.png");
                    showEyes3 = 1;
                }else{
                    password3.setAttribute("type", "password");
                    password4.setAttribute("type", "password");
                    eyes3.setAttribute("src", "img/icones/olho-fechado-preto.png");
                    showEyes3 = 0;
                }
            }
        }
    }
    
    function isEnter(){
        const btn = document.getElementById("submit-login");
        document.addEventListener("keypress", (e)=>{
            if(e.key == "Enter"){
                e.preventDefault();
            }
        });
    }

}

else{
    areaLogin = document.getElementById('area-login');
    formLogin = document.getElementById('form-login');
    cetaJogar = document.getElementById('jogar');
    password = document.getElementById('password');
    password1 = document.getElementById('password1');
    password2 = document.getElementById('password2');
    atualPassword = document.getElementById('senha-atual');
    password3 = document.getElementById('password3');
    password4 = document.getElementById('password4');
    eyes = document.getElementById('olho');
    eyes1 = document.getElementById('olho1');
    eyes2 = document.getElementById('olho2');
    eyes3 = document.getElementById('olho3');

    count = 0;
    showEyes = 0;
    showEyes1 = 0;
    showEyes2 = 0;
    showEyes3 = 0;


    function openMenu(){
        let tela = document.querySelector("#menu").clientWidth;
        const menu = document.getElementById('menu');
        const iconMenu = document.getElementById('area-icone-menu');
        const nav = document.getElementById('nav');

        if(tela <= 679){
            menu.style.backgroundColor = "rgba(0, 0, 0, 0.800)";
            menu.style.zIndex = "3";
            menu.style.justifyContent = "start";
            nav.style.left = "0";
            iconMenu.style.display = "none";
        }
        else{
            iconMenu.style.display = "none";
        }
    
    }

    function closeMenu(){
        let tela = document.querySelector("#menu").clientWidth;
        const menu = document.getElementById('menu');
        const iconMenu = document.getElementById('area-icone-menu');
        const nav = document.getElementById("nav");

        if(tela < 680){
            menu.style.backgroundColor = "transparent";
            menu.style.zIndex = "0";
            nav.style.left = "-650px";
            nav.style.zIndex = "0";
            iconMenu.style.display = "flex";

        }
    }

    function openLogin(event){
        let tela = document.querySelector("#menu").clientWidth;
        if(event == "open"){
            if(tela <= 800){
                areaLogin.style.height = "max-content";
                // areaLogin.style.padding = "20px";
                formLogin.style.height = "max-content";
                // formLogin.style.right = "0 !important";
                // areaLogin.style.right = "0 !important";
                cetaJogar.style.transform = `rotateZ(-90deg)`;
                areaLogin.style.transition = "0.5s ease-in-out";
                
                }else{
                    areaLogin.style.height = "max-content";
                    // areaLogin.style.padding = "20px";
                    formLogin.style.height = "max-content";
                    cetaJogar.style.transform = `rotateZ(-90deg)`;
                    areaLogin.style.transition = "0.5s ease-in-out";
                }
        }
        else if(event == "close"){
            areaLogin.style.height = "0";
            // areaLogin.style.padding = "0";
            formLogin.style.height = "0px";
            cetaJogar.style.transform = `rotateZ(90deg)`;
            areaLogin.style.transition = "0.5s ease-in-out";
            // areaLogin.style.border = "none";
            // password.style.border = "none";
        }
        else{
            if(count < 1){
                count = 1;
                if(tela <= 800){
                    areaLogin.style.disply = "flex !important";
                    areaLogin.style.height = "max-content";
                    // areaLogin.style.padding = "20px";
                    cetaJogar.style.transform = `rotateZ(-90deg)`;
                    areaLogin.style.transition = "0.5s ease-in-out";
                    
                }
                else{
                    areaLogin.style.height = "max-content";
                    // areaLogin.style.padding = "20px";
                    cetaJogar.style.transform = `rotateZ(-90deg)`;
                    areaLogin.style.transition = "0.5s ease-in-out";
                }
            }
            else{
                count = 0
                areaLogin.style.display = "none !important";
                areaLogin.style.height = "0";
                // areaLogin.style.padding = "0";
                areaLogin.style.left = "calc(100% - 166%);";
                cetaJogar.style.transform = `rotateZ(90deg)`;
                areaLogin.style.transition = "0.5s ease-in-out";
                // arealogin.style.border = "none";
                // password.style.border = "none";
            }
        }
    }

    function showPassword(event){
        if(event == 1){
            if(showEyes == 0){
                password.setAttribute("type", "text");
                eyes.setAttribute("src", "img/icones/olho-aberto-preto.png");
                showEyes = 1;
            }else{
                password.setAttribute("type", "password");
                eyes.setAttribute("src", "img/icones/olho-fechado-preto.png");
                showEyes = 0;
            }
        }
        else if(event == 2){
            if(showEyes1 == 0){
                password1.setAttribute("type", "text");
                password2.setAttribute("type", "text");
                eyes1.setAttribute("src", "img/icones/olho-aberto-branco.png");
                showEyes1 = 1;
            }else{
                password1.setAttribute("type", "password");
                password2.setAttribute("type", "password");
                eyes1.setAttribute("src", "img/icones/olho-fechado-branco.png");
                showEyes1 = 0;
            }
        }
        else if(event == 3){
            if(showEyes2 == 0){
                password.setAttribute("type", "text");
                eyes2.setAttribute("src", "img/icones/olho-aberto-preto.png");
                showEyes2 = 1;
            }else{
                password.setAttribute("type", "password");
                eyes2.setAttribute("src", "img/icones/olho-fechado-preto.png");
                showEyes2 = 0;
            }
        }
    }
}








