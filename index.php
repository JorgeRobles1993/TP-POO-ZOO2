<?php 
include './partials/header.php';
include './config/autoloader.php';
/*
  A FAIRE : 
  - * le type de Animal et le type de Enclos doit être identique pour qu'on puisse les comparer (AQUATIQUE // aquatiques)
  - * dans Animal, ajouter une propriété Species (Espèce) qui indiquera Aigle pour la classe Aigle, Ours pour ours etc.
  - * supprimer numberOfAnimals dans la classe Enclos (voir les commentaires)
  - * faire les function Enclos->getIsEmpty(), Enclos->getIsFull(), Enclos->getIsAvailable()
  - * ecrire le code de Zoo->getCompatibleEnclos
  - * dans enclos, supprimer numberOfAnimals car on connait le nombre d'animaux de l'enclos avec le nombre de ligne dans le tableau $_animals
  - * dans les classes Aquarium, Cages et Volieres, dans leur constructeur supprimer le paramètre $_type et forcer la valeur dans le constructeur (comme dans la classe Aigles)
  -   faire un getInfos pour les enclos (comme pour la classe animal)
  -   tout renommer en anglais (enclos => enclosure etc.), utiliser des noms au singulier pour les classes (Animal, Aigle, Tigre, Poisson)
*/


/*
$Zoo1 = new Zoo();

$Zoo1->Employee->MoveAnimalEnclos();
$Zoo1->Employee->NettoyerEnclos();
*/
$animal1 = new Poisson("Magikarp", 150, 30, 1, 2);
$animal2 = new Ours("Ted", 150, 210, 5);
$animal3 = new Aigle("Oiseau", 150, 80, 2, 2);
$animal4 = new Tigre("Tigre du bengale", 200, 110, 4);

$enclos = [];
$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aeriennes", "sale", 4, "aigles", 100);
array_push($enclos, $enclos1);
array_push($enclos, $enclos2);
array_push($enclos, $enclos3);


$ZooManager->add($new)


?>

<div class="grid place-items-center h-screen">
    <div class="max-w-lg mx-auto">
      <img src="./images/zoo.png" class="" alt="" srcset="">
    </div>
</div>




<form class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text">CREER UN ZOO</label>
    <input type="" id="newzoo" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Name ZOO" required />
  </div>



<div class="card flex flex-wrap justify-evenly mb-20">




<?php 
include './partials/footer.php';
?>
