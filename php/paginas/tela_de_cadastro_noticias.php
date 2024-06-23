<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Noticias</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Tela de Cadastro de Notícias -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Notícias</title>
  <link rel="icon" href="../img/icon_pagina.png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
  <div class="h-screen flex items-center justify-center bg-gray-500">
    <div class="max-w-md w-full bg-white p-6 rounded-md shadow-md">
      <h2 class="text-3xl font-bold mb-4 text-center">Cadastro de Notícias</h2>
      <form action="../config/func.php?acao=cad_noticia" method="post">
        <div class="mb-4">
          <label for="title" class="block text-sm font-bold mb-2">Título:</label>
          <input type="text" name="titulo" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Título da Notícia" required>
        </div>
        <div class="mb-4">
          <label for="title" class="block text-sm font-bold mb-2">Tema:</label>
          <input type="text" name="tema" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Tema da Noticia" required>
        <div class="mb-4">
          <label for="content" class="block text-sm font-bold mb-2">Conteúdo:</label>
          <textarea name="texto" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Texto da Noticia" required></textarea>
        </div>
        </div>
        <div class="mb-4">
          <label for="Autor" class="block text-sm font-bold mb-2">Autor:</label>
          <input type="text" name="Autor" class="w-full p-2 pl-10 text-sm text-gray-700" placeholder="Autor da Noticia" required>
        </div>
        <div class="flex items-center justify-between flex-auto">
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Cadastrar Notícia
          </button>
        </div>
      </form>
    </div>
  </div>
</body>