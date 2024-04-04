const item = document.querySelectorAll(".item");
let i=0;
document.addEventListener("keyup", e=>{
    if(e.target.matches("#buscador")){
        document.querySelectorAll(".titulo-item").forEach(elemento =>{
            if(elemento.textContent.toLowerCase().includes(e.target.value.toLowerCase())){
                item[i].classList.remove("filtro");
            }
            else{
                item[i].classList.add("filtro");
            }
            i=i+1;
        }
        )
        i=0;
    }
})