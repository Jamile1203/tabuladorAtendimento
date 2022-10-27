<?php
    // isset -> serve para saber se uma variável está definida

    if(isset($_POST['update']))
    {

        include_once('config.php');
        
        $id= $_POST['id'];
        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $telefone= $_POST['telefone'];
        $tipo_de_atendimento= $_POST['atendimento'];
        $data_de_atendimento= $_POST['data_atendimento'];
        $horario_inicial= $_POST['horario_inicial'];
        $horario_final= $_POST['horario_final'];
        $motivo_do_atendimento= $_POST['motivo_atendimento'];
        $area=$_POST['area'];
    
        $sqlUpdate = "UPDATE usuarios SET nome='$nome', telefone='$telefone',email='$email',tipo_de_atendimento='$tipo_de_atendimento',data_de_atendimento='$data_de_atendimento',horario_inicial='$horario_inicial',horario_final='$horario_final',motivo_do_atendimento='$motivo_do_atendimento',area='$area'
        WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);
        
    }
    header('Location: listar.php');

?>