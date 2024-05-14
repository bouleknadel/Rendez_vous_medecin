<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylelogin.css"/> 
</head>
<body>

<div class="login">
<i ripple>

</i>
<div class="photo">
</div>
<span>se connecter</span>

<form action="controller.php" method="post" id="login-form">
<?php
if(isset($_GET['error']))
echo
'<p  style="color: red;
font-size: 14px;
margin-top: 5px;
text-align: center;
">
Email ou mot de pass incorrecte</p>';
?>

<div id="u" class="form-group">
  <input id="username" spellcheck=false class="form-control" name="email" type="text" size="18" alt="login" required="">
  <span class="form-highlight"></span>
  <span class="form-bar"></span>
  <label for="username" class="float-label">Email</label>
  <erroru>
  Le format de l'adresse email est incorrect
  	<i>		
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
		    <path d="M0 0h24v24h-24z" fill="none"/>
		    <path d="M1 21h22l-11-19-11 19zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
		</svg>
  	</i>
  </erroru>
</div>
<div id="p" class="form-group">
  <input id="password" class="form-control" spellcheck=false name="password" type="password" size="18" alt="login" required="">
  <span class="form-highlight"></span>
  <span class="form-bar"></span>
  <label for="password" class="float-label">Mot de pass</label>
  <errorp>
  	mot de pass obligatoire
  	<i>		
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
		    <path d="M0 0h24v24h-24z" fill="none"/>
		    <path d="M1 21h22l-11-19-11 19zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
		</svg>
  	</i>
  </errorp>
 
</div>

<div class="form-group">

    
<button id="submit" type="submit" ripple>Se connecter</button>
</div>
</form>
<footer><a href="#0">Creer un compte</a></footer>
</div>
<script src="jquery-3.7.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="../js/login.js"></script>
</body>
</html>