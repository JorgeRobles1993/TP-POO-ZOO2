<?php
include './config/autoloader.php';
include './config/debug.php';
include 'config/db.php';

$id = $_GET['enclos_id'];

$type = $_GET['Enclos_type'];

if (!empty($_GET['enclos_id']))
{
    $enclosManager = new EnclosManager($dbConnexion);
    $animalManager = new AnimalManager($dbConnexion);
    $enclos = $enclosManager->getEnclosById($_GET['enclos_id']);

    $animals = $animalManager->findByEnclosId($enclos);
}
else
{
     header('Location: ./index.php');
}

$animal = $enclos->getAnimals();

$animalType = [];

foreach ($animal as $key) {
   $test = $key->getNamespecies();
    array_push($animalType, $test);
}

?> 

 
<?php include './partials/header.php'; ?>

<?php
// une condition pour interdir d'ajouter plus de 6 animals par enclosure
if(count($animal) <= 5){  ?>

    
    <div class="CreateEnclosure grid place-items-center m-screen m-5">
        <h2>CREATE A NEW ANIMAL</h2>
        <!-- faire un FORM puis redirection pour la création-->
        <div class="inline-block relative w-64">
            <form action="./process/animal/process_add_animal.php?Enclos_type=<?=$type?>" method="post">
            <input type="text" placeholder="Animal name" name="name" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <input type="number" placeholder="Weight" name="weight" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <input type="number" placeholder="Age" name="age" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <input type="number" placeholder="Size" name="size" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <input type="hidden" name="enclos_id" value="<?=$id?>">
    
            <select name="namespecies" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
    
            <?php if ($type == "Aquatique" ) {
                ?> <option value="Poisson">Poisson</option> <?php
            }elseif ($type == "Aerienne") {
                ?> <option value="Aigle">Aigle</option> <?php
            }elseif ($type == "Terrestre") {
               
                if (in_array("Tigre", $animalType)) {
                    ?> <option value="Tigre">Tigre</option> <?php
                } elseif (in_array("Ours", $animalType)) {
                    ?> <option value="Ours">Ours</option> <?php
                }else {
                    ?> <option value="Tigre">Tigre</option> <?php
                    ?> <option value="Ours">Ours</option> <?php
                }
            }?>
    
            </select>
    
            <input name="type" type="hidden" id="type" value="<?=$type?>"></input>
    
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
            <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create</button>
            </form>
        </div>
    </div>
    <?php
}
?>

<section class="">
    <h2 class="text-center my-4">Liste des Animals</h2>
    <div class="flex flex-wrap">
        <?php 
        foreach ($animals->getAnimals() as $animal) 
        { 
            ?>
            <div class="card border-4 border-black border-solid m-1 text-start" style="width: 18rem;">
                <img src="./images/<?= $animal->getNamespecies()?>.png" class="card-img-top" alt="...">
                <div class="card-body font-bold ">
                    <h5 class="card-title border border-black border-solid"> Name: <?= $animal->getName()?></p></h5>
                    <p class="card-text border border-black border-solid"> Spece: <?= $animal->getNamespecies() ?></p>
                    <p class="card-text border border-black border-solid"> Type: <?= $animal->getType() ?></p>
                    <p class="card-text border border-black border-solid"> Size: <?= $animal->getSize() ?></p>
                    <p class="card-text border border-black border-solid"> Weight: <?= $animal->getWeight() ?></p>
                    <p class="card-text border border-black border-solid"> Age: <?= $animal->getAge() ?></p>
                    <p class="card-text border border-black border-solid"> hungry: <?= $animal->getHungry() ?></p>
                    <p class="card-text border border-black border-solid"> Health: <?= $animal->getSoin() ?></p>
                    <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="#" class="btn btn-primary">Show stats</a></button>
                    
                    <button type="button" data-id="<?=$animal->getId()?>" class="modale text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Delete</button>

                <form action="./process/animal/process_feed_animal.php" method="post">
                    <input type="hidden" name="id_animal" value="<?=$animal->getId()?>">
                    <button type="submit" class="text-white bg-gradient-to-r from-purple-400 via-purple-700 to-purple-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Nourir</button>
                    
                </form>
                </div>
            </div>
            <?php 
        } 
        ?>
    </div>
</section>


<?php
include './partials/footer.php';
