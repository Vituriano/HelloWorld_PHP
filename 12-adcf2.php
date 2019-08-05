<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <meta content="text/html"; charset=utf-8 />
    <link rel="stylesheet" href="style.css">
</head>
       <?php include 'conexao.php';
	                   $id_identifica = $_POST['pk_id_identifica'];
		?>

    <div id="tudo">
               
		<body  style= "background:rgb(82,82,82)">
		<div id="tudo">
			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>
            <div id="numeracao">
               <blockquote> <label>5/8</label>
            </div>		
		</div>



        <div id="conteudo">
             <div id="fonta"><h2>Avaliação da Condição Física</h2></div><br><br>
            <?php
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                $q6 = $_POST['q6'];
                $q7 = $_POST['q7'];
                $q8 = $_POST['q8'];
                $q9 = $_POST['q9'];
                $q10 = $_POST['q10'];
                $id_identifica = $_POST['pk_id_identifica'];
                $query = "INSERT INTO tb_adcf (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, pk_id_identifica) 
                VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$id_identifica')";
                
                if (mysqli_query($con, $query)) {
                    //echo $id_identifica;
                } else {
                    echo "Erro: " . $sql . "<br>" . mysqli_error($con);
                }
                mysqli_close($con);


                $resultado=0;
                if ($q1=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q2=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q3=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q4=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q5=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q6=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q7=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q8=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q9=="Nao") {
                    $resultado = $resultado+1;
                }
                if ($q10=="Nao") {
                    $resultado = $resultado+1;
                }
            ?>
 <blockquote>
			<div id="tabelaa">
			 <?php 
			 		$t = "<font size=5 face=Arial align='justify'>";
					$y = "</font>";
					$table = "<table align='center'>";
					$ftable = '</table>';
					$tr = '<tr>';
					$ftr = '</tr>';
					$td = '<td>';
					$ftd = '</td>';
					$nbsp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    echo $table;
					echo $tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$nbsp.$t.'Sua pontuação total é '.$resultado.".".$y.$ftd.$ftr; 
            
			if ($resultado<=5) {
                    echo $tr.$td.$tr.$td.$nbsp.$t.'Condição física insuficiente.'.$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t.'Você não está em boas condições físicas.'.$y.$ftd.$ftr;
					echo $tr.$td.$tr.$td.$nbsp.$t.'Por isso, precisa praticar mais atividades físicas.'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable; 
                } elseif ($resultado<=7) {
                    echo $tr.$td.$tr.$td.$nbsp.$t.'Condição física normal.'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable; 
                } else{
                    echo $tr.$td.$tr.$td.$nbsp.$t. 'Boa condição física.'.$y.$ftd.$ftr.$tr.$td.$tr.$td.$tr.$td.$tr.$td.$tr.$td;
					echo $ftable; 
                }
            ?>
			</div>
            
                <br /><br />
							<div id="tabelg" >
            <center>
			<table border="0">
               <tr></tr>
				
				
                <tr><td><li>Entre 8 e 10 pontos - Boa condição física. <br /></li></td></tr>
                <tr><td><li>Entre 6 e  7 pontos - Condição física normal. <br /></li></td></tr>
                <tr><td><li>Entre 1 e  5 pontos - Condição física insuficiente. <br /></li></td></tr>
            <tr><td>Fonte: Teixeira (1995, p. 17).</td></tr>
			<tr></tr>
            </table>
			</center>
            </div>
			<br><br><br><br><br><br>
            <br /><FORM method="post" action='13-comportamento1.php'>
							<center>
							<table border="0">
							   <tr>
								 <td>
									 <input type="button" class='botao01' value="Voltar" onClick="JavaScript: window.history.back();">
								 </td>
								 <td>
								  <INPUT TYPE="hidden" NAME="pk_id_identifica" VALUE="<?php echo $id_identifica; ?>" />
								 </td>
								 <td>
								 <INPUT type="submit" class='botao01' value="Continuar" name="submit" />
								 </td>
							   </tr>
							  </table>
							  </center>
            </FORM>
        </div>
    <div id="rodape">
        <?php include 'rodape.php';?>
    </div>
	<br>
	</div>
</body>
</html>