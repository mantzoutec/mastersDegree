<!--  Update entry to database -->
<?php
        
                
        // Connect to database
        include 'conn.php';
        
        
        // Update data entry for foititis to database
        if(isset($_POST['id']) && isset($_POST['password']) && isset($_POST['cellphone']) && isset($_POST['address']) && isset($_POST['birthdate'])){

            $idd =  $_POST['id'];
            $password = $_POST['password'];
            $cellphone = $_POST['cellphone'];
            $address = $_POST['address'];
            $birthdate = $_POST['birthdate'];
            

            // update entry to user table
            $update = $con->query("UPDATE user SET
                                    password = \"$password\", 
                                    cellphone = \"$cellphone\", 
                                    address =  \"$address\",
                                    birthDate = \"$birthdate\"
                                    WHERE iduser = \"$idd\";");
            

            // Elegxos allagon stoixeion foititi
            if($update){
                echo'<script>alert("Η αλλαγή στοιχείων ήταν επιτυχής.")</script>'; 
            } else {
                echo'<script>alert("Η αλλαγή στοιχείων ήταν ανεπιτυχής.")</script>'; 
            }
            
            $con->close();

            echo'<script> window.location.assign("kathigites_mitroo.php");  </script>';

        }
        
    ?>