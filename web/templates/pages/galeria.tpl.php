<!DOCTYPE html>
<html>

<h1>Galéria</h1>

<?php if(isset($_SESSION['login'])) { ?>
        <h3>Feltöltés</h3>
    <form action="?oldal=upload" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <input type="submit" value="Upload">
    </form>
<?php } ?>


<h3>Feltöltött képek</h3>

<body>

<div class="container-fluid">
	<div class="row">
	<?php
		// set the path to the uploads folder
		$path = './uploads/';

		// get all JPG files in the uploads folder
		$files = glob($path . '*.jpg');

		// if there are no JPG files, display a message
		if (count($files) == 0) {
			echo '<p>Még nincs feltöltött kép a galériában. Hiányolja? Jelentkezzen be és töltsön fel!</p>';
		}
		else {
			// limit the number of files to display to 42
			$files = array_slice($files, 0, 42);

			// display each JPG file as an image in a column
			foreach ($files as $file) {
				echo '<div class="col-md-4"><img class="img-fluid" src="' . $file . '" alt="' . basename($file) . '"></div>';
			}
		}
		?>
	</div>
</div>

<p>Képek feltöltése kizárólag bejelentkezett felhasználók esetén lehetséges.</p> 

</body>
</html>