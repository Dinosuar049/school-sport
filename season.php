<?php
    include("head.php");
    include("banner_nav.php");


	// Check that button was pressed
	if(isset($_POST['season_button'])) {
    	$season = $_REQUEST['season'];

		//$find_sql = "SELECT DISTINCT `Season` FROM `sports` ORDER BY `sports`.`Season` ASC";
		$find_sql = "SELECT * FROM `sports` WHERE `Season` = '$season' ORDER BY `Sport` ASC";
        $find_query = mysqli_query($dbconnect, $find_sql);
        $count = mysqli_num_rows($find_query);
	}

    // if button was not pressed, go to index page
    else {
        header('Location: index.php');
    }
?>
 
    <div class="main common">

        <h2> Season Results (<?php echo $season; ?>)</h2>

        <?php

        if ($count > 0) {

        include("results.php");

        
        } //have results if

        else {
            ?>

        <div class="error">
            Sorry - there are no results for the season <?php echo $season; ?>. Please try a different search term.

        </div>

            <?php
        }
        ?>

    </div> <!-- / main -->

<?php
include("footer.php");

?>
