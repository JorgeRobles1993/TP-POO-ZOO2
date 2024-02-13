<?php 
include './partials/header.php';
include './config/autoloader.php';

$animal1 = new Poissons("Magikarp", 150, 30, 1, 2);
$animal2 = new Ours("Ted", 150, 210, 5);
$animal3 = new Aigles("Oiseau", 150, 80, 2, 8);
$animal4 = new Tigre("Tigre du bengale", 200, 110, 4);


echo "Animal 1 = " . $animal1->getType() . "<br/>";
echo "Animal 2 = " . $animal2->getType() . "<br/>";
echo "Animal 3 = " . $animal3->getType() . "<br/>";
echo "Animal 4 = " . $animal4->getType() . "<br/>";

echo "Animal 1 = " . $animal1->getName() . "<br/>";
echo "Animal 2 = " . $animal2->getName() . "<br/>";
echo "Animal 3 = " . $animal3->getName() . "<br/>";
echo "Animal 4 = " . $animal4->getName() . "<br/>";



$enclos = [];
$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aeriennes", "sale", 4, "aigles", 100);
array_push($enclos, $enclos1);
array_push($enclos, $enclos2);
array_push($enclos, $enclos3);

// echo "Enclos 1 = " . $enclos1->getId() . "<br/>";
// echo "Enclos 2 = " . $enclos2->getId() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getId() . "<br/>";

// echo "Enclos 1 = " . $enclos1->getName() . "<br/>";
// echo "Enclos 2 = " . $enclos2->getName() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getName() . "<br/>";

// echo "Enclos 1 = " . $enclos1->getType() . "<br/>";
// echo "Enclos 2 = " . $enclos2->getType() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getType() . "<br/>";

// echo "Enclos 1 = " . $enclos1->getStatus() . "<br/>";
// echo "Enclos 2 = " . $enclos2->getStatus() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getStatus() . "<br/>";

// echo "Enclos 1 = " . $enclos1->getNumberofAnimals() . "<br/>";
// echo "Enclos 2 = " . $enclos2->getNumberofAnimals() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getNumberofAnimals() . "<br/>";

// echo "Enclos 1 = " . $enclos1->getAnimals() . "<br/>";
// echo "Enclos 2 = " . $enclos2->getAnimals() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getAnimals() . "<br/>";


// echo "Enclos 2 = " . $enclos2->getSalinite() . "<br/>";
// echo "Enclos 3 = " . $enclos3->getHauteur() . "<br/>";



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
  <p><?=  $enclo->getType() ?></p>
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
