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
        <h6>
            <strong>ΜΑΘΗΜΑΤΑ</strong>
        </h6>
        <br>
        <!-- Pinakas Mathimaton -->
        <div class="table-responsive-sm">
            <table class="table table-bordered text-center text-primary">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Εξάμηνο</th>
                        <th scope="col">Μάθημα</th>
                        <th scope="col">Διδάσκων</th>
                        <th scope="col">Διδακτικές
                            <br>Μονάδες
                        </th>
                        <th scope="col">Είδος</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 1ο Εξάμηνο -->
                    <tr>
                        <!-- merge three cells to one  -->
                        <th class="align-middle" rowspan="3">1</th>
                        <td class="text-left">Foundations of Artificial Intelligence</td>
                        <td>Ιωάννης Ιακώβου</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <tr>
                        <td class="text-left">Introduction to Machine Learning</td>
                        <td>Δημήτριος Μαργέλης</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <tr>
                        <td class="text-left">Big Data Analytics</td>
                        <td>Κώνσταντίνος Ευσταθίου</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <!-- 2ο Εξάμηνο -->
                    <tr>
                        <!-- merge three cells to one  -->
                        <th class="align-middle" rowspan="3">2</th>
                        <td class="text-left">Advanced Topics in Machine Learning</td>
                        <td>Ιωάννης Ιακώβου</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <tr>
                        <td class="text-left">Robotics and Perception</td>
                        <td>Δημήτριος Μαργέλης</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <tr>
                        <td class="text-left">Natural Language Processing</td>
                        <td>Μαίρη Κοστίνου</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <!-- 3ο Εξάμηνο -->
                    <tr>
                        <!-- merge three cells to one  -->
                        <th class="align-middle" rowspan="4">3</th>
                        <td class="text-left">Philosophy and Ethics of AI</td>
                        <td>Ιωάννης Ιακώβου</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <tr>
                        <td class="text-left">AI in Video Games</td>
                        <td>Δημήτριος Μαργέλης</td>
                        <td>5</td>
                        <td class="text-left">Βασικό</td>
                    </tr>
                    <tr>
                        <td class="text-left">Multi-Agent Systems and Game Theory</td>
                        <td>Κώνσταντίνος Ευσταθίου</td>
                        <td>5</td>
                        <td class="text-success text-left">Επιλογής</td>
                    </tr>
                    <tr>
                        <td class="text-left">AI for Medicine</td>
                        <td>Μαίρη Κοστίνου</td>
                        <td>5</td>
                        <td class="text-success text-left">Επιλογής</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>