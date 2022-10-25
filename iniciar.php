

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Atendimento</title>
    
    <link rel="stylesheet" href="/css/iniciar.css">
  </head>
  <body class="gradiente">

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
  width: 250px;
  height: 70px;
  border-radius: 50px;
  border: 1px rgb(177, 237, 255) solid;
  background-color: #adc2e4;
  color: rgba(0, 0, 0, 0.838);
  font-size: 17px;
  font-weight: bold;
  cursor: pointer;
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
    <a class="back" href="home.html">Voltar</a>
    <main>
      <div>
        <img class="img__logo_home" src="/img/CRABA.png" alt="logo_CRABA" />
        <img class="img__logo_sga" src="/img/logo.png" alt="">
        
      </div>
      <div>
        <a href="http://localhost/tabuladorAtendimento-main/formulario.php"><button>Iniciar Atendimento</button></a>
      </div>    
    </main>
  </body>
</html>
