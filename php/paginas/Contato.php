<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Contato</title>
    <link rel="icon" href="../img/icon_pagina.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300">
    <!-- Tela de Contato -->
<div class="h-screen flex items-center justify-center bg-gray-100">
  <div class="max-w-md w-full bg-white p-6 rounded-md shadow-md">
    <h2 class="text-3xl font-bold mb-4 text-center">Contato</h2>
    <form action="../config/func.php?acao=enviar_mensagem" method="post">
      <div>
        <?php if(isset($_SESSION['error'])): ?>
        <label for="aviso" class="block text-sm font-bold mb-2 text-red"></label>
        <?php endif; unset($_SESSION['error']); ?>
      </div>
      <div class="mb-4">
        <label for="nome" class="block text-sm font-bold mb-2">Nome:</label>
        <input type="text" name="nome" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Seu nome" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-bold mb-2">Email:</label>
        <input type="email" name="email" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Seu email" required>
      </div>
      <div class="mb-4">
        <label for="mensagem" class="block text-sm font-bold mb-2">Mensagem:</label>
        <textarea name="mensagem" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Sua mensagem" required></textarea>
      </div>
      <div class="flex items-center justify-between flex-auto">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Enviar
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
    
</body>
</html>