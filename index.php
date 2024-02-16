<?php 
include './config/autoloader.php';
include './config/debug.php';
include './config/db.php';
include './partials/header.php';
$zooManager = new ZooManager($dbConnexion);
$zoos = $zooManager->getAll();
?>

<div class="grid place-items-center h-screen">
<div class="max-w-lg mx-auto">
  <img src="./images/zoo.png" class="" alt="" srcset="">
  <form class="max-w-sm mx-auto" action="./process/zoo/process_add_zoo.php" method="post">
    <div class="text-center">
      <input type="text" placeholder="Yours ZOO name" name="name" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <button type="submit" class="px-1 py-1 font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Create</button>
      </div>
    </form>
  </div>
</div>  
<section class="container my-5 items-center">
    <h2 class="my-4">Liste des ZOOS</h2>
    <div class="flex flex-wrap">
        <?php foreach ($zoos as $zoo) { ?>
            <div class="card m-2" style="width: 18rem;">
                <img src="https://png.pngtree.com/png-clipart/20201114/ourmid/pngtree-small-animals-in-the-zoo-png-image_2420311.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $zoo->getName() ?></h5>
                    <p class="card-text"> Nombre maximun d'enclos : <?= $zoo->getNbrMaxEnclos() ?></p>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="./zoo.php?zoo_id=<?= $zoo->getId() ?>" class="btn btn-primary">Entrer dans le Zoo ! </a></button>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php
include './partials/footer.php';
