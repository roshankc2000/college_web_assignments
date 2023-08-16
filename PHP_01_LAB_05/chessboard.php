<!DOCTYPE html>
<html>

<body>
	<table width="800px" border="1px" cellspacing=0>
		<?php
		$num = 0;
		for ($i = 0; $i < 8; $i++) {
			echo "<tr>";
			$value = $i;

			for ($j = 0; $j < 8; $j++) {
				if ($value % 2 == 0) {
					echo "<td height=80px width=40px bgcolor=black></td>";
					$value++;
				} else {
					echo "<td height=40px width=20px bgcolor=white></td>";
					$value++;
				}
			}
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>