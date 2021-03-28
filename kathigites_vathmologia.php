<?php
session_start();
?>

<?php
    $surname = $_SESSION['l_surname'];
    include 'conn.php';
    $select = $con->query("SELECT * FROM user INNER JOIN register ON user.iduser = register.user_iduser INNER JOIN lessons ON lessons.idlessons = register.lessons_idlessons WHERE state = 1 AND teacher = \"$surname\" ORDER BY semester;");
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
                    <strong>ΒΑΘΜΟΛΟΓΙΑ ΦΟΙΤΗΤΩΝ</strong>
                </h6>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-2">
                <h6>ΟΝΟΜΑ</h6>
            </div>
            <div class="col-2">
                <h6>ΕΠΩΝΥΜΟ</h6>
            </div>
            <div class="col-4">
                <h6>ΜΑΘΗΜΑ</h6>
            </div>
            <div class="col-2">
                <h6>ΕΞΑΜΗΝΟ</h6>
            </div>
            <div class="col-1">
                <h6>ΒΑΘΜΟΣ</h6>
            </div>
        </div>
        <br>
        <?php while($row = mysqli_fetch_row($select)): ?>
        <form name="vathmologiaEdit" action="kathigites_vathmologia_help.php" method="POST">
            <div class="row">
                <div  id="hideid" style="display: none">
                    <!-- id -->
                    <div class="col align-self-center">
                        <input type="text" name="id_foititi" class="form-control" id="id_foititi" value="<?= $row[0]; ?>">
                    </div>
                </div>  
                <!-- name -->
                <div class="col-2">
                    <input type="text" name="name" class="form-control" id="name" value="<?= $row[1]; ?>" disabled>
                </div>
                <!-- surname -->
                <div class="col-2">
                    <input type="text" name="surname" class="form-control" id="surname" value="<?= $row[2]; ?>" disabled>
                </div>
                <!-- mathima -->
                <div class="col-4">
                    <input type="text" name="mathima" class="form-control" id="mathima" value="<?= $row[17]; ?>" disabled>
                </div>
                <div  id="hideid2" style="display: none">
                    <!-- id -->
                    <div class="col-1">
                        <input type="text" name="idlesson" class="form-control" id="idlesson" value="<?= $row[16]; ?>">
                    </div>   
                </div>    
                <!-- semester -->
                <div class="col-2">
                    <input type="text" name="semester" class="form-control" id="semester" value="<?= $row[20]; ?>" disabled>
                </div>
                <!-- vathmologia -->
                <div class="col-1">
                    <select class="form-control" name="vathmologia" id="vathmologia">
                        <option selected><?= $row[13]; ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <!-- submit button -->
                <div class="col-1 align-self-center">
                    <button type="submit" onclick="return ConfirmEdit();" class="btn btn-warning btn-sm">Βαθμολογία</button>
                </div>
            </div>
        </form>
        <br>
        <?php endwhile; ?>
    </div>
    <br>
    <br>

    
    
    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        //Vathmologia
        function ConfirmEdit(){
            let x = confirm("Θέλετε να εισάγετε βαθμολογία στον φοιτητή;");
                if (x)
                    return true;
                else
                    window.location.assign("kathigites_vathmologia.php");
                    return false;
        }

    </script>   
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>


























