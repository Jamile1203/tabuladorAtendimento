<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="/css/home.css" />
  </head>
  <body>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body{
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
    color: rgb(17, 17, 81);
    font-size: 2em;
    animation: cursorBlink 1000ms steps(40) infinite normal,
      typing 10000ms steps(100) normal 1 both;
    white-space: nowrap;
    max-width: 0vw;
    overflow: hidden;
  }
  button{
    width: 100px;
    padding: 10px;
    background-color: #032991;
    color: rgb(255, 255, 255);
    font-size: 17px;
    cursor: pointer;
    border-radius: 10px;
  }
  button:hover {
    transition: 300ms;
    background-color: #5ea4dd;
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
    <main>
      <div>
        <img class="img__logo_home" src="/img/CRABA.png alt="logo_CRABA" />
        <img class="img__logo_sga" src="/img/logo.png" alt="">
        
      </div>
      <div>
        <br><br><br><p class="title__home"> Olá, você está na página de acesso ao tabulador de atendimento!</p>
      </div>

      <a href="" target="_parent">
        <a  href="login.php"><button>Login</button></a>
        <a  href="cadastro.php"><button>Cadastro</button></a>
        
      </a>
    </main>
  </body>
</html>
