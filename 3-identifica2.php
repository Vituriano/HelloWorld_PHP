<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
	</head>
<body  style= "background:rgb(82,82,82)">
		<div id="tudo">
		<?php include 'conexao.php';
					
		?>
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	

		</div>
	

        <div id="conteudo">
		
		<div id='fonta'>
            <h2 align="center">Identificação</h2>
		</div>
		<br>
		<br>
	<div id="tabela">		
            <?php
				$curso = $_POST['letras'];
                $periodo = $_POST['Periodo'];
                $cpf1 = $_POST['cpf'];
				 $nome_aluno = $_POST['nome_aluno'];
                $email = $_POST['email'];
                $sexo = $_POST['sexo'];
                $nascimento = $_POST['nascimento'];
				
				
				
				$cpf = substr($cpf1,0,3).substr($cpf1,4,3).substr($cpf1,8,3).substr($cpf1,12,2);
				$resultado = "SELECT tb_relacao.cpf FROM tb_relacao WHERE cpf = $cpf" ; //UNION SELECT tb_relacao2.cpf FROM tb_relacao2 WHERE cpf = $cpf";
			
				$busca = mysqli_query($con, "SELECT * FROM tb_relacao WHERE cpf = $cpf");
				$dado = mysqli_fetch_array($busca);
				$nome = $dado['Nome'];
				
                $resul_resultado = mysqli_query($con, $resultado);
                $linha = mysqli_fetch_assoc($resul_resultado);
                if(mysqli_num_rows($resul_resultado)>0) {
                    $confirma=true;
                } else{
                     $confirma=false;
                }
                
                $query = "INSERT INTO tb_identifica (cpf, curso, periodo, nome_aluno, email, sexo, nascimento) 
                VALUES ('$cpf', '$curso', '$periodo' , '$nome_aluno', '$email', '$sexo', '$nascimento')";
                
				 $cpf = substr($cpf1,0,3).".".substr($cpf1,4,3).".".substr($cpf1,8,3)."-".substr($cpf1,12,2);
                if (mysqli_query($con, $query) && $confirma==true) {
                    $table = "<table align='center'>";
					$ftable = '</table>';
					$tr = '<tr>';
					$ftr = '</tr>';
					$td = '<td>';
					$ftd = '</td>';
					$nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo $table;
                    echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.'Nome completo: ' . $nome . '<br />'.$ftd.$ftr;
                    echo $tr.$td.$tr.$td.$nbsp.'CPF: ' . $cpf . '<br />'.$ftd.$ftr;
                    echo $tr.$td.$tr.$td.$nbsp.'Email: ' . $email . '<br />'.$ftd.$ftr;
                    echo $tr.$td.$tr.$td.$nbsp.'Sexo: ' .$sexo . '<br />'.$ftd.$ftr;
				    echo $tr.$td.$tr.$td.$nbsp.'Curso:  ' . $curso . '<br />'.$ftd.$ftr;
                    echo $tr.$td.$tr.$td.$nbsp.'Ano: ' . $periodo . '<br />'.$ftd.$ftr;
                    echo $tr.$td.$tr.$td.$nbsp.'Data de nascimento: ' . $nascimento . '<br />'.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable;
					
                } else {
                    echo "<center>CPF não encontrado na base de dados. Por favor, entre em contato com o coordenador.</center>";
                    echo('<meta http-equiv="refresh" content="0;URL= fidedignidade.php ">');
                }
				$cpf = substr($cpf1,0,3).substr($cpf1,4,3).substr($cpf1,8,3).substr($cpf1,12,2);
                $busca = "SELECT id_identifica FROM tb_identifica WHERE cpf LIKE '$cpf%' AND nome_aluno LIKE '$nome_aluno%'";
                $resul_busca = mysqli_query($con, $busca);
                $linha = mysqli_fetch_assoc($resul_busca);
                if(mysqli_num_rows($resul_busca)>0) {
                    $id_identifica = $linha['id_identifica'];
					echo '<br><br><strong> <center>Se os seus dados estiverem corretos clique em continuar, do contrário, clique em voltar</center></strong><br><br>';
                }
				
				$dia_nascimento = substr($nascimento,8,2);
				$mes_nascimento = substr($nascimento,5,2);
				$ano_nascimento= substr($nascimento,0,4);

				date_default_timezone_set('America/Porto_Velho');
				
				$dia_hoje= date("d");
				$mes_hoje=date("m");
				$ano_hoje=date('Y');

				if(($ano_hoje - 18) == $ano_nascimento){
					if($mes_nascimento < $mes_hoje){
						 echo"<FORM method='post' action='4-tcle.php'>";
					}else if($mes_nascimento > $mes_hoje){
						echo"<FORM method='post' action='4-tale.php'>";
					}else if($mes_nascimento == $mes_hoje){
						if($dia_nascimento <= $dia_hoje ){
							 echo"<FORM method='post' action='4-tcle.php'>";
						}else if($dia_nascimento > $dia_hoje){
							echo"<FORM method='post' action='4-tale.php'>";
						}
					}
				}else if(($ano_hoje - 18) < $ano_nascimento){
					echo"<FORM method='post' action='4-tale.php'>";
				}else if(($ano_hoje - 18) > $ano_nascimento){					
					echo"<FORM method='post' action='4-tcle.php'>";
				} 

             ?>  


            </div>
			
			</div>
			
						<center>							
						<table border=0>
							   <tr>
								 <td>
									 <input type="button" class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
								 </td>
								 <td>
								  <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identifica; ?>" />
								 </td>
								 <td>
								 <INPUT type="submit" class='botao01' value="continuar" name="submit" />
								 </td>
							   </tr>	
						</table>
						</center>
						        	<?php
				mysqli_close($con);
            ?>
            </FORM>
				
<br><br><br>
<br>
    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br>
	</div>
</body>
</html>