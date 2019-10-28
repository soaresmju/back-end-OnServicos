<?php
	try{ 
	    $conexao = mysqli_connect("localhost","id11112140_deniseasc","12345","id11112140_onservicos");
	
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$login = $_POST['login'];
		$password = $_POST['senha'];
		
        $senha = md5($password);
        
		$email = $_POST['email'];
		$celular = $_POST['celular'];
		
 	    $cep = $_POST['cep'];
 		$estado = $_POST['estado'];
 		$cidade = $_POST['cidade'];
 		$bairro = $_POST['bairro'];
 		$rua = $_POST['rua'];
 		$numero = $_POST['numero'];
 		$complemento = $_POST['complemento'];

 $query = "INSERT INTO tb_usuario (cd_usuario, nm_usuario, nr_cpf, nm_login, nm_senha, ds_email, nr_nivel, nr_celular, ds_img, nr_cep, nm_estado, nm_cidade, nm_bairro, nm_rua, nr_casa, ds_complemento) VALUES (null, '$nome', '$cpf', '$login', '$senha','$email', 1, '$celular',$cep', '$estado', '$cidade', '$bairro','$rua', '$numero', '$complemento')";		

  mysqli_query($conexao,$query);
                
        echo "Cadastro realizado com sucesso!";
        }catch(Exception $e){
            echo "Erro ao conectar: ".$e;
        }
?>