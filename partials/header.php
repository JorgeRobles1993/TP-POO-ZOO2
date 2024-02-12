<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-POO-ZOO</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-800 h-screen" onload="loader()">
    
    <header>
     <!-- jorge's navbar-->
     <nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex justify-between mx-auto">
    <a href="./index.php"><img src="../images/monkeygifnavbar.gif" class="h-12"/></a>
    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-end items-center pt-3">
      <li class="mx-3">
          <a href="./employees.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">
            <p>Employees</p>
          </a>
        </li>
        <li class="mx-3">
          <a href="./animals.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">
            <p>Animals</p>
          </a>
        </li>
        <li class="mx-3">
          <a href="./aboutus.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page"> 
            <p>About us</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    </header>
</body>
</html>