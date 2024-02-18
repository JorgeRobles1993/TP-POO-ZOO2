<?php
include './partials/header.php';
include './config/autoloader.php';
include './config/debug.php';

if (!empty($_GET['enclosure_id'])) 
{

    $enclosManager = new EnclosManager($dbConnexion);
    $animalManager = new AnimalManager($dbConnexion);

    $enclos = $enclosManager->getById($_GET['enclosure_id']);
    //  Avoir la liste des animaux de l'enclos
    //      La fonction findByEnclosId ajoute les animaux qui sont dans la base de données dans la classe Enclos
    $animalManager->findByEnclosId($enclos);
    
}

else 
{
    header('Location: ./index.php');
}


/*
$enclos = [];
$enclos1 = new Cages(1, "cage de tigres", "terrestre", "propre", 6, "tigre");
$enclos2 = new Aquarium(2, "Aquarium des poissons", "aquatiques", "bonne", 5, "poissons", 10);
$enclos3 = new Volieres(3, "Voliere des aigles", "aeriennes", "sale", 4, "aigles", 100);
$enclos4 = new Cages(4, "Cage des Ours", "terrestre", "bonne", 4, "Ours", 100);
array_push($enclos, $enclos1);
array_push($enclos, $enclos2);
array_push($enclos, $enclos3);
array_push($enclos, $enclos4);
*/
?>

<div class="CreateEnclosure grid place-items-center m-screen m-5">
    <h2>CREATE A NEW ANIMAL</h2>
    <!-- faire un FORM puis redirection pour la création-->
    <div class="inline-block relative w-64">
        <input type="text" placeholder="Animal name" name="animalname" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            
        <!-- A FAIRE : Filtrer la liste des espèces d'animaux pour avoir celles compatibles avec l'enclos affiché
            réutiliser le code de getCompatibleEnclos

    public function getCompatibleEnclos(Animal $newAnimal)
    { 
        // * créer un tableau vide d'enclos ($enclosCompatibles)
        $enclosCompatibles = [];

        //  * boucle sur le tableau des enclos 
        foreach ($this->_enclosures as $enclos)
        {

        //  * On teste si l'enclos n'est pas plein
        if ($enclos->getAvailable() == true) {
            
            //     * si oui, il y a de la place
            echo "il y a de la place";
            //          * si l'enclos est vide, on vérifie que le type de l'enclos = le type du nouvel animal
            if($enclos->getType() == $newAnimal->getType()){
                //             * si = , l'enclos est compatible, on l'ajoute au tableau $enclosCompatibles
                if($enclos->getSpecies() == $newAnimal->getSpecies())
                    array_push($enclosCompatibles, $enclos);
            }
        }

        return $enclosCompatibles;
    }
    }


            -->
            <option>Aigle</option>
            <option>Ours</option>
            <option>Poisson</option>
            <option>Tigre</option>
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
    foreach ($enclos->getAnimals() as $animal) {

    ?>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <p><?= $enclo->getInfos() ?></p>
            
<!--   A FAIRE : remettre sur la page du zoo, pour avoir la liste des enclos-->
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
