function confirmDelete(e){
    if(confirm("¿Está seguro de que desea eliminar esta receta?")){
        return true;
    }else{
        e.preventDefault();
    }
}

function confirmModify(e){
    if(confirm("¿Está seguro de que desea modificar esta receta?")){
        return true;
    }else{
        e.preventDefault();
    }
}

let linkDelete = document.getElementsByClassName("item-link-delete");
let linkUpdate = document.getElementsByClassName("item-link-update");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmDelete);
}

for(var i = 0; i < linkUpdate.length; i++){
    linkUpdate[i].addEventListener('click', confirmModify);
}