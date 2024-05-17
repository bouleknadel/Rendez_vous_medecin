<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylelogin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .login{
        padding-top: 50px;
        border-radius: 20px;
        height: 330px;
      }
      .fa-solid{
        margin-right: 4px;
      }
      
    </style> 
</head>
<body>

<div class="login">
<i ripple>

</i>

<span class="connecter" style=" font-size: 30px;font-weight:600">se connecter</span>

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
  <label for="username" class="float-label"><i class="fa-solid fa-envelope"></i> Email</label>
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
  <label for="password" class="float-label"><i class="fa-solid fa-lock"></i> Mot de pass</label>
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

    
<button id="submit" class="btn btn-primary" style="background-color: #007bff;margin-right:114px;" type="submit" ripple>Se connecter</button>
</div>
</form>
<footer><a href="../inscription/vieww.php" style="font-size:14px;color:black;">Creer un compte</a></footer>
</div>




<script src="jquery-3.7.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="../js/login.js"></script>
</body>
</html>