<?php
    include("head.php");
    include("banner_nav.php");

    $find_sql = "SELECT * FROM `sports` ORDER BY RAND() LIMIT 3;";
    $find_query = mysqli_query($dbconnect, $find_sql);

?>
 
    <div class="main common">

        <h2>Three Random School Sports...</h2>

        <?php

        include("results.php");
        
        ?>

    </div> <!-- / main -->

<?php
include("footer.php");

?>
