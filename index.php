<?php 
include './partials/header.php';
include './config/autoloader.php';


<<<<<<< HEAD
$animal1 = new Poissons("un animal", 150, 62, 2, 2);
$animal2 = new Ours("toto", 150, 62, 2);
$animal3 = new Aigles("Oiseau", 150, 62, 2, 8);
=======
$animal1 = new Poissons("Magikarp", 150, 30, 1, 2);
$animal2 = new Ours("Ted", 150, 210, 5);
$animal3 = new Aigles("Oiseau", 150, 80, 2, 8);
$animal4 = new Tigre("tono", 200, 110, 4);
>>>>>>> master

echo "Animal 1 = " . $animal1->getType() . "<br/>";
echo "Animal 2 = " . $animal2->getType() . "<br/>";
echo "Animal 3 = " . $animal3->getType() . "<br/>";
echo "Animal 4 = " . $animal4->getType() . "<br/>";

echo "Animal 1 = " . $animal1->getName() . "<br/>";
echo "Animal 2 = " . $animal2->getName() . "<br/>";
echo "Animal 3 = " . $animal3->getName() . "<br/>";

echo "Animal 1 = " . $animal1->getSize() . "<br/>";
echo "Animal 2 = " . $animal2->getSize() . "<br/>";
echo "Animal 3 = " . $animal3->getSize() . "<br/>";

echo "Animal 1 = " . $animal1->getAge() . "<br/>";
echo "Animal 2 = " . $animal2->getAge() . "<br/>";
echo "Animal 3 = " . $animal3->getAge() . "<br/>";





$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aerennes", "sale", 4, "aigles", 100);


echo "Enclos 1 = " . $enclos1->getId() . "<br/>";
echo "Enclos 2 = " . $enclos2->getId() . "<br/>";
echo "Enclos 3 = " . $enclos3->getId() . "<br/>";

echo "Enclos 1 = " . $enclos1->getName() . "<br/>";
echo "Enclos 2 = " . $enclos2->getName() . "<br/>";
echo "Enclos 3 = " . $enclos3->getName() . "<br/>";

echo "Enclos 1 = " . $enclos1->getType() . "<br/>";
echo "Enclos 2 = " . $enclos2->getType() . "<br/>";
echo "Enclos 3 = " . $enclos3->getType() . "<br/>";

echo "Enclos 1 = " . $enclos1->getStatus() . "<br/>";
echo "Enclos 2 = " . $enclos2->getStatus() . "<br/>";
echo "Enclos 3 = " . $enclos3->getStatus() . "<br/>";

echo "Enclos 1 = " . $enclos1->getNumberofAnimals() . "<br/>";
echo "Enclos 2 = " . $enclos2->getNumberofAnimals() . "<br/>";
echo "Enclos 3 = " . $enclos3->getNumberofAnimals() . "<br/>";

echo "Enclos 1 = " . $enclos1->getAnimals() . "<br/>";
echo "Enclos 2 = " . $enclos2->getAnimals() . "<br/>";
echo "Enclos 3 = " . $enclos3->getAnimals() . "<br/>";


echo "Enclos 2 = " . $enclos2->getSalinite() . "<br/>";
echo "Enclos 3 = " . $enclos3->getHauteur() . "<br/>";



?>

<div class="grid place-items-center h-screen">
    <div class="max-w-lg mx-auto">
      <img src="./images/zoo.png" class="" alt="" srcset="">
    </div>
</div>


<?php 
include './partials/footer.php';
?>
