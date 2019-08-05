<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="style.css">
		<title>GESSTEC - IFRO </title>
<link rel="shortcut icon" type="image/x-icon" href="ifro.png">
    <link rel="stylesheet" href="style.css">
	</head>
		<body  style= "background:rgb(82,82,82)">
		<div id="tudo">

			<div id="cabeca">
		<figure align= "left">	
			<img src= "COLA.png">
		</figure>	
		</div>
				
				
        <script language='JavaScript'>
			function formatar(mascara, documento){
				var i = documento.value.length;
				var saida = mascara.substring(0,1);
				var texto = mascara.substring(i)
  
				if (texto.substring(0,1) != saida){
					documento.value += texto.substring(0,1);
				}
			}      
	  function SomenteNumero(e){
            var tecla=(window.event)?event.keyCode:e.which;   
            if((tecla>47 && tecla<58)) return true;
            else{
                if (tecla==8 || tecla==0) return true;
            else  return false;
            }
        }
</script>

        <div id="conteudo">
            <div id='fonta'>
			<h2>Identificação</h2>
			</div>
		
                
				<div id="tabela">
				<TABLE align="center">
					<form name="form" action="3-identifica2.php" method="POST" >
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
                    <TR> 
                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPF: </TD>
                        <TD><INPUT type="text" id="cpf" name="cpf"  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required /></TD>
                    </TR>
	
					<TR>
                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome completo:</TD>
                        <TD><INPUT type="text" id="nome_aluno" name="nome_aluno" required /></TD>
                    </TR>


                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: </TD>
                        <TD><INPUT type="email" id="email" name="email"  required /></TD>
                    </TR>
                    
                    <TR>
                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sexo: </TD>
                        <TD>
                             <INPUT type="hidden" value="" id="sexo" name="sexo" >
                            F<INPUT type="radio" value="F" id="sexo" name="sexo" required />
                            M<INPUT type="radio" value="M" id="sexo" name="sexo" required />
                        </TD>
                    </TR>
                    <TR>
					<TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Curso: </TD>
					<TD>
					<select name="letras" onChange="troca('letras',this.value)" required >
					<option id="letras" value=""selected>Selecione o seu Curso</option>
					<option id="letras" value="Edficações">Edficações</option>
					<option id="letras" value="Elétrotécnica">Elétrotécnica</option>
					<option id="letras" value="Informática">Informática</option>
					<option id="letras" value="Química">Química</option>
					</select>
					</td>
					</TR>
                    <TR>
                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ano: </TD>
                        <TD>
                              <select name="Periodo" required >
								  <option id="Periodo" value=""selected>Escolha o seu Período</option>
								  <option id="Periodo" value="1º">1º</option>
								  <option id="Periodo" value="2º">2º</option>
								  <option id="Periodo" value="3°">3°</option>
								  <option id="Periodo" value="4°">4°</option>
                              </select>
                        </td>
                    </TR>   

                        <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nascimento</TD>

                        <TD>
                            <INPUT type="date" max="2015-12-31" id="nascimento" name="nascimento" required />
                        </TD>
                    </TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
						<TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR><TR>&nbsp;&nbsp;&nbsp;</TR>
                </TABLE>
				</div>
				
                <br><br><br>	
		<center>
	    <div class="content">
		<INPUT type="submit"  class="botao01" value="Continuar" name="submit"/>
		</div>
		</center>

            </FORM>
        </div>
		<br><br><br><br><br><br><br><br>

    
        <div id="rodape">
            <?php include 'rodape.php';?>
        </div>
		<br>
		</div>
</body>
</html>