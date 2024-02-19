<?php
include 'config/autoloader.php';
include 'config/db.php';
if (!empty($_GET["zoo_id"])) {
    $zooManager = new ZooManager($dbConnexion);
    $enclosManager = new EnclosManager($dbConnexion);

    $zoo = $zooManager->getById($_GET['zoo_id']);
    $enclosManager->findByZooId($zoo);
} else {
    header('Location: ./index.php');
}
?>
<?php include 'partials/header.php'; ?>
<section class="">
    <h1 class="text-center my-4">WELCOME TO <?= $zoo->getName() ?> 'S ZOO</h1>
</section>

<h2 class="text-center my-4">Add an Enclosure</h2>
<section class="flex justify-center">
    <form action="./process/enclos/process_add_enclos.php" method="post">
        <input class="form-control" name="name" type="text" placeholder="Nom de mon enclos">
        <select name="type" id="type">
            <option value="Aquatique">Aquatique</option>
            <option value="Terrestre">Terrestre</option>
            <option value="Aerienne">Aerienne</option>
        </select>
        <input class="" type="hidden" name="zoo_id" value="<?= $zoo->getId() ?>">
        <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create an enclosure</button>
    </form>
</section>


<section class="">
    <h2 class="text-center my-4">Liste des Enclos</h2>
    <div class="flex flex-wrap">
        <?php foreach ($zoo->getEnclos() as $enclos) { ?>
            <div class="card m-2" style="width: 18rem;">
                <img src="https://png.pngtree.com/png-clipart/20201114/ourmid/pngtree-small-animals-in-the-zoo-png-image_2420311.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $enclos->getName() ?></h5>
                    <p class="card-text"> Nombre maximun d'enclos : <?= $enclos->getNbrMaxAnimals() ?></p>
                    <p class="card-text"> <?= $enclos->getType() ?></p>
                    <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="./enclosures.php?enclos_id=<?= $enclos->getId()?>&Enclos_type=<?=$enclos->getType()?>">Enter</a></button>
                </div>
            </div>
        <?php } ?>
    </div>
</section>