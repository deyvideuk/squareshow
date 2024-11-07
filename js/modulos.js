var elemento = document.getElementsByClassName('carrossel');

// Verificar se o elemento existe corretamente
// if (elemento.length == 0) {
//     clearInterval(interval);
// }

// AJAX DE WEBHOOK
if (modulo == "main") {
    $("#print").html("");
    $("#print").load('pags/init.php');
} else if (modulo == "error") {
    $("#print").html("");
    $("#print").load('pags/init.php');
    msg("Scusa! Qualcosa è andato storto.", "error");
} else if (modulo == "formSubmited") {
    $("#print").load("pags/init.php");
    msg("Modulo inviato con successo! Ti contatteremo presto.", "confirmar");
} 
else if (modulo == "changePerfilOK") {
    $("#print").load("pags/init.php");
    msg("Foto del profilo aggiornata.", "confirmar");
}
else if (modulo == "dadosAtualizados") {
    $("#print").load("pags/perfil.php");
    msg("Dati aggiornati correttamente!", "confirmar");
} else if (modulo == "dadosAtualizadosS") {
    $("#print").load("pags/init.php");
    msg("Dati aggiornati correttamente!", "confirmar");
} else if (modulo == "senhaIncorreta") {
    $("#print").load("pags/perfil.php");
    msg("password errata!", "error");
    openLogin("close");
} else if (modulo == "preenchaOsDados") {
    $("#print").load("pags/perfil.php");
    msg("compilare i dati!", "error");
} else if (modulo == "dadosAtualizadosEnd") {
    $("#print").load("pags/perfil.php");
    msg("Dati aggiornati con successo!", "confirmar");
    openLogin('close');
} else if (modulo == "dadosNaoAtualizadosEnd") {
    $("#print").load("pags/perfil.php");
    msg("Erro ao Atualizar dados.", "error");
    openLogin('close');
} else if (modulo == "senhaAtualizada") {
    $("#print").load("pags/init.php");
    msg("Dati aggiornati correttamente!", "confirmar");
    openLogin('close');
} else if (modulo == "emailNaoExiste") {
    $("#print").load("pags/esqueceuSenha.php");
    msg("E-mail non trovata", "error");
} else if (modulo == "alterarSenhaVerificacao") {
    $("#print").load("pags/codigoVerificacao.php");
} else if (modulo == "codigoErrado") {
    $("#print").load("pags/codigoVerificacao.php");
    msg("Il codice non corrisponde", "error");
} else if (modulo == "erroSenha") {
    $("#print").load("pags/alterarSenha.php");
    msg("Le password non sono le stesse", "error");
} else if (modulo == "f228b9f785273c13200d2629ce5dc4b595ee5a06") {
    $("#print").load("pags/alterarSenha.php");
} else if (modulo == "assinaturas") {
    $("#print").load("pags/perfil.php");
} else if (modulo == "compras") {
    $("#print").load("pags/perfil.php");
} else if (modulo == "eventosCriado") {
    $("#print").load("pags/perfil.php");
    msg("Evento aggiunto con successo!", "confirmar");
} else if (modulo == "eventoExcluido") {
    $("#print").load("pags/perfil.php");
    msg("Evento rimosso con successo!", "confirmar");
} else if (modulo == "eventos") {
    $("#print").load("pags/eventos/eventos.php");
} else if (modulo == "usuarios") {
    $("#print").load("pags/perfil/usuarios.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    openLogin();
}

if (modulo == "Chi-siamo") {
    $("#print").html("");
    $("#print").load('pags/quemSomos.php');
}

if (modulo == "Come-funziona") {
    $("#print").html("");
    $("#print").load('pags/comoFunciona.php');
}

if (registro == "formSubmitedOK") {
    msg("utente registrato con successo!", "confirmar");
}

// Limpar variáveis e loops
if (typeof tempoDados !== "undefined") {
    clearInterval(tempoDados);
}



    