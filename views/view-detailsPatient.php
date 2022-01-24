<?php

require_once '../controllers/controller-detailsPatient.php';

?>

<!doctype html>
<html lang="fr">

<head>
    <title>CRUD | Patient details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light justify-content-center">
        <div class="collapse navbar-collapse d-flex flex-column" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view-addPatients.php">add patient</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view-listPatients.php">patient list</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view-addAppointments.php">add appointment</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view-listAppointments.php">appointments list</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <p class="d-flex justify-content-center font-weight-bold text-uppercase mt-4 titleWelcolme">patient details</p>
            </div>
        </div>

        <div class="row justify-content-center">

            <?php
            if ($detailsPatientArray) {
                include 'include/details-patient.php';
            } else { ?>
            <div>
                <p class="h5 text-danger text-center mb-3"></i>This patient doesn't exist.</p>
                <div class="text-center">
                    <a type="button" href="view-addPatients.php" class="btn btn-sm btn-outline-secondary">CLICK HERE FOR ADD NEW PATIENT</a>
                </div>
            </div>
            <?php } ?>

        </div>

        <div class="mt-3 mb-3 d-flex justify-content-center">
            <a type="button" href="../index.php" class="btn btnConnexion mr-1">back home page</a>
        </div>

        <footer class="sticky-bottom mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pt-5 pb-4">
                        <p class="textFoot"><i class="fas fa-question-circle logo"></i>Assistance</p>
                        <p class="textFoot"><i class="fas fa-info-circle logo"></i>Terms and Conditions</p>
                        <p class="textFoot"><i class="far fa-user-circle logo"></i>TheoWebDev</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>