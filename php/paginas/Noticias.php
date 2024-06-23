<?php
session_start();

include_once('../config/conexao.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link rel="icon" href="../img/icon_pagina.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
include_once('../componentes/nav.php');

?>
<body class="bg-gray-300">

<?php 
  if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Query para selecionar as notícias
$sql = "SELECT * FROM noticias ORDER BY id";
$result = mysqli_query($conexao, $sql);

// Armazenar as notícias em um array
$noticias = array();

while ($row = mysqli_fetch_assoc($result)) {
    $noticias[] = $row;
    echo
'
<div class="mx-5 my-5 bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
    <h2 class="text-xl font-bold text-gray-900">'.$row['titulo'] .'</h2>
    <p class="text-gray-700">'.$row['texto'] .'</p>
    <div class="flex items-center mt-4">
      <span class="mr-2 text-gray-700">Tema:</span>
      <span class="font-bold text-gray-900">'.$row['tema'] .'</span>
    </div>
    <div class="flex items-center mt-2">
      <span class="mr-2 text-gray-700">Autor:</span>
      <span class="font-bold text-gray-900">'.$row['autor'] .'</span>
    </div>
  </div>
</div>


';
}

// Fechar conexão
mysqli_close($conexao); 
  ?>
</div>
    
</body>
</html>