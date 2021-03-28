<!-- Header -->
<header>
    <br>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-3 text-center">
                <a href="index.php">
                    <img src="photos/eaplogo.png" alt="EAP logo" width="200">
                </a>
            </div>
            <div class="col-sm-12 col-md-6 text-center">
                <strong>ΗΛΕΚΤΡΟΝΙΚΗ ΓΡΑΜΜΑΤΕΙΑ</strong>
                <br>
                ΜΕΤΑΠΤΥΧΙΑΚΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ΣΠΟΥΔΩΝ ΤΕΧΝΗΤΗΣ ΝΟΥΜΟΣΥΝΗΣ
                <br>
                ΤΜΗΜΑ ΕΦΑΡΜΟΣΜΕΝΗΣ ΠΛΗΡΟΦΟΡΙΚΗΣ
                <br>
                ΕΛΛΗΝΙΚΟ ΑΝΟΙΚΤΟ ΠΑΝΕΠΙΣΤΗΜΙΟ
            </div>
            <div class="col-sm-12 col-md-3 text-center">
                <?php if(!isset($_SESSION['l_role'])): ?>    
                    <a href="login.php" target-self>Είσοδος</a>
                <?php endif ?>

                <?php if(isset($_SESSION['l_role'])){
                    echo($_SESSION['l_email']);
                }    
                ?>    
                

                &nbsp;
                &nbsp;
                &nbsp;
                <a href="logout.php" target-self>Εξοδος</a>
            </div>
        </div>
    </div>
    <hr>
</header>


<!-- Navigation -->
<div class="container-fluid">
    <ul class="nav nav-pills nav-justified bg-light">
        <li class="nav-item">
            <!-- active : button turns to blue when selected -->
            <a class="nav-link" href="index.php">Αρχική</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mathimata.php">Μαθήματα</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Προσωπικό</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="didaskontes.php">Διδάσκοντες</a>
                <a class="dropdown-item" href="gramatia.php">Γραμματεία</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="kanonismos.php">Κανονισμός</a>
        </li>

        <!---navbar gramatias--->
        <?php if(isset($_SESSION['l_role']) && $_SESSION['l_role'] == 1): ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Διαχείρηση</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="gramatia_mitroo.php">Εισαγωγή Χρήστη</a>
                <a class="dropdown-item" href="gramatia_epeksergasia.php">Επέξεργασία Χρηστών</a>
                <a class="dropdown-item" href="gramatia_mathimata.php">Εισαγωγή Μαθημάτων</a>
                <a class="dropdown-item" href="gramatia_mathimata_epeksergasia.php">Επέξεργασία Μαθημάτων</a>
                <a class="dropdown-item" href="gramatia_proodos.php">Πρόοδος</a>
            </div>
            </li>
        <?php endif ?>

        <!---navbar kathigiton--->
        <?php if(isset($_SESSION['l_role']) && $_SESSION['l_role'] == 2): ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Διαχείρηση</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="kathigites_mitroo.php">Μητρώο</a>
                <a class="dropdown-item" href="kathigites_egrafes.php">Φοιτητές</a>
            </div>
            </li>
        <?php endif ?>

        <!---navbar foititon--->
        <?php if(isset($_SESSION['l_role']) && $_SESSION['l_role'] == 3): ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Διαχείρηση</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="student_edit.php">Μητρώο</a>
                <a class="dropdown-item" href="student_mathimata.php">Μαθήματα</a>
            </div>
            </li>
        <?php endif ?>
        
    </ul>
</div>