<?php
session_start();

    //print_r($_REQUEST);

   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    //acessa

    include_once('config.php');

    $email= $_POST['email'];
    $senha= $_POST['senha'];

  //  print_r('email: ' . $email);
  //  print_r('<br>');
  //  print_r('senha: ' . $senha);

  $sql = "SELECT * FROM atendentes WHERE email = '$email' and senha = '$senha'"; //verificando se tem um email e senha exatamente igual ao cadastro
  
  $result = $conexao->query($sql);
   //print_r($sql);
   //print_r($result);
   if(mysqli_num_rows($result) < 1)   //verifica se existe ou nao o mesmo login e senha pra acessar
   {  
    unset($_SESSION['email']);  // unset- destroi os dados de email e senha
    unset($_SESSION['senha']);
    header('Location: login.php'); // se nao existir
   }
   else{
    $_SESSION['email'] = $email;  //acessa com esses dados
    $_SESSION['senha'] = $senha;
    header('Location: formulariocliente.php'); // se existir
   }

}
   else{
    //não acessa
    header('Location:login.php');
   }
   
?>