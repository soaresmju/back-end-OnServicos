<?php
    try {
        $conexao = mysqli_connect("localhost","id11112140_deniseasc","12345","id11112140_onservicos");
                                //servidor , usuario banco, senha, nome do banco
    
        
        $query = "SELECT * FROM tb_profissional ORDER BY cd_profissional ASC";
        
        
        $resultado = mysqli_query($conexao,$query);
        
        $registro = array(
            'pessoas'=>array()
        );
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['pessoas'][$i] = array(
                'nome' => $linha['nm_profissional'],
                'cpf' => $linha['nr_cpf'],
                'login' => $linha['nm_login'],
                'senha' => $linha['nm_senha'],
                'email' => $linha['ds_email'],
                'celular' => $linha['nr_celular']
            );
            
            $i++;
        }
      
       echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }
?>