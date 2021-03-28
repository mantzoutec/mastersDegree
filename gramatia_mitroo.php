<?php
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
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col offset-5">
                <h6>
                    <strong>ΦΟΡΜΑ ΕΓΓΡΑΦΗΣ ΧΡΗΣΤΗ</strong>
                </h6>
            </div>
        </div>
        <br>
        <br>
        <form name="userRegister" action="gramatia_mitroo.php" method="POST" onSubmit="return validate()">
            <!-- name -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Ονομα</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- surname -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="surname" class="col-sm-2 col-form-label">Επίθετο</label>
                        <div class="col-sm-4">
                            <input type="text" name="surname" class="form-control" id="surname" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- email -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Υποχρεωτική κατάληξη @eap.gr" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- password -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Κωδικός</label>
                        <div class="col-sm-4">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Τουλάχιστον 8 χαρακτήρες" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- role -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Ρόλος</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="role" id="role" onchange="checkrole(this)">
                                <option selected>Επιλέξτε</option>
                                <option value="1">Γραμματεία</option>
                                <option value="2">Καθηγητής</option>
                                <option value="3">Φοιτητής</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- semester -->
            <div id="showsemester" style="display: none">
                <div class="row">
                    <div class="col-10 offset-4">
                        <div class="form-group row">
                            <label for="semester" class="col-sm-2 col-form-label">Εξάμηνο</label>
                            <div class="col-sm-4">
                            <select class="form-control" name="semester" id="semester">
                                <option selected>Εξάμηνο</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>               
            <!-- cellphone -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="cellphone" class="col-sm-2 col-form-label">Κινητό τηλέφωνο</label>
                        <div class="col-sm-4">
                            <input type="text" name="cellphone" class="form-control" id="cellphone">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- address -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Διεύθυνση</label>
                        <div class="col-sm-4">
                            <input type="text" name="address" class="form-control" id="address">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- birthdate -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="birthdate" class="col-sm-2 col-form-label">Ημερομηνία Γένησης</label>
                        <div class="col-sm-4">
                            <input type="date" name="birthdate" class="form-control" id="birthdate">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- registerdate -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="registerdate" class="col-sm-2 col-form-label">Ημερομηνία Εγγραφής</label>
                        <div class="col-sm-4">
                            <input type="date" name="registerdate" class="form-control" id="registerdate">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- eapid -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="eapid" class="col-sm-2 col-form-label">ΕΑΠ κωδικός</label>
                        <div class="col-sm-4">
                            <input type="text" name="eapid" class="form-control" id="eapid">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- submit button -->
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Εγγραφή</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>

    <!--  Data entry to database -->
    <?php
        

        // Connect to database
        include 'conn.php';
        // data entry to gramatia or kathigitis to database
        if((isset($_POST['role']) && $_POST['role'] == 1) || (isset($_POST['role']) && $_POST['role'] == 2)){

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $cellphone = $_POST['cellphone'];
            $address = $_POST['address'];
            $birthdate = $_POST['birthdate'];
            $registerdate = $_POST['registerdate'];
            $eapid = $_POST['eapid'];


            $insert = $con->query("INSERT INTO user (name, surname, email, password, role, cellphone, address, birthDate, firstRegisterDate, eapid)
                                    VALUES (\"$name\", \"$surname\", \"$email\", \"$password\", \"$role\", \"$cellphone\", \"$address\", \"$birthdate\", \"$registerdate\", \"$eapid\");");

            if($insert){
                echo'<script>alert("Η εγγραφή ήταν επιτυχής.")</script>'; 
            } else {
                echo'<script>alert("Η εγγραφή ήταν ανεπιτυχής.")</script>'; 
            }
             
            
            $con->close();
        } 

        // data entry for foititis to database
        if((isset($_POST['role']) && $_POST['role'] == 3)){

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $cellphone = $_POST['cellphone'];
            $address = $_POST['address'];
            $birthdate = $_POST['birthdate'];
            $registerdate = $_POST['registerdate'];
            $eapid = $_POST['eapid'];
            $semester = $_POST['semester'];

            // data entry to user table
            $insert = $con->query("INSERT INTO user (name, surname, email, password, role, cellphone, address, birthDate, firstRegisterDate, eapid)
                                    VALUES (\"$name\", \"$surname\", \"$email\", \"$password\", \"$role\", \"$cellphone\", \"$address\", \"$birthdate\", \"$registerdate\", \"$eapid\");");

           
            

            // fetch iduser from user table
            $select = $con->query("SELECT iduser FROM user WHERE email = \"$email\";");
            // fetch result and assign to $iduser
            if (mysqli_num_rows($select) == 1) {
                // assign values to a table
                $result = mysqli_fetch_row($select);
            }
            $iduser = $result[0];


            // insert into semester table table
            $insert2 = $con->query("INSERT INTO semester (semester, user_iduser) VALUES (\"$semester\", \"$iduser\");");

            // Arxikopoiisi pinaka registers ana foititi me 10 egrafes
            $state = 0;
            $grade = 0;
            for($i=1; $i<11; $i++){
                $insert3 = $con->query("INSERT INTO register (state, grade, lessons_idlessons, user_iduser) VALUES (\"$state\", \"$grade\", \"$i\", \"$iduser\");");
            }

            // Elegxos sostis kataxorisis foititi
            if($insert && $select && $insert2 && $insert3){
                echo'<script>alert("Η εγγραφή ήταν επιτυχής.")</script>'; 
            } else {
                echo'<script>alert("Η εγγραφή ήταν ανεπιτυχής.")</script>'; 
            }
            
            $con->close();

        } 
    ?>

    

    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <script>
        // elegxos sostis eisagogis stoixeion formas
        function validate() {
            let emailcheck = document.forms["userRegister"]["email"].value;
            let chars = document.forms["userRegister"]["password"].value;
            // check if email ends @eap.gr, ypoxreotiki kataliksi email panepistimiou
            if (!emailcheck.endsWith("@eap.gr")) {
                alert('Παρακαλώ εισάγετε ένα έγκυρο email.');
                parent.window.location.reload(true);
                return false;
            }
            // check if password has at least 8 chars
            if (chars.length < 8) {
                alert('Ο κωδικός πρέπει να περιέχει τουλάχιστον 8 χαρακτήρες.');
                parent.window.location.reload(true);
                return false;
            }
        }

        // emfanisi to pediou tis formas gia to semester
        function checkrole(choise) {
            if (choise.selectedIndex == 3){
                document.getElementById("showsemester").style.display = 'block';
            } else {
                document.getElementById("showsemester").style.display = 'none';
            }
        }
    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>