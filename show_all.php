<?php
	include("head.php");
	include("banner_nav.php");

	$find_sql = "SELECT * FROM `sports`";
	$find_query = mysqli_query($dbconnect, $find_sql);


?>
	
	<div class="main common">
		
		<h2> All Data </h2>
		
		<?php
		
		include("results.php");
		
		?>
	
		
	</div> <!-- / main -->
	
<?php
include("footer.php");
?>
