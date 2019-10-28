<?php
    session_start();
    try{
        $conexao = mysqli_connect("localhost","id11112140_deniseasc","12345","id11112140_onservicos");
        
        $login = $_POST['login'];
        $password = $_POST['senha'];
        $senha = md5($password);
        
        $query="SELECT * FROM tb_profissional WHERE nm_login = '$login' AND nm_senha = '$senha'";
        
        $resultado = mysqli_query($conexao,$query);
        
        while($linha = mysqli_fetch_assoc($resultado))
        {
            
            $registro = array(
                'profissional' => array(
                    'login' => $linha['nm_login'],
                    'senha' => $linha['nm_senha'],
                    'nivel' => $linha['nr_nivel']
                )
                
            );
        }
        
        echo json_encode($registro);

    } 

    catch(Exception $e)
    {
        echo "Erro ao conectar: ".$e;
    }

?>