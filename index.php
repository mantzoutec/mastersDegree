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
    <div class="container-fluid">
        <br>

        <div class="row justify-content-between">
            <div class="col-sm">
                <h6>
                    <strong>ΑΝΑΚΟΙΝΩΣΕΙΣ</strong>
                </h6>
            </div>
            <br>
        </div>
        <br>
        <!-- jumbotron: Bootstrap Lightweight, flexible component for showcasing hero unit style content. -->
        <div class="jumbotron">
            <br>
            <!-- anakoinosi1 -->
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-2 offset-1">
                    <img src="photos/anakoinosi1.jpg" class="rounded float-left" width="100" height="100" alt="Radio ΕΑΠ">
                </div>
                <div class="col-sm-12 col-md-9">
                    <a href="anakoinosi1.php" target-self>
                        <h6>Web radio ΕΑΠ</h6>
                    </a>
                    <p>
                        Μια ακόμη διάκριση «συνοδεύει» εδώ και μερικές ημέρες την ομάδα παραγωγών του Ραδιοφωνικού
                        Σταθμού του Ελληνικού Ανοικτού (Webradio ΕΑΠ), ο οποίος κέρδισε βραβείο για την συμμετοχή
                        των μελών του στην Παγκόσμια Ημέρα Πανεπιστημιακού Ραδιοφώνου 2020.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <!-- anakoinosi2 -->
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-10 text-right">
                    <a href="anakoinosi2.php" target-self>
                        <h6>Λίστα αναγνώρισης διδασκόντων ΕΑΠ</h6>
                    </a>
                    <p>
                        Το Ελληνικό Ανοικτό Πανεπιστήμιο χαιρετίζει την αναγνώριση του υψηλού επιστημονικού επιπέδου των
                        διδασκόντων του.
                    </p>
                </div>
                <div class="col-sm-12 col-md-2">
                    <img src="photos/index_eap.jpg" class="rounded float-right" width="100" height="100" alt="Διδάσκοντες ΕΑΠ">
                </div>
            </div>
            <br>
            <br>
            <!-- anakoinosi3 -->
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-2 offset-1">
                    <img src="photos/anakoinosi3.jpg" class="rounded float-left" width="100" height="100" alt="Διακοπή Χριστουγέννων ΕΑΠ">
                </div>
                <div class="col-sm-12 col-md-9">
                    <a href="anakoinosi3.php" target-self>
                        <h6>Διακοπή Χριστουγέννων</h6>
                    </a>
                    <p>
                        Σας ενημερώνουμε ότι, κατόπιν απόφασης της Διοίκησης, το Ίδρυμά μας θα παραμείνει
                        κλειστό από την Πέμπτη 24 Δεκεμβρίου ως την Κυριακή 3 Ιανουαρίου.
                    </p>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <div class="row justify-content-center">
                <a href="anakoinoseis.php" target-self>
                    <h6>
                        <strong>ΟΛΕΣ ΟΙ ΑΝΑΚΟΙΝΩΣΕΙΣ</strong>
                    </h6>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Popper.js & JavaScript plugins  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>