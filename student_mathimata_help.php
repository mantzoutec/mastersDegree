<?php
    session_start();
    

    if(isset($_POST['katargisi']) && $_POST['katargisi'] == "YES"){

        $id = $_SESSION['l_iduser'];
        $id_lesson = $_POST['idlessons'];
        include 'conn.php';
        // update entry to user table
        $update = $con->query("UPDATE register SET
                                state = 0 , 
                                grade = 0
                                WHERE user_iduser = \"$id\" AND lessons_idlessons = \"$id_lesson\";");


        // Elegxos allagon stoixeion foititi
        if($update){
        echo'<script>alert("Η κατάργηση της εγγραφης σας ήταν επιτυχής.")</script>'; 
        } else {
        echo'<script>alert("Η κατάργηση της εγγραφης σας ήταν ανεπιτυχής.")</script>'; 
        }

        $con->close();

        echo'<script> window.location.assign("student_mathimata.php");  </script>';

        
    }

    if(isset($_POST['egrafi']) && $_POST['egrafi'] == "YES"){

        $id = $_SESSION['l_iduser'];
        $id_lesson = $_POST['idlessons'];
        include 'conn.php';
        // update entry to user table
        $update = $con->query("UPDATE register SET
                                state = 1  
                                WHERE user_iduser = \"$id\" AND lessons_idlessons = \"$id_lesson\";");


        // Elegxos allagon stoixeion foititi
        if($update){
        echo'<script>alert("Η εγγραφη σας ήταν επιτυχής.")</script>'; 
        } else {
        echo'<script>alert("Η εγγραφη σας ήταν ανεπιτυχής.")</script>'; 
        }

        $con->close();

        echo'<script> window.location.assign("student_mathimata.php");  </script>';

        
    }



?>