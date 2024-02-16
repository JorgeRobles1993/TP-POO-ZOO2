<?php
include './partials/header.php';
include './config/autoloader.php';
include './config/debug.php';

$enclos = [];
$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aeriennes", "sale", 4, "aigles", 100);
$enclos4 = new Cages(4, "Cage des Ours", "terrestre", "bonne", 4, "Ours", 100);
array_push($enclos, $enclos1);
array_push($enclos, $enclos2);
array_push($enclos, $enclos3);
array_push($enclos, $enclos4);

?>

<div class="CreateEnclosure grid place-items-center m-screen m-5">
    <h2>CREATE A NEW ENCLOSURE</h2>
    <div class="inline-block relative w-64">
        <input type="text" placeholder="Enclosure name" name="enclosurename" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <label for="form">Create Enclosure</label>
            <option>Terrestre</option>
            <option>Aquarium</option>
            <option>Voliere</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>
        <input type="submit" value="Create"/>
    </div>
</div>

<div class="card flex flex-wrap justify-evenly">

    <?php
    foreach ($enclos as $enclo) {

    ?>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <p><?= $enclo->getInfos() ?></p>
            

            <?php
            if ($enclo->getType() == "Aquatique") {
            ?>

                <p><?= $enclo->getSalinite() ?></p>

            <?php
            } elseif ($enclo->getType() == "Aerienne") { ?>
                <p><?= $enclo->getHauteur() ?></p>

            <?php
            }
            ?>

        </div>

    <?php
    }

    ?>

</div>
