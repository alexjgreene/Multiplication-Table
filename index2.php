		<div>
		<?php
		$z=1;
		?>
		<table>
		<tr>
		    <?php
			for($x=1;$x<10;$x++){
		    ?>		
			<td>
			<?php
			echo "$x"
			?>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			for($x=1;$x<10;$x++){
		?>
			<tr>
			    <?php
				for($y=1;$y<10;$y++){
				?>
				<td>
				<?php
				$z=$x*$y;
				echo "<p>$x*$y=$z</p>";
				?>
				</td>
				<?php
				}
				?>
			</tr>
			<?php
			}
		  	?>
		</table>
		</div>
