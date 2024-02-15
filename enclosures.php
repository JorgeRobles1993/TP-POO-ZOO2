<?php 
include './partials/header.php';
include './config/autoloader.php';

$enclos = [];
$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aeriennes", "sale", 4, "aigles", 100);
array_push($enclos, $enclos1);
array_push($enclos, $enclos2);
array_push($enclos, $enclos3);

?>

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
  if($enclo->getType() == "Aquatique"){
    ?>
  
  <p><?=  $enclo->getSalinite() ?></p>
  
   <?php
   }
  
   elseif($enclo->getType() == "Aerienne")
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