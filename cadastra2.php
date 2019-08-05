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
		<?php include 'conexao.php';?>
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	
		<div id="numeracao">
               <blockquote> <label>1/8</label>
            </div>
		</div>
	

        <div id="conteudo">
		
		<div id='fonta'>
            <h2 align="center">Cadastro</h2>
		</div>
	<div id="tabela">		
            <?php
                $cpf1 = $_POST['cpf'];
                $Nome1 = $_POST['nome_aluno'];
				$Nome = strtoupper($Nome1);
				$cpf = substr($cpf1,0,3).substr($cpf1,4,3).substr($cpf1,8,3).substr($cpf1,12,2);
                
				
				$busca = mysqli_query($con, "SELECT * FROM tb_relacao WHERE cpf = $cpf");
				$dado = mysqli_fetch_array($busca);
				$nome = $dado['Nome'];
				
								
				$cpf = substr($cpf1,0,3).substr($cpf1,4,3).substr($cpf1,8,3).substr($cpf1,12,2);
				$resultado = "SELECT tb_relacao.cpf FROM tb_relacao WHERE cpf = $cpf" ;
				
                $resul_resultado = mysqli_query($con, $resultado);
                $linha = mysqli_fetch_assoc($resul_resultado);
                if(mysqli_num_rows($resul_resultado)>0) {
                    $confirma=false;
                } else{
                     $confirma=true;
                }
				
               
                if ($confirma==true) {
					$query = "INSERT INTO tb_relacao (Nome, cpf) 
					VALUES ('$Nome', '$cpf')";
					if (mysqli_query($con, $query)){
						$cpf = substr($cpf1,0,3).".".substr($cpf1,4,3).".".substr($cpf1,8,3)."-".substr($cpf1,12,2);
						$table = "<table align='center'>";
						$ftable = '</table>';
						$tr = '<tr>';
						$ftr = '</tr>';
						$td = '<td>';
						$ftd = '</td>';
						$nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
						echo $table;
						echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.'Nome completo: ' . $Nome . '<br />'.$ftd.$ftr;
						echo $tr.$td.$tr.$td.$nbsp.'CPF: ' . $cpf .$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
						echo $ftable;
						echo '<br><br><strong> <center>Se os seus dados estiverem corretos clique em continuar, do contrário, clique em voltar</center></strong><br><br>';
						
					}else{
						echo "erro ao cadastrar, tente novamente";
					}
                } else {
                    echo "<center>CPF já cadastrado, tente novamente a identificação</center>";
					echo "<br><br><br><br><br><br><br>";
                }
             ?>  

            </div>
			
			</div>
			<form name="form" action="2-identifica1.php" method="POST" >
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
				
<br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br>
	</div>
</body>
</html>