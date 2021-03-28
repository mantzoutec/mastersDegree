<?php
    session_start();
    session_destroy();
    echo'<script> alert("Επιτυχής αποσύνδεση, μεταφορά στην αρχική σελίδα."); document.location ="index.php"; </script>';
?>