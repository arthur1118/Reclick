<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <link rel="icon" href="../img/icon_pagina.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <!-- Tela de Login -->
<div class="h-screen flex items-center justify-center bg-gray-100">
  <div class="max-w-md w-full bg-white p-6 rounded-md shadow-md">
    <h2 class="text-3xl font-bold mb-4 text-center">Login</h2>
    <form action="../config/func.php?acao=cadastrar" method="post">
      <div>
        <label for="aviso" class="block text-sm font-bold mb-2 text-red"></label>        </div>
      <div class="mb-4">
        <label for="name" class="block text-sm font-bold mb-2">Nome:</label>
        <input type="text" name="nome" class=" w-full p-2 pl-10 text-sm text-gray-700" placeholder="Escreva seu Nome" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-bold mb-2">Email:</label>
        <input type="email" name="email" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Escreva seu Email" required>
      </div>
      <div class="mb-4">
        <label for="telefone" class="block text-sm font-bold mb-2">Telefone:</label>
        <input type="tel" name="telefone" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Escreva seu Telefone" required>
      </div>
      <div class="mb-4">
        <label for="endereco" class="block text-sm font-bold mb-2">Endereço:</label>
        <input type="text" name="endereco" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Escreva seu Endereço" required>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-bold mb-2">Senha:</label>
        <input type="password" name="senha" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Sua Senha" required>
      </div>
      <div class="flex items-center justify-between flex-auto">
        <button id="voltar-tela-inicial" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Confirmar
        </button>
      </div>
      <div class="text-center mt-4">
        <a href="tela_de_login.php" class="text-blue-500 hover:text-blue-700 flex-auto">Ja possui uma conta?</a>
      </div>
    </form>
  </div>
</div>


    
</body>

<script>
 document.getElementById('voltar-tela-inicial').addEventListener('click', function() {
    window.location.href = 'home.php';
  });
</script>
</html>