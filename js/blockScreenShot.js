document.addEventListener('keyup', (e) =>{
    if(e.key === 'PrintScreen'){
        navigator.clipboard.writeText(' ');
        navigator.clipboard.writeText('');
        navigator.clipboard.writeText(' ');
        navigator.clipboard.writeText('');
        navigator.clipboard.writeText(' ');
        navigator.clipboard.writeText('');
    }

    
    // PROGRAMAÇÃO PARA CONTROLE DE IMAGENS
    else if(e.key == 'ArrowLeft'){
        prev();
    }
    else if(e.key == 'ArrowRight'){
        next();
    }
    // PROGRAMAÇÃO PARA CONTROLE DE IMAGENS
})