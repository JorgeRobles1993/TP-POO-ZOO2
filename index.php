<?php 
include './partials/header.php';
include './config/autoloader.php';


$animal1 = new Aigles("un animal", 150, 62, 2, 2);
$animal2 = new Ours("toto", 150, 62, 2);
$animal3 = new Aigles("Oiseau", 150, 62, 2, 8);

echo "Animal 1 = " . $animal1->getType() . "<br/>";
echo "Animal 2 = " . $animal2->getType() . "<br/>";
echo "Animal 3 = " . $animal3->getType() . "<br/>";

?>

<div class="grid place-items-center h-screen">
    <div class="max-w-lg mx-auto">
      <img src="./images/zoo.png" class="" alt="" srcset="">
    </div>
</div>


<?php 
include './partials/footer.php';
?>
