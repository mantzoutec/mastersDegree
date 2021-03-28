<!--  Update entry to database -->
<?php
        
                
        // Connect to database
        include 'conn.php';
        
        
        // Update vathmologia for foititis to database
        if(isset($_POST['id_foititi']) && isset($_POST['idlesson']) && isset($_POST['vathmologia'])){

            $id_student =  $_POST['id_foititi'];
            $id_lesson = $_POST['idlesson'];
            $vathmologia = $_POST['vathmologia'];
            
            

            // update entry to user table
            $update = $con->query("UPDATE register SET
                                    grade = \"$vathmologia\" 
                                    WHERE user_iduser = \"$id_student\" AND lessons_idlessons = \"$id_lesson\";");
            

            // Elegxos allagon stoixeion foititi
            if($update){
                echo'<script>alert("Η αλλαγή βαθμολογίας ήταν επιτυχής.")</script>'; 
            } else {
                echo'<script>alert("Η αλλαγή βαθμολογίας ήταν ανεπιτυχής.")</script>'; 
            }
            
            $con->close();

            echo'<script> window.location.assign("kathigites_vathmologia.php");  </script>';

        }
        
    ?>