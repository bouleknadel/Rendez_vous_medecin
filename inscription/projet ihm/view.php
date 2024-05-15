<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="controller.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : '' ?>">

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>">

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">

            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" id="dateNaissance" name="dateNaissance" required value="<?php echo isset($_POST['dateNaissance']) ? $_POST['dateNaissance'] : '' ?>">

            <label for="type">Type :</label>
            <select id="type" name="type" required>
                <option value="">Sélectionner un type</option>
                <option value="patient" <?php echo (isset($_POST['type']) && $_POST['type'] == 'patient') ? 'selected' : '' ?>>Patient</option>
                <option value="medecin" <?php echo (isset($_POST['type']) && $_POST['type'] == 'medecin') ? 'selected' : '' ?>>Médecin</option>
            </select>

            <label for="motDePasse">Mot de passe :</label>
            <input type="password" id="motDePasse" name="motDePasse" required>

            <label for="confirmerMotDePasse">Confirmer mot de passe :</label>
            <input type="password" id="confirmerMotDePasse" name="confirmerMotDePasse" required>
            <input type="submit" name="submit" value="S'inscrire">
        </form>
    </div>
</body>
</html>
