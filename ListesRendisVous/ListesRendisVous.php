<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des rendez-vous</title>
    <link rel="stylesheet" href="lib/datatables//dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
        justify-content: center;
        align-items: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .containerr {
            background-color: #FBFBFB;
            margin: 20px 0px;
            min-height: 80vh;
            padding: 30px;
            width : 96%;
            border-radius: 20px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .containerr h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
        }

        table th {
            background-color: #2F2933;
            color: white;

        }

        .container_table {
            margin-top: 50px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin: 0 20px;
        }
        .btn_container{
            width : 50%;
            text-align: right;
        }
        i {
        margin-right: 4px;
        font-weight: 900;
        font-size: 18px;
        }
        @media screen  and (max-width: 768px){
            body {
            }
            .btn_container{
                width: 100%;
                font-size: 15px;
                text-align: center;
            }
         .header{
            display: flex;
            flex-direction: column;
            align-items: center;
         }
        }
    </style>
</head>

<body>
    <div class="containerr">
        <div class="header">
            <h1>Liste des rendez-vous</h1>
            <div class="btn_container">
                <a href="../AjouterRendisVous/AjouterRendisVous.php" class="btn btn-sm btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fa-solid fa-plus"></i> Ajouter rendez-vous</a>
                <a href="#" class="btn btn-sm btn-danger btn-lg active" role="button" aria-pressed="true"><i class="fa-solid fa-right-from-bracket"></i> Déconnecter</a>
            </div>

        </div>

        <div class="container_table">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th scope="col"><i class="fa-solid fa-calendar"></i> Date de Rendez-vous</th>
                        <th scope="col"><i class="fa-solid fa-clock"></i> Heure de Rendez-vous</th>
                        <th scope="col"><i class="fa-solid fa-user-doctor"></i> Médecin</th>
                        <th scope="col"><i class="fa-solid fa-list-alt"></i> Type de Rendez-vous</th>
                        <th scope="col"><i class="fa-solid fa-pencil"></i> Motif</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultats as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['Date'] . "</td>";
                        echo "<td>" . $row['Heure'] . "</td>";
                        echo "<td>" . $row['nom'] ." ". $row['prenom']. "</td>";
                        echo "<td>" . $row['type'] . "</td>";
                        echo "<td>" . $row['Motif'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="lib/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="lib/datatables/dataTables.js"></script>
    <script>
        $(function () {
        $("#myTable")
          .DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: true,
           
          })
        })
    </script>
</body>

</html>