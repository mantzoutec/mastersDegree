<?php
    // Start session, assign the values from database to session array.
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>

<body>
    <!-- Header & Navigation -->
    <?php include 'header_nav.php'; ?>

    <!-- Body -->
    <div class="container-fluid">
        <br>
        <h6>
            <strong>ΕΙΣΟΔΟΣ</strong>
        </h6>
        <br>
        <h6>Συνδεθείτε με τα συνθηματικά σας</h6>
        <br>
        <br>
        <br>
        <!-- login form -->
        <form action="login.php" method="POST">
            <div class="row">
                <div class="col-8 offset-4">
                    <!-- username -->
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- password -->
            <div class="row">
                <div class="col-8 offset-4">
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- submit button -->
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Υποβολή</button>
                </div>
            </div>
        </form>

        <br>
        <br>
        <br>

        <!-- test start -->
        <?php
        // set up  the variables to empty string
        $username = "";
        $password = "";
        $passwordat = "";


        if (isset($_POST['username']))
            // Protect from XSS attacks
            $username = htmlspecialchars(stripslashes($_POST['username']));
        if (isset($_POST['password']))
            // Protect from XSS attacks
            $password = htmlspecialchars(stripslashes($_POST['password']));


        // Connect to database
        include 'conn.php';

        $result = $con->query("SELECT * FROM user WHERE email = \"$username\"");

        if (mysqli_num_rows($result) == 1) {

            // assign values to a table
            $row = mysqli_fetch_row($result);

            // assign values to variables 
            $iduser = $row[0];
            $name = $row[1];
            $surname = $row[2];
            $email = $row[3];
            $passwordat = $row[4];
            $role = $row[5];
            $cellphone = $row[6];
            $address = $row[7];
            $birthDate = $row[8];
            $firstRegisterDate = $row[9];
            $eapid = $row[10];

            if ($password == $passwordat) {
                // Session array values set  data from database
                $_SESSION['l_iduser'] = $iduser;
                $_SESSION['l_name'] = $name;
                $_SESSION['l_surname'] = $surname;
                $_SESSION['l_email'] = $email;
                $_SESSION['l_passwordat'] = $passwordat;
                $_SESSION['l_role'] = $role;
                $_SESSION['l_cellphone'] = $cellphone;

                echo'<script> alert("Επιτυχής σύνδεση, μεταφορά στην αρχική σελίδα."); document.location ="index.php"; </script>';

            } else {
                // session array values set to empty strings
                $_SESSION['l_iduser'] = "";
                $_SESSION['l_name'] = "";
                $_SESSION['l_surname'] = "";
                $_SESSION['l_email'] = "";
                $_SESSION['l_passwordat'] = "";
                $_SESSION['l_role'] = "";
                $_SESSION['l_cellphone'] = "";

                echo '<script> alert("Παρακαλώ εισάγετε το σωστό κωδικό."); </script>';
                exit();
            }
        }

        if(strlen($password) > 0){
            // Javascript alert function
            echo '<script> alert("Το email που καταχωρήσατε δεν υπάρχει στην βάση δεδομένων"); </script>';
            exit();
        }    

        $result->free_result();
        $con->close();

        ?>
        <!-- test end -->
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>