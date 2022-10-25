<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Tipo de Atendimento: ' . $_POST['atendimento']);
        // print_r('<br>');
        // print_r('Data do Atendimento: ' . $_POST['data_atendimento']);
        // print_r('<br>');
        //print_r('Horário Inicial: ' . $_POST['horario_inicial']);
        // print_r('<br>');
        // print_r('Horário Final: ' . $_POST['horario_final']);
        // print_r('<br>');
        // print_r('Motivo do Atendimento: ' . $_POST['motivo_atendimento']);
     
        include_once('config.php');

        
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        

        $result = mysqli_query($conexao, "INSERT INTO atendentes(email,senha)
        VALUES('$email','$senha')");

        header('Location: login.php');

    }
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
<link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  a {
    text-decoration: none;
    list-style-type: none;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  body {
    background-image: url('https://static.wixstatic.com/media/0b79d7_91a8c0cd38c5489dbab09d16ff08197c~mv2.gif');
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
    width: 100%;
    font-family: monospace;
  }
  main {
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
    width: 100%;
    font-family: monospace;
    background: linear-gradient(45deg, #551bb3, #268fbe, #3c49be, #268fbe, #268fbe);
    background-size: 300% 300%;
    animation: colors 15s ease infinite;
  }
  
  main {
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
  }
  
  .img__logo_home {
    max-width: 300px;
    
  }
  .img__logo_sga {
    max-width: 500px;
  }
  
  .title__home {
    display: flex;
    border-right-width: 2px;
    border-right-style: solid;
    border-right-color: rgba(255, 255, 255, 0.4);
    color: #fff;
    font-size: 2em;
    animation: cursorBlink 1000ms steps(40) infinite normal,
      typing 10000ms steps(100) normal 1 both;
    white-space: nowrap;
    max-width: 0vw;
    overflow: hidden;
  }
  
  button{
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    width: 200px;
    height: 70px;
    border: 1px rgb(177, 237, 255) solid;
    background-color: #649dcb;
    color: #fff;
    font-size: 17px;
    font-weight: bold;
    cursor: pointer;
  }
  
  button:hover {
    transition: 300ms;
    background-color: #5ea4dd;
  }

.back{

    margin-bottom: 600px;
    margin-right: 1500px;
    border-radius: 20px, white, bold;
}

h1{
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    padding: 20px;
    font-size: 30px;
    color: black;
}
div{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: #fff;
    
}
input{
    padding: 30px;
    width: 400px;
    border: none;
    outline: none;
    font-size: 15px;
}
button{
  background-color: #adc2e4;
  color: rgb(1, 1, 1);
}
.inputSubmit{
    background-color: rgb(29, 95, 160);
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: black;
    font-weight: bold;
    font-size: 15px;
    
}
.inputSubmit:hover{
    background-color: deepskyblue;
    cursor: pointer;
}
  
  @keyframes colors {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
  
  @keyframes cursorBlink {
    100% {
      border-right-color: transparent;
    }
  }
  
  @keyframes typing {
    100% {
      max-width: 100vw;
    }
  }
  
    </style>
    <a class="back" href="home.html">Voltar</a>
    <div>
        <h1>Cadastre-se</h1>
        <form action="cadastro.php" method="POST">
            <input type="text" name="email" id="email" class="inputUser" placeholder="Email" required>
            <label for="email" class="labelInput">E-mail</label>
            <br><br>
            <input type="password" name="senha" id="senha" class="inputUser" placeholder="Senha" required>
            <label for="senha" class="labelInput">Senha</label>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>