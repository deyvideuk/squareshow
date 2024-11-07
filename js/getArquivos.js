
if(typeof inputFile == 'undefined' || typeof categoriaInput == 'undefined'){
    const inputFile = document.querySelector('#Opere');
    const preview = document.querySelector('#preview');
    const preview2 = document.getElementById('preview');
    const teste = document.querySelector('#teste');
    const areaCategoria = document.querySelector('.arquivos');
    const categoriaInput = document.querySelector('#categoria');

    

    setInterval(()=>{
        changeCategoria();
    }, 1)

    function changeCategoria(){
        if(categoriaInput.value == "Alunno/Acquirente" || categoriaInput.value == "Artisti" || categoriaInput.value == "Maestri" || categoriaInput.value == "Collezionista"){

            areaCategoria.style.height = "380px";
            areaCategoria.style.transition = "1s";
            inputFile.setAttribute('required', true);
        
            inputFile.addEventListener('change', (e)=>{
                const inputTarget = e.target;
                console.log(inputTarget.files.length);
            
                const file = inputTarget.files[0];
            
                if(file){
                    const reader = new FileReader();
            
                    reader.addEventListener('load', (e)=>{
                        const readerTarget = e.target;
                        
            
                        const img = document.createElement('img');
                        img.src = readerTarget.result;
                        img.classList.add('picture');
                        
                        if(inputTarget.files.length > 1){
                            preview.appendChild(img);
                            // teste.value = 
            
                        }else{
                            preview2.style.display = "flex";
                            preview.innerHTML = '';
                            preview.appendChild(img);
                        }
                    })
            
                    reader.readAsDataURL(file);
                }
                else{
                    preview.value = 'Escolha uma Imagem';
                }
            })
        }
        else{
            areaCategoria.style.height = "0";
            areaCategoria.style.transition = "1s";
            inputFile.removeAttribute('required', false);
        }
}
}else{

    clearInterval(tela);
    clearInterval(interval);

    setInterval(()=>{
        changeCategoria();
    }, 1)

    function changeCategoria(){
        if(categoriaInput.value == "Alluno" || categoriaInput.value == "Artisti" || categoriaInput.value == "Maestri" || categoriaInput.value == "Collezionista"){

            areaCategoria.style.height = "380px";
            areaCategoria.style.transition = "1s";
            inputFile.setAttribute('required', false);
        
            inputFile.addEventListener('change', (e)=>{
                const inputTarget = e.target;
                console.log(inputTarget.files.length);
            
                const file = inputTarget.files[0];
            
                if(file){
                    const reader = new FileReader();
            
                    reader.addEventListener('load', (e)=>{
                        const readerTarget = e.target;
                        
            
                        const img = document.createElement('img');
                        img.src = readerTarget.result;
                        img.classList.add('picture');
                        
                        if(inputTarget.files.length > 1){
                            preview.appendChild(img);
                            // teste.value = 
            
                        }else{
                            preview2.style.display = "flex";
                            preview.innerHTML = '';
                            preview.appendChild(img);
                        }
                    })
            
                    reader.readAsDataURL(file);
                }
                else{
                    preview.value = 'Escolha uma Imagem';
                }
            })
        }
        else{
            areaCategoria.style.height = "0";
            areaCategoria.style.transition = "1s";
            inputFile.removeAttribute('required', false);
        }
    }
}
