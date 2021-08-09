<form action="" method="POST">
	<table>
		<tr>
			<td>Masukkan Nilai Kelipatan</td>
			<td>:</td>
			<td><input type="text" name="lipat" placeholder="Masukkan Nilai Kelipatan" required></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="TAMPILKAN"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['submit'])) {
		$nilai = 50;
		$lipat = $_POST['lipat'];

        if ($_POST['lipat'] = 3){
            echo 'Foo';
        } elseif ($_POST['lipat'] = 5) {
            echo 'Bar';
        } else{
            echo 'FooBar';
        }

		// for ($i= 1; $i <= $nilai; $i++) { 
		// 	if ( $bagi = $i % $lipat == 0 ) {
			
		// 		echo 'Kelipatan nilai ' . $lipat . ' dari nilai ' . $nilai . ' adalah ' . $i . '<br>';
		// 	}
		// }

	}
?>