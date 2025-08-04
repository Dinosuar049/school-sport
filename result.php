<?php
	while($find_rs=mysqli_fetch_assoc($find_query))
			{

				?>
			
				<div class="results common">
					
				<?php
				
				// Image set up
				$image = $find_rs['Image'];
				$image_location = "images/".$image;
				$sport_name = $find_rs['Sport'];

				?>
					
					<img class="sports-illustration" src="<?php echo $image_location; ?>"
					alt="<?php echo $sport_name; ?>">

					<div class="heading-block">
						<!--Sport name and date-->

						<div class="tag"><?php echo $find_rs['Season']; ?> </div>

						<b>
							<?php echo $sport_name; ?>
						</b>

					</div> <!-- / heading block -->
					
					<p>
						<?php echo $find_rs['Description']?>
					</p>
					
				</div> <!-- / individual result box -->
			
				<br>
				<?php

			} // end of while
			?>
			
