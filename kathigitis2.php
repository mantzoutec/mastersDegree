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
    <br>
    <br>
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-2">
                    <img src="photos/kathigitis_2.jpg" class="rounded" width="150" alt="Καθηγητής ΕΑΠ Δημήτριος Μαργέλης">
                </div>
                <div class="col-sm-12 col-md-9">
                    <h4>
                        <strong>Δημήτριος Μαργέλης</strong>
                    </h4>
                    <hr>
                    <h5>Θέση:</h5>
                    <p>
                        Καθηγητής, Τμήμα Πληροφορικής & Τηλεπικοινωνιών, Σχολή Πληροφορικής & Τηλεπικοινωνιών
                    </p>
                    <hr>
                    <h5>Διδασκόμενα μαθήματα</h5>
                    <p>
                    <ul>
                        <li>Introduction to Machine Learning</li>
                        <li>Robotics and Perception</li>
                        <li>AI in Video Games</li>
                    </ul>
                    </p>
                    <hr>
                    <h5>Ερευνητικό Έργο:</h5>
                    <p>
                    <ul>
                        <li>Έχει συμμετάσχει σε διάφορα εθνικά και Ευρωπαϊκά ερευνητικά προγράμματα</li>
                        <li>Έχει δημοσιεύσει αρκετές εργασίες σε Διεθνή Συνέδρια και περιοδικά</li>
                        <li>Έχει αποτελέσει εξωτερικός κριτής Διεθνών Συνεδρίων</li>
                    </ul>
                    </p>
                    <hr>
                    <h5>Τίτλοι Σπουδών:</h5>
                    <br>
                    <p>
                        <strong>Πτυχίο Μηχανικού Η/Υ & Πληροφορικής</strong>
                    <p>
                        Πανεπιστήμιο Πατρών, Τμήμα Μηχανικών Η/Υ & Πληροφορικής
                    </p>
                    <br>
                    <strong>Μεταπτυχιακό Δίπλωμα Ειδίκευσης</strong>
                    <p>
                        Πανεπιστήμιο Πατρών, Παράλληλα τμηματικά νευρωνικά δίκτυα
                    </p>
                    <br>
                    <strong>Διδακτορικό Δίπλωμα</strong>
                    <p>
                        Πανεπιστήμιο Πατρών, Καθολική βελτιστοποίηση: μέθοδοι, λογισμικό και εφαρμογές
                    </p>
                    </p>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <div class="row justify-content-center">
                <a href="didaskontes.php" target-self>
                    <h6>
                        <strong>Ολοι οι Διδάσκοντες</strong>
                    </h6>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>