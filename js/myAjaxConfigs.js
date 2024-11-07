

if(typeof botaoHome == "undefined"){
    var botaoHome = document.querySelector('#botaoHome');
    var botaoArtisti = document.querySelector('#botaoArtisti');
    var botaoGaleria = document.querySelector('#botaoGaleria');
    var botaoFormazione = document.querySelector('#botaoFormazione');
    var botaoEventi = document.querySelector('#botaoEventi');
    var botaoTariffe = document.querySelector('#botaoTariffe');
    var botaoContatti = document.querySelector('#botaoContatti');
    var botaoConferencia = document.querySelector('.botaoConferencia');
    var botaoAprender = document.getElementById('botaoAprender');
    var areaPopup = document.querySelector('#areaPopup');
    var areaMsg = document.querySelector('#areaMsg');

    var param = new URLSearchParams(window.location.search);
    var modulo = [param.get("modulo")];
    var registro  = [param.get("registro")];
    var session_id = [param.get("session_id")];
    var plano = [param.get("plano")];
    var compras = [param.get("compras")];
    var obra = [param.get("obra")];
    var checkout = [param.get("checkout")];

    if(modulo == 0 || modulo == "main"){
        $("#print").html("");
        $("#print").load("pags/init.php");
    }
    
}



// AJAX DO MENU
$("#botaoHome").click(function() {
    $("#print").html("");
    $("#print").load("pags/init.php");
    botaoHome.setAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(0);
    openLogin('close');
});

$("#botaoArtisti").click(function() {
    $("#print").html("");
    $("#print").load("pags/artisti.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.setAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(0);
    // clearInterval(x);
    clearInterval(tela);
    clearInterval(interval);
    // delete x;
    delete tela;
    delete interval;
});

$(".botaoArtisti").click(function() {
    $("#print").html("");
    $("#print").load("pags/artisti.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.setAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(0);
    // clearInterval(x);
    clearInterval(tela);
    clearInterval(interval);
    // delete x;
    delete tela;
    delete interval;
});

$("#botaoGaleria").click(function() {
    $("#print").html("");
    $("#print").load("pags/galeria.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.setAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(0);
    // clearInterval(x);
    clearInterval(tela);
    clearInterval(interval);
    // delete x;
    delete tela;
    delete interval;
});

$("#botaoFormazione").click(function() {
    $("#print").load("pags/init.php#area-formazione");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.setAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(1150);
    
});

$("#botaoEventi").click(function() {
    $("#print").load("pags/init.php#new-banner");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.setAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(2000);
    
});


$("#botaoTariffe").click((e)=>{
    e.preventDefault();
    $("#print").html("");
    // $("#print").load("pags/tariffe.php");
    $("#print").load("pags/piani.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.setAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(350);
    openLogin('close');
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});

$(".botaoTariffe").click((e)=>{
    e.preventDefault();
    $("#print").html("");
    // $("#print").load("pags/tariffe.php");
    $("#print").load("pags/piani.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.setAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(350);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});

$("#botaoContatti").click(function() {
    $("#print").load("pags/init.php#area-contato");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.setAttribute("class", "active");
    toTop(2800);
    
});

$("#botaoAprender").click(()=>{
    $("#print").load("pags/curso.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(200);
});

$("#botaoIscriviti").click(()=>{
    $("#print").load("pags/iscriviti.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.setAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    
});

$(".botaoIscriviti").click(()=>{
    $("#print").load("pags/iscriviti.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    
});

$("#botaoRegistro").click((e)=>{
    e.preventDefault();
    $("#print").html("");
    $("#print").load("pags/iscriviti.php");
    closeMenu();
    toTop(260);
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    // clearInterval(x);
    clearInterval(tela);
    clearInterval(interval);
    // delete x;
    delete tela;
    delete interval;
});

$("#botaoEsqueceuSenha").click((e)=>{
    e.preventDefault();
    $("#print").load("pags/esqueceuSenha.php");
})
// AJAX DO MENU



// AJAX DO PERFIL
$("#botaoModificarEndereco").click(()=>{
    $("#informacoes").html("");
    $("#informacoes").load("pags/alterarEndereco.php");
});

$("#botaoAssinatura").click(()=>{
    $("#informacoes").html("");
    $("#informacoes").load("pags/alterarEndereco.php");
});
// AJAX DO EPERFIL


// AJAX DO FOOTER
$("#target1").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/consigli-acquisto.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$("#target2").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/condizioni-acquisto.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$("#target3").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/condizioni-vendita.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$("#target4").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/regole-inserzioni.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$("#target5").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/condizioni-generali.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$("#target6").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/regole-annunci.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$("#target7").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/Informativa-sulla-Privacy.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});
$(".target7").click(function() {
    $("#print").html("");
    $("#print").load("pags/regras/Informativa-sulla-Privacy.php");
    botaoHome.removeAttribute("class", "active");
    botaoArtisti.removeAttribute("class", "active");
    botaoGaleria.removeAttribute("class", "active");
    botaoFormazione.removeAttribute("class", "active");
    botaoEventi.removeAttribute("class", "active");
    botaoTariffe.removeAttribute("class", "active");
    botaoContatti.removeAttribute("class", "active");
    toTop(300);
    // clearInterval(x);
    clearInterval(tela);
    // delete x;
    delete tela;
});

// AJAX DO FOOTER
        
    