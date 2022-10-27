<?php



    if(!empty($_GET['id']))
    {
        include_once('config.php');


        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result -> num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){

        $nome= $user_data['nome'];
        $email= $user_data['email'];
        $telefone= $user_data['telefone'];
        $tipo_de_atendimento= $user_data['tipo_de_atendimento'];
        $data_de_atendimento= $user_data['data_de_atendimento'];
        $horario_inicial= $user_data['horario_inicial'];
        $horario_final= $user_data['horario_final'];
        $motivo_do_atendimento= $user_data['motivo_do_atendimento'];
        $area=$user_data['area'];

        }
        
    }

        else{
            header('Location: listar.php');
        }  

    }
    else{
        header('Location: listar.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Registros</title>
</head>
<body>
    <style>
          body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('https://static.wixstatic.com/media/0b79d7_91a8c0cd38c5489dbab09d16ff08197c~mv2.gif');
            background-size: cover;
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
       
        #update{
            background-color: dodgerblue;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-color: blue;
        }
</style>

<a href="listar.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Tabulador de Atendimento</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Tipo de Atendimento:</p>
                <input type="radio" id="chat" name="atendimento" value="chat" <?php echo ($tipo_de_atendimento == 'chat') ? 'checked' : '';?> required>
                <label for="chat">Chat</label>
                <br>
                <input type="radio" id="telefone" name="atendimento" value="telefone"  <?php echo ($tipo_de_atendimento == 'telefone') ? 'checked' : '';?>  required>
                <label for="telefone">Telefone</label>
                <br>
                <input type="radio" id="email" name="atendimento" value="email"  <?php echo ($tipo_de_atendimento == 'email') ? 'checked' : '';?>  required>
                <label for="email">E-mail</label>
                <br>
                <input type="radio" id="presencial" name="atendimento" value="presencial"  <?php echo ($tipo_de_atendimento == 'presencial') ? 'checked' : '';?>  required>
                <label for="presencial">Presencial</label>
                <br>

                <p>Área:</p>
                <input type="radio" id="fiscalização" name="area" value="fiscalização"  <?php echo ($area == 'fiscalizacao') ? 'checked' : '';?>  required>
                <label for="fiscalização">Fiscalização</label>
                <br>
                <input type="radio" id="juridico" name="area" value="juridico" <?php echo ($area == 'juridico') ? 'checked' : '';?> required>
                <label for="juridico">Jurídico</label>
                <br>
                <input type="radio" id="financeiro" name="area" value="financeiro" <?php echo ($area == 'financeiro') ? 'checked' : '';?> required>
                <label for="financeiro">Financeiro</label>    
                <br><br>

                 
                <label for="data_atendimento"><b>Data do Atendimento</b></label>
                <input type="date" name="data_atendimento" id="data_atendimento" value="<?php echo $data_de_atendimento;?>" required>
                <br><br>
                 
                <label for="horario_inicial"><b>Horário Inicial</b></label>
                <input type="time" name="horario_inicial" id="horario_inicial" value=<?php echo $horario_inicial;?> required>
                <br><br>
                
                <label for="horario_final"><b>Horário Final</b></label>
                <input type="time" name="horario_final" id="horario_final" value=<?php echo $horario_final;?> required>
                <br><br>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="motivo_atendimento" id="motivo_atendimento" cols="20" rows="10" class="inputUser" value=<?php echo $motivo_do_atendimento;?> required>
                    <label for="motivo_atendimento"  class="labelInput">Motivo do Atendimento </label>
                </div>
                <br><br> 
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">         
            </fieldset>
        </form>
    </div>
</body>

</html>