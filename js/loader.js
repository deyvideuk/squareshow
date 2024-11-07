
if(typeof loading == "undefined"){
    var loading = document.querySelector(".loading");
    
    function loader(event){
        if(event == "show"){
            loading.style.display = "flex !important";
        }
        else if(event == "hide"){
            loading.style.display = "none !important";
        }
    }
}else{
    function loader(event){
        if(event == "show"){
            loading.style.display = "flex !important";
        }
        else if(event == "hide"){
            loading.style.display = "none !important";
        }
    }
}

