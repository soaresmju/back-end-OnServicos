<?php
    try {
        $conexao = mysqli_connect("localhost","id11112140_deniseasc","12345","id11112140_onservicos");
    
        $id = $_POST['codigo'];
         
        $query = "SELECT * FROM tb_usuario WHERE cd_usuario = '$id' ";

        $resultado = mysqli_query($conexao,$query);
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro = array(
                'perfil'=>array(
                    'nome' => $linha['nm_usuario'],
                    'cpf' => $linha['nr_cpf'],
                    'login' => $linha['nm_login'],
                    'senha' => $linha['nm_senha'],
                    'email' => $linha['ds_email'],
                    'celular' => $linha['nr_celular'],
                    'imagem' => $linha['url_img']
                )
            );
        }
       
        echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }