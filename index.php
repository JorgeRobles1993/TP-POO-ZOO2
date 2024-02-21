<?php 
include './config/autoloader.php';
include './config/debug.php';
include './config/db.php';
include './partials/header.php';

/*  TODO
  - Finir AnimalManger
  - Finir Enclosures.php
  - Commit quand l'ajout d'animaux dans un enclos fonctionne
  - (Optionnel : Renommer tous les fichiers en anglais)

*/

$zooManager = new ZooManager($dbConnexion);
$zoos = $zooManager->getAll();
?>

<div class="grid place-items-center h-screen">
<div class="max-w-lg mx-auto">
  <img src="./images/letsbuildazoo.png" class="" alt="" srcset="">
  <form class="max-w-sm mx-auto" action="./process/zoo/process_add_zoo.php" method="post">
    <div class="text-center">
      <input type="text" placeholder="Yours ZOO name" name="name" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <button type="submit" class="px-1 py-1 font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Create</button>
      </div>
    </form>
  </div>
</div>  
<h1 class="">EXISTING ZOOS</h1>
<section class="grid place-items-center h-screen">
    <div class="flex flex-wrap">
        <?php
        foreach ($zoos as $zoo){
          ?>
          <div class="card m-2 border-4 border-black border-solid" style="width: 18rem;">
              <img src="./images/zoo.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title"><?= $zoo->getName() ?></h5>
                  <p class="card-text"> Enclosure Max: <?= $zoo->getNbrMaxEnclos() ?></p>
                  <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="./zoo.php?zoo_id=<?= $zoo->getId() ?>">Entrer dans le Zoo ! </a></button>

                  <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="./process/zoo/process_delete_zoo.php?id_zoo=<?=$zoo->getId()?>">Delete</a></button>
              </div>
          </div>
          <?php
        }
        ?>
    </div>
</section>

<?php
include './partials/footer.php';
