<body>

<div class="wrapper">

    <div class="banner common"> 

    <div class = "logo">
        <a href="index.php">
            <img src="images/volleyball_illustration.png" alt="Sports logo" width="150" height="150">
        </a>
    </div> <!--/ logo -->

       <h1>School Sports</h1>
    </div> <!-- / banner -->

    <div class="nav common"> 

    <h2>Search</h2>
    
<!-- Show All Button -->
<a class="search-button" href="show_all.php">
<div class="button-link full-button">
    <span class="button-text">Show all</span>
    <span class="button-emoji"> <i class="fas fa-search fa-lg"></i></span>
</div>
</a>

<!-- Random Button -->
<a class="search-button" href="random.php">
<div class="button-link full-button">
    <span class="button-text">Random</span>
    <span class="button-emoji"><i class="fas fa-random fa-lg"></i></span>
</div>
</a>

<!-- Keyword Area -->
<form method="post" action="keyword.php" enctype="multipart/form-data">
    <div class="search-container">
		
        <input class="search" type="text" name="keyword_search" required value=""
        placeholder="Keyword" />

        <button class="button-link" type="submit" name="keyword">
            <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
        </button>

    </div> <!-- / search container -->

</form>

<hr>
<!-- Season Search -->
<form class="search-form" method="post" action="season.php" enctype="multipart/form-data">

    <div class="search-container">

    <?php
    $dropdown_sql = "SELECT DISTINCT `Season` FROM `sports` ORDER BY `sports`.`Season` ASC";
    $dropdown_query = mysqli_query($dbconnect, $dropdown_sql);

    ?>

        <!--Season Drop Down goes her... -->
        <select name="season" class="search" required>

        <option value="" >
            Season...
        </option>

            <?php
            
            while($dropdown_rs=mysqli_fetch_assoc($dropdown_query)) {
                ?>

                <option value="<?php echo $dropdown_rs['Season'];?>">
                    <?php echo $dropdown_rs['Season'];?>
                </option>
                

                <?php
            } // end of drop down while
            ?>

        </select>

        <button class="button-link" type="submit" name="season_button">
            <span class=small-mag><i class="fas fa-search fa-lg"></i></span>
        </button>

    </div> <!-- search div for season -->
        </form>
		
<!-- Location Search -->
<form class="search-form" method="post" action="location.php" enctype="multipart/form-data">
    <div class="search-container">
        <?php
        $location_dropdown_sql = "SELECT DISTINCT Location FROM sports ORDER BY sports.Location ASC";
        $location_dropdown_query = mysqli_query($dbconnect, $location_dropdown_sql);
        ?>
        <!-- Location Drop Down goes here -->
        <select name="location" class="search" required>
            <option value="">Location...</option>
    		<option value="indoors">Indoor</option>
   			<option value="outdoors">Outdoor</option>
			<option value="both"> Both </option>
</select>

        <button class="button-link" type="submit" name="location_button">
            <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
        </button>
		
    </div> <!-- search div for location -->
</form>
		
    </div> <!-- / nav -->

   
