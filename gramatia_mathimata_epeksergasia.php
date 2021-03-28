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
            $select = $con->query("SELECT * FROM lessons ORDER BY type, semester, title");
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
                            <th scope="col">Lesson ID</th>
                            <th scope="col">Τίτλος</th>
                            <th scope="col">Τύπος Μαθήματος</th>
                            <th scope="col">Διδάσκων</th>
                            <th scope="col">Εξάμηνο</th>
                            <th scope="col">Μονάδες</th>
                            <th scope="col">Επεξεργασία</th>
                            <th scope="col">Διαγραφή</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_row($select)): ?> 
                        <tr>
                            <td class=""><?= $row[0] ?></td>
                            <td class=""><?= $row[1] ?></td>
                            <td class=""><?= $row[2] ?></td>
                            <td class=""><?= $row[3] ?></td>
                            <td class=""><?= $row[4] ?></td>
                            <td class=""><?= $row[5] ?></td> 
                            <form name="dbusrform" action="gramatia_del_edit_lesson.php">
                                <td><button name="editusrbtn" onclick="return ConfirmEdit();" type="submit" class="btn btn-warning btn-sm"  value=" <?= $row[0]  ?>">Επεξεργασία</button></td>
                                <td><button name="delusrbtn" onclick="return ConfirmDelete();" type="submit" class="btn btn-danger btn-sm" value="<?= $row[0] ?>">Διαγραφή</button></td>
                            <form>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <br>
        <br>

        <!-- Footer -->
        <?php include 'footer.php'; ?>

        
        <script>
                //Delete confirmation
                function ConfirmDelete(){
                let x = confirm("Θέλετε να διαγραφεί το μάθημα;");
                if (x)
                    return true;
                else
                    return false;
                }

                //Edit confirmation
                function ConfirmEdit(){
                let x = confirm("Θέλετε να τροποποιήσετε τα στοιχεία του μαθήματος;");
                if (x)
                    return true;
                else
                    return false;
                }

         </script>    
       
        



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>