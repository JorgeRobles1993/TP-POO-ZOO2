<?php

include './partials/header.php';
include './config/autoloader.php';
$animal = [];
$animal1 = new Poisson("Magikarp", 150, 30, 1, 2);
$animal2 = new Ours("Ted", 150, 210, 5);
$animal3 = new Aigle("Oiseau", 150, 80, 2, 2);
$animal4 = new Tigre("Tigre du bengale", 200, 110, 4);
$animal5 = new Poisson("Magikarp", 150, 30, 1, 2);
$animal6 = new Ours("Ted", 150, 210, 5);
$animal7 = new Aigle("Oiseau", 150, 80, 2, 2);
$animal8 = new Tigre("Tigre du bengale", 200, 110, 4);
array_push($animal, $animal1);
array_push($animal, $animal2);
array_push($animal, $animal3);
array_push($animal, $animal4);
array_push($animal, $animal5);
array_push($animal, $animal6);
array_push($animal, $animal7);
array_push($animal, $animal8);

?>



<div class="flex items-stretch max-h">

    <?php 
    foreach ($animal as $key => $an) {
      ?>
      <div class="items-center w-1/2 border border-solid border-black">
      <img class="w-56" src="./images/<?= $an->getSpecies() ?>.png" alt="">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?= $an->getInfos() ?></div>
        </div>
        </div>
        <?php  
  }
  
  ?>
  </div>



<div class="CreateEnclosure grid place-items-center m-screen m-5">
    <h1>CHOISIS UN ANIMAL</h1>
    <div class="inline-block relative w-64">
        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <label for="form">AJOUTER UN ANNIMAL</label>
            <option>Poisson</option>
            <option>Ours</option>
            <option>Tigre</option>
            <option>Aigle</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>
        <input type="submit" class="" value="Ajouter" />
    </div>
</div>