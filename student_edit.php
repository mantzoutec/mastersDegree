<?php
session_start();
?>


    <?php
        $id =  $_SESSION['l_iduser'];

        include 'conn.php';
        $select1 = $con->query("SELECT * FROM user WHERE iduser = \"$id\";");
        $row1 = mysqli_fetch_row($select1);
        $array= [$row1[0], $row1[1], $row1[2], $row1[3], $row1[4], $row1[5], $row1[6], $row1[7], $row1[8], $row1[9], $row1[10]];
        
        $select2 = $con->query("SELECT * FROM semester WHERE user_iduser = \"$id\";");
        $row2 = mysqli_fetch_row($select2);
        $array2= [$row2[0], $row2[1], $row2[2]];    
        
        $con->close();
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
                    <strong>ΦΟΡΜΑ ΕΠΕΞΕΡΓΑΣΙΑΣ ΦΟΙΤΗΤΗ</strong>
                </h6>
            </div>
        </div>
        <br>
        <br>
        <form name="userEdit" action="student_edit_help.php" method="POST" onSubmit="return validate()">
            <div  id="hideid" style="display: none">
                <!-- id -->
                <div class="row">
                    <div class="col-10 offset-4">
                        <div class="form-group row">
                            <label for="id" class="col-sm-2 col-form-label">Database ID</label>
                            <div class="col-sm-4">
                                <input type="text" name="id" class="form-control" id="id" value="<?= $array[0]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>    
            <!-- name -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Ονομα</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" id="name" value="<?= $array[1]; ?>" disabled>
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
                            <input type="text" name="surname" class="form-control" id="surname" value="<?= $array[2]; ?>" disabled>
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
                            <input type="text" name="email" class="form-control" id="email" value="<?= $array[3]; ?>" disabled>
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
                            <input type="text" name="password" class="form-control" id="password" placeholder="Τουλάχιστον 8 χαρακτήρες" value="<?= $array[4]; ?>" required>
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
                            <input type="text" name="role" class="form-control" id="role" value="Φοιτητής" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- semester -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="semester" class="col-sm-2 col-form-label">Εξάμηνο</label>
                        <div class="col-sm-4">
                            <input type="text" name="role" class="form-control" id="role" value="<?= $array2[1]; ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- cellphone -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="cellphone" class="col-sm-2 col-form-label">Κινητό τηλέφωνο</label>
                        <div class="col-sm-4">
                            <input type="text" name="cellphone" class="form-control" id="cellphone" value="<?= $array[6]; ?>">
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
                            <input type="text" name="address" class="form-control" id="address" value="<?= $array[7];?>">
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
                            <input type="date" name="birthdate" class="form-control" id="birthdate" value="<?= $array[8];?>">
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
                            <input type="date" name="registerdate" class="form-control" id="registerdate" value="<?= $array[9];?>" disabled>
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
                            <input type="text" name="eapid" class="form-control" id="eapid" value="<?= $array[10]; ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- submit button -->
            <div class="row">
                <div class="col text-center">
                    <button type="submit" onclick="return ConfirmEdit();" class="btn btn-success">Αλλαγή Στοιχείων</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>
    
    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <script>
        // elegxos sostis eisagogis stoixeion formas
        function validate() {
            
            let chars = document.forms["userEdit"]["password"].value;
            
            // check if password has at least 8 chars
            if (chars.length < 8) {
                alert('Ο κωδικός πρέπει να περιέχει τουλάχιστον 8 χαρακτήρες.');
                parent.window.location.reload(true);
                return false;
            }
        }

        //Edit confirmation
        function ConfirmEdit(){
                let x = confirm("Θέλετε να τροποποιήσετε τα στοιχεία σας;");
                if (x)
                    return true;
                else
                    window.location.assign("kathigites_mitroo.php");
                    return false;
                }

    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>


























