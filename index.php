<?php 
include './partials/header.php';
include './config/autoloader.php';
/*
  A FAIRE : 
  - le type de Animal et le type de Enclos doit être identique pour qu'on puisse les comparer (AQUATIQUE // aquatiques)
  - dans Animal, ajouter une propriété Species (Espèce) qui indiquera Aigle pour la classe Aigle, Ours pour ours etc.
  - supprimer numberOfAnimals dans la classe Enclos (voir les commentaires)
  - faire les function Enclos->getIsEmpty(), Enclos->getIsFull(), Enclos->getIsAvailable()
  - ecrire le code de Zoo->getCompatibleEnclos
  - dans enclos, supprimer numberOfAnimals car on connait le nombre d'animaux de l'enclos avec le nombre de ligne dans le tableau $_animals
  - dans les classes Aquarium, Cages et Volieres, dans leur constructeur supprimer le paramètre $_type et forcer la valeur dans le constructeur (comme dans la classe Aigles)
 
*/


/*
$Zoo1 = new Zoo();

$Zoo1->Employee->MoveAnimalEnclos();
$Zoo1->Employee->NettoyerEnclos();
*/
$animal1 = new Poissons("Magikarp", 150, 30, 1, 2);
$animal2 = new Ours("Ted", 150, 210, 5);
$animal3 = new Aigles("Oiseau", 150, 80, 2, 8);
$animal4 = new Tigre("Tigre du bengale", 200, 110, 4);

echo "Animal 1 info = <br/>" . $animal1->getInfos() . "<br/>";
echo "Animal 2 info = <br/>" . $animal2->getInfos() . "<br/>";
echo "Animal 3 info = <br/>" . $animal3->getInfos() . "<br/>";
echo "Animal 4 info = <br/>" . $animal4->getInfos() . "<br/>";


$enclos = [];
$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aeriennes", "sale", 4, "aigles", 100);
array_push($enclos, $enclos1);
array_push($enclos, $enclos2);
array_push($enclos, $enclos3);


echo "Enclos 1 = " . $enclos1->getId() . "<br/>";
echo "Enclos 2 = " . $enclos2->getId() . "<br/>";
echo "Enclos 3 = " . $enclos3->getId() . "<br/>";


echo "Enclos 2 = " . $enclos2->getSalinite() . "<br/>";
echo "Enclos 3 = " . $enclos3->getHauteur() . "<br/>";

?>

<div class="grid place-items-center h-screen">
    <div class="max-w-lg mx-auto">
      <img src="./images/zoo.png" class="" alt="" srcset="">
    </div>
</div>



<div class="card flex flex-wrap justify-evenly mb-20">

<?php 
foreach ($enclos as $enclo) { 
  
  ?>
  

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  
  <p><?=  $enclo->getId() ?></p>
  <p><?=  $enclo->getName() ?></p>
  <p>Type = <?=  $enclo->getType() ?></p>
  <p><?=  $enclo->getStatus() ?></p>

  <?php 
  if($enclo->getType() == "aquatiques"){
    ?>
  
  <p><?=  $enclo->getSalinite() ?></p>
  
   <?php
   }
  
   elseif($enclo->getType() == "aeriennes")
   {?>
  <p><?=  $enclo->getHauteur() ?></p>
  
  <?php 
  }
  ?>

</div>  



<?php
}

?>

</div>


<?php 
include './partials/footer.php';
?>
