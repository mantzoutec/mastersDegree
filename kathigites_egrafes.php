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

        <?php
            $surname = $_SESSION['l_surname'];
            include 'conn.php';
            $select = $con->query("SELECT * FROM user INNER JOIN register ON user.iduser = register.user_iduser INNER JOIN lessons ON lessons.idlessons = register.lessons_idlessons WHERE state = 1 AND teacher = \"$surname\" ORDER BY semester;");
            $con->close();
        ?>

        <!-- Body -->
        <br>
        <br>
        <div class="container">
            <div class="table-responsive-sm">
                <table class="table table-bordered text-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Ονομα</th>
                            <th scope="col">Επίθετο</th>
                            <th scope="col">Μάθημα</th>
                            <th scope="col">Εξάμηνο</th>
                            <th scope="col">Βαθμός</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_row($select)): ?> 
                            <tr>
                                <td class=""><?= $row[0]?></td>
                                <td class=""><?= $row[1]?></td>
                                <td class=""><?= $row[2]?></td>
                                <td class=""><?= $row[17]?></td>
                                <td class=""><?= $row[20]?></td>
                                <td class=""><?= $row[13]?></td> 
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="kathigites_vathmologia.php" role="button">Εισαγωγή βαθμολογίας</a>
                </div>
            </div> 
        </div>
        <br>
        <br>
        
        <!-- Footer -->
        <?php include 'footer.php'; ?>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>