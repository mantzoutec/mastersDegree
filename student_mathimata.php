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
            $id = $_SESSION['l_iduser'];
            include 'conn.php';
            $select = $con->query("SELECT state, grade, idlessons, semester, title, teacher, credits, type  
                                    FROM user INNER JOIN register ON user.iduser = register.user_iduser INNER JOIN lessons ON lessons.idlessons = register.lessons_idlessons 
                                    WHERE iduser = \"$id\";");

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
                            <th scope="col">Εξάμηνο</th>
                            <th scope="col">Μάθημα</th>
                            <th scope="col">Διδάσκων</th>
                            <th scope="col">Μονάδες</th>
                            <th scope="col">Είδος</th>
                            <th scope="col">Βαθμός</th>
                            <th scope="col">Κατάσταση</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_row($select)): ?> 
                            <tr>
                                <td class=""><?= $row[3]?></td>
                                <td class=""><?= $row[4]?></td>
                                <td class=""><?= $row[5]?></td>
                                <td class=""><?= $row[6]?></td>
                                <td class=""><?= $row[7]?></td>
                                <td class=""><?= $row[1]?></td>
                                <td class="">
                                    <form name="student" method="POST" action="student_mathimata_help.php">
                                        <div  id="hide_state" style="display: none">
                                            <!-- state -->
                                            <input type="text" name="state" class="form-control" id="state" value="<?= $row[0]; ?>">
                                        </div>
                                        <div  id="hide_grade" style="display: none">
                                            <!-- grade -->
                                            <input type="text" name="grade" class="form-control" id="grade" value="<?= $row[1]; ?>">
                                        </div>
                                        <div  id="hide_idlessons" style="display: none">
                                            <!-- idlessons -->
                                            <input type="text" name="idlessons" class="form-control" id="idlessons" value="<?= $row[2]; ?>">
                                        </div>
                                        <div  id="hi_semester" style="display: none">
                                            <!-- semester -->
                                            <input type="text" name="semester" class="form-control" id="semester" value="<?= $row[3]; ?>">
                                        </div>
                                        <div  id="hide_title" style="display: none">
                                            <!-- title -->
                                            <input type="text" name="title" class="form-control" id="title" value="<?= $row[4]; ?>">
                                        </div>
                                        <div  id="hide_teacher" style="display: none">
                                            <!-- teacher -->
                                            <input type="text" name="teacher" class="form-control" id="teacher" value="<?= $row[5]; ?>">
                                        </div>
                                        <div  id="hide_credits" style="display: none">
                                            <!-- credits -->
                                            <input type="text" name="credits" class="form-control" id="credits" value="<?= $row[6]; ?>">
                                        </div>
                                        <div  id="hide_type" style="display: none">
                                            <!-- type -->
                                            <input type="text" name="type" class="form-control" id="type" value="<?= $row[7]; ?>">
                                        </div>
                                        <?php if ($row[0] == 1 && $row[1] >= 5): ?>
                                            <div style="color:green">
                                                <h6><strong>Επιτυχία</strong></h6>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($row[0] == 1 && $row[1] == 0): ?>
                                            <div style="color:orange">
                                                <h6><strong>Αναμονή Βαθμολογίας</strong></h6>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($row[0] == 1 && $row[1] < 5 && $row[1] != 0): ?>
                                            <button name="katargisi" type="submit" onclick="return ConfirmEdit();" class="btn btn-danger" value="YES">Κατάργηση</button>
                                        <?php endif; ?>
                                        <?php if($row[0] == 0 ): ?>
                                            <div style="display: block" >
                                                <button name="egrafi" type="submit" onclick="return ConfirmEdit();" class="btn btn-success" value="YES" >Εγγραφή</button>
                                            </div>
                                        <?php endif; ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <br>
            
        </div>
        <br>
        <br>

        <?php
            include 'conn.php';
            // Mathimata pou exoun dilothei
            $registeredLessons = $con->query("SELECT COUNT(state) FROM register WHERE state = 1 AND user_iduser = \"$id\";");
            $row2 = mysqli_fetch_row($registeredLessons);
            $dbRegisteredLessons= $row2[0];

            // Vasika mathimata me provivasimo vathmo
            $basicPassedLessons = $con->query("SELECT COUNT(state) FROM register LEFT JOIN lessons ON register.lessons_idlessons=lessons.idlessons WHERE
                                                                register.user_iduser=\"$id\" AND type='Βασικό' AND grade>=5;");
            $row3 = mysqli_fetch_row($basicPassedLessons);
            $dbbasicPassedLessons = $row3[0];

            // Epilogis mathimata me provivasimo vathmo
            $selectionPassedLessons = $con->query("SELECT COUNT(state) FROM register LEFT JOIN lessons ON register.lessons_idlessons=lessons.idlessons WHERE
            register.user_iduser=\"$id\" AND type='Επιλογής' AND grade>=5;");
            $row4 = mysqli_fetch_row($selectionPassedLessons);
            $dbselectionPassedLessons = $row4[0];

            // Didaktikes monades
            $didaktikesmonades = $con->query("SELECT SUM(credits) FROM register LEFT JOIN lessons ON register.lessons_idlessons=lessons.idlessons WHERE 
                                                register.user_iduser = \"$id\" AND grade>=5;");
            $row5 = mysqli_fetch_row($didaktikesmonades);
            $dbDidaktikesMonades = $row5[0];


            $select_semester = $con->query("SELECT semester FROM semester WHERE user_iduser = \"$id\";");
            $row6 = mysqli_fetch_row($select_semester);
            $sem = $row6[0];

        ?>

        <div class="container-fluid">
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
                           Εξάμηνο : <strong><?= $sem ?></strong>
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

        <script>
        // student prompt
        function ConfirmEdit(){
            let x = confirm("Θέλετε να αλλάξετε την κατάσταση του μαθήματος;");
                if (x)
                    return true;
                else
                    window.location.assign("student_mathimata.php");
                    return false;
        }

        </script>   


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>