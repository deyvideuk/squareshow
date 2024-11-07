if(typeof interval != "undefined"){
    clearInterval(interval);
}

if(typeof senhaAtual == "undefined"){
    const senhaAtual = document.querySelector('#senha-atual');
    const nome = document.querySelector('#nome');
    const pais = document.querySelector('#pais');
    const telefone = document.querySelector('#telefone');
    const botaoSubmit = document.querySelector('#atualizar-dados');

    if(typeof tempoDados != "undefined"){
        var tempoDados = setInterval(() => {
            if(senhaAtual.value.length < 1){
                bloqueaBotao();
            }else{
                desbloquearBotao();
            }
        }, 300);
    }else{
        clearInterval(tempoDados);
    }

    function bloqueaBotao(){
        senhaAtual.style.border = "1px solid var(--laranja)";

        nome.setAttribute("disabled", true);
        nome.setAttribute("class", "inativo");
        nome.style.cursor = "not-allowed";
        
        pais.setAttribute("disabled", true);
        pais.setAttribute("class", "inativo");
        pais.style.cursor = "not-allowed";
        
        telefone.setAttribute("disabled", true);
        telefone.setAttribute("class", "inativo");
        telefone.style.cursor = "not-allowed";

        botaoSubmit.setAttribute("disabled", true);
        botaoSubmit.setAttribute("class", "inativo");
        botaoSubmit.style.cursor = "not-allowed";
    }

    function desbloquearBotao(){
        senhaAtual.style.border = "1px solid var(--gray-fraco)";
        
        nome.removeAttribute("disabled", true);
        nome.removeAttribute("class", "inativo");
        nome.style.cursor = "text";
        
        pais.removeAttribute("disabled", true);
        pais.removeAttribute("class", "inativo");
        pais.style.cursor = "pointer";
        
        telefone.removeAttribute("disabled", true);
        telefone.removeAttribute("class", "inativo");
        telefone.style.cursor = "text";

        botaoSubmit.removeAttribute("disabled", true);
        botaoSubmit.removeAttribute("class", "inativo");
        botaoSubmit.style.cursor = "pointer";
    }
}else{
    var tempoDados = setInterval(() => {
        if(senhaAtual.value.length < 1){
            bloqueaBotao();
        }else{
            desbloquearBotao();
        }
    }, 300);

    function bloqueaBotao(){
        senhaAtual.style.border = "1px solid var(--laranja)";

        nome.setAttribute("disabled", true);
        nome.setAttribute("class", "inativo");
        nome.style.cursor = "not-allowed";
        
        pais.setAttribute("disabled", true);
        pais.setAttribute("class", "inativo");
        pais.style.cursor = "not-allowed";
        
        telefone.setAttribute("disabled", true);
        telefone.setAttribute("class", "inativo");
        telefone.style.cursor = "not-allowed";
    
        botaoSubmit.setAttribute("disabled", true);
        botaoSubmit.setAttribute("class", "inativo");
        botaoSubmit.style.cursor = "not-allowed";
    }

    function desbloquearBotao(){
        senhaAtual.style.border = "1px solid var(--gray-fraco)";
        
        nome.removeAttribute("disabled", true);
        nome.removeAttribute("class", "inativo");
        nome.style.cursor = "text";
        
        pais.removeAttribute("disabled", true);
        pais.removeAttribute("class", "inativo");
        pais.style.cursor = "pointer";
        
        telefone.removeAttribute("disabled", true);
        telefone.removeAttribute("class", "inativo");
        telefone.style.cursor = "text";

        botaoSubmit.removeAttribute("disabled", true);
        botaoSubmit.removeAttribute("class", "inativo");
        botaoSubmit.style.cursor = "pointer";
    }
    
}
