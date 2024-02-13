<?php 
include './partials/header.php';
include './config/autoloader.php';

$employe1 = new Employee(1,"Juan Lopéz", 25, "male");
 
?>

<div class="grid place-items-center h-screen">
    <div class="max-w-lg mx-auto">

<a href="" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="./images/zookeeper-image.png" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Meet the Zookeeper</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Name: <?= $employe1->getName()?> </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Age: <?= $employe1->getAge()?> </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Gender: <?= $employe1->getGender()?> </p>
    </div>
</a>