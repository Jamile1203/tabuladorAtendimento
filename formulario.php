<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
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

        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $telefone= $_POST['telefone'];
        $tipo_atendimento= $_POST['atendimento'];
        $data_atendimento= $_POST['data_atendimento'];
        $horario_inicial= $_POST['horario_inicial'];
        $horario_final= $_POST['horario_final'];
        $motivo_atendimento= $_POST['motivo_atendimento'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,email,tipo_de_atendimento, data_de_atendimento, horario_inicial, horario_final, motivo_do_atendimento)
        VALUES('$nome','$email','$telefone','$tipo_atendimento','$data_atendimento','$horario_inicial','$horario_final','$motivo_atendimento')");

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
 
   
</head>
<body>

<style>
    body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 50%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
</style>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Tabulador de Atendimento</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Tipo de Atendimento:</p>
                <input type="radio" id="chat" name="atendimento" value="chat" required>
                <label for="chat">Chat</label>
                <br>
                <input type="radio" id="telefone" name="atendimento" value="telefone" required>
                <label for="telefone">Telefone</label>
                <br>
                <input type="radio" id="email" name="atendimento" value="email" required>
                <label for="email">Email</label>
                <br>
                <input type="radio" id="outro" name="atendimento" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                <label for="data_atendimento"><b>Data do Atendimento</b></label>
                <input type="date" name="data_atendimento" id="data_atendimento" required>
                <br><br>

                <label for="horario_inicial"><b>Horário Inicial</b></label>
                <input type="time" name="horario_inicial" id="horario_inicial" required>
                <br><br>

                <label for="horario_final"><b>Horário Final</b></label>
                <input type="time" name="horario_final" id="horario_final" required>
                <br><br>
                
                <div class="inputBox">
                
                    <input type="text" name="motivo_atendimento" id="motivo_atendimento" cols="20" rows="10" class="inputUser" required>
                    <label for="motivo_atendimento"  class="labelInput">Motivo do Atendimento</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>