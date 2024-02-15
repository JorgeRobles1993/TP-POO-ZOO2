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
  - * faire un getInfos pour les enclos (comme pour la classe animal)
  - * tout renommer en anglais (enclos => enclosure etc.), utiliser des noms au singulier pour les classes (Animal, Aigle, Tigre, Poisson)
*/


/*
$Zoo1 = new Zoo();

$Zoo1->Employee->MoveAnimalEnclos();
$Zoo1->Employee->NettoyerEnclos();
*/

?>

<div class="grid place-items-center h-screen">
    <div class="max-w-lg mx-auto">
      <img src="./images/zoo.png" class="" alt="" srcset="">
      <form class="max-w-sm mx-auto" method="post">
        <div class="text-center">
          <input type="text" placeholder="Yours ZOO name" name="name" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <button type="submit" class="px-1 py-1 font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Create</button>
        </div>
      </form>
    </div>
</div>


<?php 
include './partials/footer.php';
?>
