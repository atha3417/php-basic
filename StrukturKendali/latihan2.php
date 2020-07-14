<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 2</title>
</head>
<body>
	
	<table border="1" cellpadding="10" cellspacing="0">
		<!-- Syntax Biasa -->

		<!-- <?php 
		for($i = 1; $i <= 3; $i++) {
			echo "<tr>";
			for ($j = 1; $j <= 5; $j++) {
				echo "<td>$i, $j</td>";
			}
			echo "</tr>";
		}
	 	?> -->

	 	<!-- Syntax templating -->

	 	<!-- <?php for ($i = 1; $i <= 3; $i++) { ?>
	 		<tr>
	 			<?php for ($j = 1; $j <= 5; $j++) { ?>
	 				<td><?php echo "$i, $j"; ?></td>
	 			<?php } ?>
	 		</tr>
		<?php } ?> -->
		
		<!-- Syntax Templating Rapi -->

		<!-- <?php for ($i = 1; $i <= 3; $i++) : ?>
	 		<tr>
	 			<?php for ($j = 1; $j <= 5; $j++) : ?>
	 				<td><?= "$i, $j"; ?></td>
	 			<?php endfor; ?>
	 		</tr>
		<?php endfor; ?> -->
	</table>

</body>
</html>