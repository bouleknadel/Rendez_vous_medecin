console.log("hi");
document.addEventListener("DOMContentLoaded", function () {
  var form = document.querySelector("form");
  var submitButton = document.getElementById("Soumettre");
  document.getElementById("nom").onkeyup = () => {
    if (!document.getElementById("nom").value.trim()) {
      document.getElementById("nom_error").innerText = "Le nom est requis.";
      document.getElementById("nom_error").style.color = "red";
    } else {
      document.getElementById("nom_error").innerText = "";
    }
  };
  document.getElementById("prenom").onkeyup = () => {
    if (!document.getElementById("prenom").value.trim()) {
      document.getElementById("prenom_error").innerText =
        "Le prenom est requis.";
      document.getElementById("prenom_error").style.color = "red";
    } else {
      document.getElementById("prenom_error").innerText = "";
    }
  };
  document.getElementById("dateNaissance").onkeyup = () => {
    if (!document.getElementById("dateNaissance").value.trim()) {
      document.getElementById("date_error").innerText =
        "La date de naissance est requise.";
      document.getElementById("date_error").style.color = "red";
    } else {
      document.getElementById("date_error").innerText = "";
    }
  };
  document.getElementById("email").onkeyup = () => {
    if (! document.getElementById("email").value.trim()) {
      document.getElementById("email_error").innerText = "Le email est requis.";
      document.getElementById("email_error").style.color = "red";
    } else if (!isValidEmail(document.getElementById("email").value)) {
      document.getElementById("email_error").innerText =
        "L'email n'est pas valide.";
      document.getElementById("email_error").style.color = "red";
    } else {
      document.getElementById("email_error").innerText = "";
    }
  };
  document.getElementById("mot_de_passe").onkeyup=()=>{
  if (!  document.getElementsByName("mot_de_passe")[0].value.trim()) {
    document.getElementById("pass_error").innerText = "Le mot de passe est requis.";
    document.getElementById("pass_error").style.color = "red";
} 
  
else{
    document.getElementById("pass_error").innerText = ""; 
}
  }

document.getElementById("confirm_mot_de_passe").onkeyup=()=>{
  if ( document.getElementsByName("mot_de_passe")[0].value!==document.getElementsByName(
    "confirm_mot_de_passe"
  )[0].value) {
    
    document.getElementById("passc_error").innerText = "Les mots de passe ne correspondent pas.";
    document.getElementById("passc_error").style.color = "red";
  

  }
else{
    document.getElementById("passc_error").innerText ="";
}
}

  submitButton.addEventListener("click", function (event) {
    event.preventDefault(); // Empêche l'envoi du formulaire par défaut

    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var dateNaissance = document.getElementById("dateNaissance").value;
    var type = document.getElementsByName("type")[0].value;
    var motDePasse = document.getElementsByName("mot_de_passe")[0].value;
    var confirmMotDePasse = document.getElementsByName(
      "confirm_mot_de_passe"
    )[0].value;

    var errors = [];

    // Validation du nom

    if (!nom.trim()) {
        errors.push(0);
      document.getElementById("nom_error").innerText = "Le nom est requis.";
      document.getElementById("nom_error").style.color = "red";
    } else {
      document.getElementById("nom_error").innerText = "";
    }

    // Validation du prénom
    if (!prenom.trim()) {
        errors.push(0);
      document.getElementById("prenom_error").innerText =
        "Le prenom est requis.";
      document.getElementById("prenom_error").style.color = "red";
    } else {
      document.getElementById("prenom_error").innerText = "";
    }

    // Validation de l'email
    if (!email.trim()) {
        errors.push(0);
      document.getElementById("email_error").innerText = "Le email est requis.";
      document.getElementById("email_error").style.color = "red";
    } else if (!isValidEmail(email)) {
        errors.push(0);
      document.getElementById("email_error").innerText =
        "L'email n'est pas valide.";
      document.getElementById("email_error").style.color = "red";
    } else {
      document.getElementById("email_error").innerText = "";
    }

    // Validation de la date de naissance
    if (!dateNaissance.trim()) {
        errors.push(0);
        document.getElementById("date_error").innerText = "La date de naissance est requise.";
        document.getElementById("date_error").style.color = "red";
      
    }
    else{
        document.getElementById("date_error").innerText ="";
    }

    // Validation du type
    if (type === "0") {
        errors.push(0);
        document.getElementById("type_error").innerText = "Le type est requise.";
        document.getElementById("type_error").style.color = "red";
    }
    else{
        document.getElementById("type_error").innerText =""; 
    }

    // Validation du mot de passe
    if (!motDePasse.trim()) {
        errors.push(0);
        document.getElementById("pass_error").innerText = "Le mot de passe est requis.";
        document.getElementById("pass_error").style.color = "red";
    } else if (motDePasse !== confirmMotDePasse) {
        errors.push(0);
        document.getElementById("pass_error").innerText = "Les mots de passe ne correspondent pas.";
        document.getElementById("pass_error").style.color = "red";
      
    }
    else{
        document.getElementById("pass_error").innerText = "";
    }

    // Affichage des erreurs
    if (errors.length > 0) {
    } else {
      Swal.fire({
        title: "Votre compte a été bien créé.",
        icon: "success",
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ok"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
          });
        }
      });
      //form.submit(); // Soumet le formulaire si aucune erreur n'est présente
    }
  });
});

function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
