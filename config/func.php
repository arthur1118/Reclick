<?php 
include '../config/conexao.php';
session_start();

//Definindo as variaveis que irao para o banco de dados

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));

//Variaveis Das noticias que serão mandadas pro banco de dados

$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
$tema = mysqli_real_escape_string($conexao, trim($_POST['tema']));
$texto = mysqli_real_escape_string($conexao, trim($_POST['texto']));
$autor = mysqli_real_escape_string($conexao, trim($_POST['titulo']));

if($_GET['acao'] == 'cad_noticia'){

    $sql = "INSERT INTO noticias (titulo, tema, texto, autor) VALUES ('$titulo', '$tema', '$texto', '$autor')";

    if($conexao->query($sql)){

        $_SESSION['cadastro_ok'] = true;

        header('location: ../paginas/home.php');

        $conexao ->close();

    }

}
else{

    $_SESSION['cadastro_erro'] = true;
}

//----------------------------------------//


//Verificando se o usuario ja existe no banco de dados

if($_GET['acao'] == 'logar'){

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $res = $conexao->query($sql);

    $dados = $res->fetch_assoc();

    if($dados['email'] == $email && $dados['senha'] == $senha){

        $_SESSION['logado'] = true;

        $_SESSION['id'] = $dados['id'];

        $_SESSION['nome'] = $dados['nome'];

        $_SESSION['email'] = $dados['email'];

        $_SESSION['telefone'] = $dados['telefone'];

        $_SESSION['endereco'] = $dados['endereco'];

        header('location: ../home.php');

    }
}

//----------------------------------------//
  
//Metodo de cadastro 

if($_GET['acao'] == 'cadastrar'){

    //Comando de inserção da variavel
    $sql = "INSERT INTO  usuarios  ( nome, senha, email, telefone, endereco )
    VALUES ( '$nome', '$senha', '$email', '$telefone', '$endereco')";

    //Consulta do banco de dados com a variavel
    if($conexao->query($sql)){


        $_SESSION['cad_ok'] = true;
        
        //voltando para a pagina de inicio após o cadastro
        header('location: ../index.php?in=1');
        
        //fechando a consulta com o banco de dados
        $conexao->close();
    }
}

if($_GET['acao'] == 'editar'){
    
    //Para capturar o valor da id
    $id = $_GET['id'];
    
    //Para dar Update nos dados do cliente
    $sql = "UPDATE usuarios SET nome = '$nome' 
    senha = '$senha', email = '$email', endereco = '$endereco', email = '$email', telefone = '$telefone', endereco = '$endereco' ";

    //Para Edição dos dados
    $resultado = mysqli_query($conexao, $sql);
        
    if(mysqli_affected_rows($conexao)){
        $_SESSION['edicao_ok'] = true;
        header('Location: ../home.php');
    }
    else{
        $_SESSION['edicao_erro'] = true;
        header('Location: ../home.php');
    }
    }

if($_GET['acao'] == 'excluir'){
    
    //Para capturar o valor da id
    $id = $_GET['id'];

    //Para excluir os dados do cliente
    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    //Para exclusão dos dados
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['exclusao_ok'] = true;
        header('Location: ../home.php');
    }

}

else{

    header('location: ../paginas/home.php');
}