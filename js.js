
let modales = document.querySelectorAll(".modale"); 

modales.forEach((modale) => {

    modale.addEventListener("click" , function (){
        let id = this.dataset.id;
    if (confirm("Do you want to delete the animal?")){
        window.location.href="./process/animal/process_delete_animal.php?id_Animal="+id
    }
    })
});

