//delete Animal

let modales = document.querySelectorAll(".modale"); 

modales.forEach((modale) => {

    modale.addEventListener("click" , function (){
        let id = this.dataset.id;
    if (confirm("Do you want to delete the animal?")){
        window.location.href="./process/animal/process_delete_animal.php?id_Animal="+id
    }
    })
});


//delete Enclos

let modales1 = document.querySelectorAll(".modale1"); 

modales1.forEach((modale) => {

    modale.addEventListener("click" , function (){
        let id = this.dataset.id;
    if (confirm("Do you want to delete the enclosure?")){
        window.location.href="./process/enclos/process_delete_enclos.php?id_Enclos="+id
    }
    })
});


//delete Zoo 

let modales2 = document.querySelectorAll(".modale2"); 

modales2.forEach((modale) => {

    modale.addEventListener("click" , function (){
        let id = this.dataset.id;
    if (confirm("Do you want to delete the zoo?")){
        window.location.href="./process/zoo/process_delete_zoo.php?id_zoo="+id
    }
    })
});

