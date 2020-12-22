<html>

<head>
<title></title>
<link rel="stylesheet" href="./css/style.css">
</head>

<body>

<?php
	require "db.php";
?>

<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form name="formlogin" method="post" action="autentication.php">
			<div id="background">  	
				<h1>Login Studio.h</h1> 

				<p> 
					<label for="email_login">Seu e-mail</label>
					<input id="email_login" type="mail" name="email" required="required"  placeholder="contato@email.com"/>
				</p>
				
				<p> 
					<label for="senha_login">Sua senha</label>
					<input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
				</p>
			</div>
          
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form name="signup" method="post" action="procedimento.php"> 
			<div id="background">  
				<h1>Cadastro Studio.h</h1>
				
				<p> 
					<label for="nome_cad">Seu nome</label>
					<input id="nome_cad" name="nome" required="required" type="text" placeholder="Luiz Augusto" />
				</p>
				
				<p> 
					<label for="email_cad">Seu e-mail</label>
					<input id="email_cad" name="email" required="required" type="email" placeholder="contato@email.com"/> 
				</p>
				
				<p> 
					<label for="senha_cad">Sua senha</label>
					<input id="senha_cad" name="senha" required="required" type="password" placeholder="1234"/>
				</p>
				
				<p> 
					<input type="submit" value="Cadastrar"/> 
				</p>
			</div>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div> 

</form>
</body>
</html>