<?php
    include("head.php");
    include("banner_nav.php");

	// Check that the button was pressed
	if(isset($_POST['location_button'])) {
    	$location = $_REQUEST['location'];

		$find_sql = "SELECT * FROM `sports` WHERE `Location` = '$location' ORDER BY `Sport` ASC";
        $find_query = mysqli_query($dbconnect, $find_sql);
        $count = mysqli_num_rows($find_query);
	}


    // if button was not pressed, go to index page
    else {
        header('Location: index.php');
    }
?>


<div class="main common">

    <h2>Location Results (<?php echo htmlspecialchars($location); ?>)</h2>

    <?php
    if ($count > 0) {
        // Include the results.php file to display the results
        include("results.php");
    } else {
    ?>

    <div class="error">
        Sorry - there are no results for the location <?php echo htmlspecialchars($location); ?>. Please try a different search term.
    </div>

    <?php
    }
    ?>

</div> <!-- / main -->

<?php
include("footer.php");
?>
