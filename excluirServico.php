<?php
	try {
        $conexao = mysqli_connect("localhost","id11112140_deniseasc","12345","id11112140_onservicos");
    
        $id = $_POST['id'];
        
        $query = "DELETE FROM tb_servico WHERE cd_servico = $id";
        
        mysqli_query($conexao,$query);
        echo "Serviço excluído!";
    } catch (Exception $e ) {
        echo "Erro ao excluir: ".$e;
    }
?>