
function changePerfil(e){
    if(typeof inputPerfil == 'undefined' || typeof categoriaInput == 'undefined'){
        const preview = document.querySelector('#preview');
        document.querySelector("#change-confirma").style.display = "flex";
    
        // const inputTarget = e.files[0];
            // console.log(inputTarget);
        
            const file = e.files[0];
        
            if(file){
                const reader = new FileReader();
        
                reader.addEventListener('load', (e)=>{
                    const readerTarget = e.target;
                    
        
                    const img = document.createElement('img');
                    img.src = readerTarget.result;
                    img.classList.add('picture');
                    
                    if(e.files > 1){
                        preview.appendChild(img);
                        
                        // teste.value = 
        
                    }else{
                        preview.style.display = "flex";
                        preview.innerHTML = '';
                        preview.appendChild(img);
                    }
                });

                reader.readAsDataURL(file);
            }
        }
                
}

function changeCapaEventos(e){
    if(typeof inputPerfil == 'undefined' || typeof categoriaInput == 'undefined'){
        const preview = document.querySelector('#preview_capa_eventos');
    
        // const inputTarget = e.files[0];
            // console.log(inputTarget);
        
            const file = e.files[0];
        
            if(file){
                const reader = new FileReader();
        
                reader.addEventListener('load', (e)=>{
                    const readerTarget = e.target;
                    
        
                    const img = document.createElement('img');
                    img.src = readerTarget.result;
                    img.classList.add('picture_capa_eventos');
                    
                    if(e.files > 1){
                        preview.appendChild(img);
                        
                        // teste.value = 
        
                    }else{
                        preview.style.display = "flex";
                        preview.innerHTML = '';
                        preview.appendChild(img);
                    }
                });

                reader.readAsDataURL(file);
            }
        }
                
}

function changeBannerEventos(e){
    if(typeof inputPerfil == 'undefined' || typeof categoriaInput == 'undefined'){
        const preview = document.querySelector('#preview_banner_eventos');
    
        // const inputTarget = e.files[0];
            // console.log(inputTarget);
        
            const file = e.files[0];
        
            if(file){
                const reader = new FileReader();
        
                reader.addEventListener('load', (e)=>{
                    const readerTarget = e.target;
                    
        
                    const img = document.createElement('img');
                    img.src = readerTarget.result;
                    img.classList.add('picture_banner_eventos');
                    
                    if(e.files > 1){
                        preview.appendChild(img);
                        
                        // teste.value = 
        
                    }else{
                        preview.style.display = "flex";
                        preview.innerHTML = '';
                        preview.appendChild(img);
                    }
                });

                reader.readAsDataURL(file);
            }
        }
                
}
