<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>
  <link rel="icon" href="../img/icon_pagina.png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300">

  <?php
  include_once('../componentes/nav.php');
  ?>

  <!-- Add the following code inside the <body> tag -->
  <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
    <h2 class="text-3xl font-bold mb-4 text-center">Biblioteca</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="flex justify-center">
      <label for="search" class="sr-only">Buscar:</label>
      <input type="text" id="search" name="search" class="w-full p-2 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-white rounded-full shadow-md focus:outline-none focus:shadow-outline" placeholder="Buscar...">
      <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-3 rounded">
      <img src="../img/icon_busca.png" alt="" class="max-w-5">
      </button>
    </form>

    <?php
    if (isset($_GET['search'])) {
      $search_query = $_GET['search'];
      // faça uma busca no banco de dados ou em uma fonte de dados
      $results = array(); // armazene os resultados da busca aqui
      // exiba os resultados da busca
      foreach ($results as $result) {
        echo "<p>$result</p>";
      }
    }
    ?>
    <div class="flex flex-wrap justify-center">
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Plastico</h3>
            <p class="text-gray-600 pb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore alias magnam sunt iure obcaecati. Reiciendis atque, delectus, ipsum numquam facilis unde natus sequi laudantium necessitatibus voluptates officiis sit. Nemo, optio?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Vidro</h3>
            <p class="text-gray-600 pb-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus voluptatum eligendi deleniti aperiam, asperiores sit quam velit quos tempora illum assumenda. Officiis quibusdam, expedita dolor nobis reiciendis ut voluptate!</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Metal</h3>
            <p class="text-gray-600 pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non a officia minus cupiditate, dolore corrupti natus odio vero eum aliquam voluptatem fugit minima magnam quam excepturi, sed harum officiis itaque?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Metal</h3>
            <p class="text-gray-600 pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non a officia minus cupiditate, dolore corrupti natus odio vero eum aliquam voluptatem fugit minima magnam quam excepturi, sed harum officiis itaque?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Metal</h3>
            <p class="text-gray-600 pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non a officia minus cupiditate, dolore corrupti natus odio vero eum aliquam voluptatem fugit minima magnam quam excepturi, sed harum officiis itaque?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Metal</h3>
            <p class="text-gray-600 pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non a officia minus cupiditate, dolore corrupti natus odio vero eum aliquam voluptatem fugit minima magnam quam excepturi, sed harum officiis itaque?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Metal</h3>
            <p class="text-gray-600 pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non a officia minus cupiditate, dolore corrupti natus odio vero eum aliquam voluptatem fugit minima magnam quam excepturi, sed harum officiis itaque?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="carousel w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
        <div class="card bg-white rounded shadow-md">
          <img src="https://via.placeholder.com/300x200" alt="Book Cover" class="w-full h-48 object-cover rounded-t">
          <div class="p-4">
            <h3 class="text-lg font-bold mb-2">Metal</h3>
            <p class="text-gray-600 pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non a officia minus cupiditate, dolore corrupti natus odio vero eum aliquam voluptatem fugit minima magnam quam excepturi, sed harum officiis itaque?</p>
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ver mais</button>
          </div>
        </div>
      </div>
      <!-- Add more cards here -->
</body>

</html>