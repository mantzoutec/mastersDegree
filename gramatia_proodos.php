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
            include 'conn.php';
            $select = $con->query("SELECT a.iduser, a.name, a.surname, a.email, a.cellphone, b.semester FROM user a, semester b WHERE a.iduser = b.user_iduser ORDER BY semester, surname;");
            $con->close();
        ?>

        <!-- Body -->
        <div class="">
            <br>
            <br>
            <div class="table-responsive-sm">
                <table class="table table-bordered text-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Ονομα</th>
                            <th scope="col">Επίθετο</th>
                            <th scope="col">Email</th>
                            <th scope="col">Τηλέφωνο</th>
                            <th scope="col">Εξάμηνο</th>
                            <th scope="col">Περισσότερα</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_row($select)): ?> 
                        <tr>
                            <form name="proodos" action="gramatia_proodos.php">
                                <td class=""><?= $row[0] ?></td>
                                <td class=""><?= $row[1] ?></td>
                                <td class=""><?= $row[2] ?></td>
                                <td class=""><?= $row[3] ?></td>
                                <td class=""><?= $row[4] ?></td>
                                <td class=""><?= $row[5] ?></td>
                                <td><button name="showusrbtn" type="submit" class="btn btn-info btn-sm"  value=" <?= $row[0]  ?>">Περισσότερα</button></td>
                            </form>   
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <?php
            
            if(isset($_GET['showusrbtn'])){
                $dbid = $_GET['showusrbtn'];
                 
                include 'conn.php';
                // Mathimata pou exoun dilothei
                $registeredLessons = $con->query("SELECT COUNT(state) FROM register WHERE state = 1 AND user_iduser = \"$dbid\";");
                $row2 = mysqli_fetch_row($registeredLessons);
                $dbRegisteredLessons= $row2[0];

                // Vasika mathimata me provivasimo vathmo
                $basicPassedLessons = $con->query("SELECT COUNT(state) FROM register LEFT JOIN lessons ON register.lessons_idlessons=lessons.idlessons WHERE
                                                                    register.user_iduser=\"$dbid\" AND type='Βασικό' AND grade>=5;");
                $row3 = mysqli_fetch_row($basicPassedLessons);
                $dbbasicPassedLessons = $row3[0];

                // Epilogis mathimata me provivasimo vathmo
                $selectionPassedLessons = $con->query("SELECT COUNT(state) FROM register LEFT JOIN lessons ON register.lessons_idlessons=lessons.idlessons WHERE
                register.user_iduser=\"$dbid\" AND type='Επιλογής' AND grade>=5;");
                $row4 = mysqli_fetch_row($selectionPassedLessons);
                $dbselectionPassedLessons = $row4[0];

                // Didaktikes monades
                $didaktikesmonades = $con->query("SELECT SUM(credits) FROM register LEFT JOIN lessons ON register.lessons_idlessons=lessons.idlessons WHERE 
                                                    register.user_iduser = \"$dbid\" AND grade>=5;");
                $row5 = mysqli_fetch_row($didaktikesmonades);
                $dbDidaktikesMonades = $row5[0];
                $con->close();
            }
        ?>

        <div style=<?php if(isset($dbid)){echo '"display: block"';} else {echo '"display: none"';} ?>>
            <div class="jumbotron">
                <div class="row">
                    <div class="col">
                         <p>
                            Μαθήματα που έχουν δηλωθεί : <strong><?= $dbRegisteredLessons ?></strong>
                         </p>   
                    </div>
                    <div class="col">
                        <p>
                            Βασικά μαθήματα με προβιβάσιμο βαθμό : <strong><?= $dbbasicPassedLessons ?></strong>
                        </p>
                    </div>
                    <div class="col">
                        <p>
                            Επιλογής μαθήματα με προβιβάσιμο βαθμό : <strong><?= $dbselectionPassedLessons ?></strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <p>
                            Διδακτικές μονάδες : <strong><?= $dbDidaktikesMonades ?></strong>
                         </p>   
                    </div>
                    <div class="col">
                        <p>
                            Βασικά μαθήματα για την απόκτηση πτυχίου : <strong><?= 8 - $dbbasicPassedLessons ?></strong>
                        </p>
                    </div>
                    <div class="col">
                        <p>
                            Επιλογής μαθήματα για την απόκτηση πτυχίου : <strong><?= 1 - $dbselectionPassedLessons ?></strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <p>
                            Διδακτικές μονάδες για την απόκτηση πτυχίου : <strong><?= 45 - $dbDidaktikesMonades ?></strong>
                         </p>   
                    </div>
                    <div class="col">
                        <p>
                           
                        </p>
                    </div>
                    <div class="col">
                        <p>
                            
                        </p>
                    </div>
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