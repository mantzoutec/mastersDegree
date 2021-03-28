<?php
session_start();
?>


<?php
        // delete gramatia or kahigiti from database
        if(isset($_GET['delusrbtn'])){
            $iddel = $_GET['delusrbtn'];
            include 'conn.php';
            

            $dellesson = $con->query("DELETE FROM lessons WHERE idlessons = \"$iddel\";");
            $con->close();
            
            echo '<script> alert("Η διαγραφή του μαθήματος ήταν επιτυχής.") </script>';

            if($dellesson){
                echo'<script> window.location.assign("gramatia_mathimata_epeksergasia.php");  </script>';
            }

            
        }  

        
        
        if(isset($_GET['editusrbtn'])){
            $idedit =  $_GET['editusrbtn'];

            include 'conn.php';
            $editlesson = $con->query("SELECT * FROM lessons WHERE idlessons = \"$idedit\";");
            $row = mysqli_fetch_row($editlesson);
            // assign values to array
            $array= [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]];
            $con->close();
        }               
                
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
                    <strong>ΦΟΡΜΑ ΕΠΕΞΕΡΓΑΣΙΑΣ ΜΑΘΗΜΑΤΩΝ</strong>
                </h6>
            </div>
        </div>
        <br>
        <br>
        <form name="lessonupdate" action="gramatia_del_edit_lesson.php" method="POST">
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
            <!-- titlos mathimatos -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="titlosmathimatos" class="col-sm-2 col-form-label">Τίτλος</label>
                        <div class="col-sm-4">
                            <input type="text" name="titlosmathimatos" class="form-control" id="titlosmathimatos"  value="<?= $array[1] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- typos mathimatos -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="typosmathimatos" class="col-sm-2 col-form-label">Τύπος</label>
                        <div class="col-sm-4">
                        <select class="form-control" name="typosmathimatos" id="typosmathimatos">
                                <option selected><?= $array[2] ?></option>
                                <option value="Βασικό">Βασικό</option>
                                <option value="Επιλογής">Επιλογής</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- teacher -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="teacher" class="col-sm-2 col-form-label">Καθηγητής</label>
                        <div class="col-sm-4">
                        <select class="form-control" name="teacher" id="teacher">
                                <option selected><?= $array[3] ?></option>
                                <option value="Iakovou">Iakovou</option>
                                <option value="Margelis">Margelis</option>
                                <option value="Eustathiou">Eustathiou</option>
                                <option value="Kostinou">Kostinou</option>
                            </select>
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
                        <select class="form-control" name="semester" id="semester">
                                <option selected><?= $array[4] ?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- monades -->
            <div class="row">
                <div class="col-10 offset-4">
                    <div class="form-group row">
                        <label for="monades" class="col-sm-2 col-form-label">Διδ. Μονάδες</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="monades" id="monades">
                                <option selected><?= $array[5] ?></option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- submit button -->
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success">Αλλαγή</button>
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
        if((isset($_POST['titlosmathimatos'])) && (isset($_POST['typosmathimatos'])) && (isset($_POST['teacher'])) && (isset($_POST['semester'])) && (isset($_POST['monades']))){
            $id = $_POST['id'];
            $title = $_POST['titlosmathimatos'];
            $type = $_POST['typosmathimatos'];
            $teacher = $_POST['teacher'];
            $semester = $_POST['semester'];
            $credits = $_POST['monades'];
            
           

            $update = $con->query("UPDATE lessons SET
            title = \"$title\", 
            type = \"$type\",
            teacher = \"$teacher\",
            semester = \"$semester\", 
            credits = \"$credits\"
            WHERE idlessons = \"$id\";");

            if($update){
                echo'<script>alert("Η αλλαγή ήταν επιτυχής.")</script>'; 
            } else {
                echo'<script>alert("Η αλλαγή ήταν ανεπιτυχής.")</script>'; 
            }
             
            $con->close();
            
            echo'<script> window.location.assign("gramatia_mathimata_epeksergasia.php");  </script>';

        }
        
    ?>

    

    <!-- Footer -->
    <?php include 'footer.php'; ?>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>