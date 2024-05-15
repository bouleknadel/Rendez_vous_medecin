<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
<a href="../guide/index.html" class="btn btn-primary" style="position: fixed; top: 20px; left: 20px; z-index: 9999; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); width: auto;">
    Guide d'utilisation <i class="fa-solid fa-question-circle"></i>
</a>

<div class="page-wrapper bg-gra-02 font-poppins" style="padding-top: 40px;padding-bottom:40px;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Inscription</h2>
                    <form action="Controller.php" method="POST">
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-user"></i> Nom <span style="color:red">*</span></label>
                            <input class="input--style-4 inp" type="text" id="nom" name="nom"  value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : '' ?>">
                            <div id="nom_error" class="error-message"></div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-user"></i> Prénom <span style="color:red">*</span></label>
                            <input class="input--style-4 inp" type="text" id="prenom" name="prenom" required value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>">
                            <div id="prenom_error" class="error-message"></div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-envelope"></i> Email <span style="color:red">*</span></label>
                            <input class="input--style-4 inp" type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                            <div id="email_error" class="error-message"></div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-calendar"></i> Date de naissance <span style="color:red">*</span></label>
                            <input class="input--style-4 inp" type="date" id="dateNaissance" name="dateNaissance" required value="<?php echo isset($_POST['dateNaissance']) ? $_POST['dateNaissance'] : '' ?>">
                            <div id="date_error" class="error-message"></div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-user"></i> Type <span style="color:red">*</span></label>
                            <select class="input--style-4 inp" name="type" style="width: 100%; height:40px;">
                                <option value="0">Sélectionner un type</option>
                                <option value="1" <?php echo (isset($_POST['type']) && $_POST['type'] == 'patient') ? 'selected' : '' ?>>Patient</option>
                                <option value="2" <?php echo (isset($_POST['type']) && $_POST['type'] == 'medecin') ? 'selected' : '' ?>>Médecin</option>
                            </select>
                            <div id="type_error" class="error-message"></div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-lock"></i> Mot de passe <span style="color:red">*</span></label>
                            <input id="mot_de_passe" class="input--style-4 inp" type="password" name="mot_de_passe">
                            <div id="pass_error" class="error-message"></div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-lock"></i> Confirmer mot de passe <span style="color:red">*</span></label>
                            <input id="confirm_mot_de_passe" class="input--style-4 inp" type="password" name="confirm_mot_de_passe">
                            <div id="passc_error" class="error-message"></div>
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--red" style="background-color: rgb(208, 62, 62);" ><a style="color: white;text-decoration: initial;" href="../login/login_form.php">Annuler</a></button>
                            <button class="btn btn--radius-2 btn--blue" type="submit" id="Soumettre">Soumettre <i class="fa-solid fa-arrow-right" style="margin-left: 4px;"></i></button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    

    <!-- Main JS-->
    <script src="inscri.js"></script>
    
     
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->