"use script"
    var menu = document.querySelector("nav");
    var botaoMenu = menu.querySelector("h2");
        
    
    menu.style.maxHeight = "3em";
    
    
    botaoMenu.addEventListener("click", function(){
        if(menu.style.maxHeight == "3em"){
			menu.style.background="rgba(0,81,140,0.85)";
            menu.style.maxHeight = "30em";
            menu.style.textTransform = "2s";
            botaoMenu.innerHTML = "x";            
        }else{
			menu.style.background="none";
            menu.style.maxHeight = "3em"
            botaoMenu.innerHTML = "&equiv;"
        }        
   
    });