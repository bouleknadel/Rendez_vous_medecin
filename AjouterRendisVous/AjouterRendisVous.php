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
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Formulaire de Rendez-vous Médical</h2>
                    <form action="Contoller.php" method="POST">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <div class="input-group">
                                    <label class="label"><i class="fa-solid fa-calendar"></i> Date souhaitée pour la rendez-vous <span style="color:red">*</span> </label>
                                    <div class="input-group-icon">
                                        <input type="date" class="input--style-4 js-datepicker" type="text" name="date_rendezvous">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        <p class="err" id="date_err" style="color: red;"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <div class="input-group">
                                    <label class="label"><i class="fa-solid fa-clock"></i> Heure souhaitée pour la rendez-vous <span style="color:red">*</span></label>
                                    <input class="input--style-4 inp" type="time" name="heure_rendezvous">
                                    <p class="err" id="heure_err" style="color: red;"></p>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <div class="input-group">
                                    <label class="label"><i class="fa-solid fa-pencil"></i> Motif de la rendez-vous</label>
                                    <textarea class="input--style-4 inp" name="motif_rendezvous" style="width: 100%;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-user-doctor"></i> Médecin souhaité <span style="color:red">*</span></label>
                            <select class="input--style-4 inp" name="medecin_souhaite" style="width: 100%;height: 50px;">
                                <option value="0"></option>
                                <option value="1">Médecin 1</option>
                                <option value="1">Médecin 2</option>
                                <option value="1">Médecin 3</option>
                            </select>
                            <p class="err" id="medecin_err" style="color: red;"></p>
                        </div>

                        
                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-list-alt"></i> Type de rendez-vous <span style="color:red">*</span></label>
                            <select class="input--style-4 inp" name="type_rendezvous" style="width: 100%;height: 50px;">
                                <option value="0">Choisissez le type de rendez-vous</option>
                                <option value="1">Consultation en personne</option>
                                <option value="1">Téléconsultation</option>
                                <option value="1">Autre</option>
                            </select>
                            <p class="err" id="type_err" style="color: red;"></p>
                            
                        </div>

                        <div class="input-group">
                            <label class="label"><i class="fa-solid fa-shield"></i> Assurance maladie</label>
                            <input class="input--style-4 inp" type="text" name="assurance_maladie">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--red" style="background-color: rgb(208, 62, 62);" type="button">Annuler</button>
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
    <script src="js/global.js"></script>
    <script>
      const form = document.getElementById('Soumettre'); // Get the submit button

form.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent default form submission

  const date = document.getElementsByName('date_rendezvous')[0].value;
  const heure = document.getElementsByName('heure_rendezvous')[0].value;
  const medecin = document.getElementsByName('medecin_souhaite')[0].value;
  const type = document.getElementsByName('type_rendezvous')[0].value;

  let errorMessage = false; // Flag to track errors

  // Reset error messages
  document.getElementById('date_err').innerHTML = '';
  document.getElementById('heure_err').innerHTML = '';
  document.getElementById('medecin_err').innerHTML = '';
  document.getElementById('type_err').innerHTML = '';

  // Validate required fields
  if (date === '') {
    document.getElementById('date_err').innerHTML = 'La date est requise.';
    errorMessage = true;
  }

  if (heure === '') {
    document.getElementById('heure_err').innerHTML = 'L\'heure est requise.';
    errorMessage = true;
  }

  if (medecin === '0') { 
    document.getElementById('medecin_err').innerHTML = 'Veuillez sélectionner un médecin.';
    errorMessage = true;
  }

  if (type === '0') {
    document.getElementById('type_err').innerHTML = 'Le type de rendez-vous est requis.';
    errorMessage = true;
  }

  // Submit form if no errors
  if (!errorMessage) {
    form.form.submit(); // Submit the form using the parent form element
  }
});

    </script>
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->