<?php
    include("head.php");
    include("banner_nav.php");

    // Check that button was pressed
    // if(issets($_POST['keyword'])) {

	// Check that button was pressed
	if(isset($_POST['keyword'])) {
    	$keyword = $_POST['keyword_search'];

        // The line below is incorrect and isn't connecting
		$find_sql = "SELECT * FROM `sports` WHERE `Sport` LIKE '%$keyword%' ORDER BY `Season` ASC";
        $find_query = mysqli_query($dbconnect, $find_sql);
        $count = mysqli_num_rows($find_query);
	}

    // if button was not pressed, go to index page
    else {
        header('Location: index.html');
    }
?>
 
    <div class="main common">

        <h2>Keyword Results (<?php echo $keyword; ?>)</h2>

        <?php

        if ($count > 0) {

        include("results.php");

        
        } //have results if

        else {
            ?>

        <div class="error">
            Sorry - there are no results for the keyword <?php echo $keyword; ?>. Please try a different search term.

        </div>

            <?php
        }
        ?>

    </div> <!-- / main -->

<?php
include("footer.php");

?>
