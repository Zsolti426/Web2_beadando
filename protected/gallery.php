<?php

	//$fo=opendir("gallery");
	while($file=readdir($fo))
	{
		if($file!="." && $file!="Thumbs.db")
		{
			echo "<img src='gallery/$file' width='150' height='150'/>&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	}
?>
<?php

	$query = "SELECT * FROM gallery ORDER BY id ASC";

	if(count($images) <= 0) {
		echo"<h1>Nincs kép az adatbázisban</h1>";
	}else {

		$i = 0;
		foreach ($images as $img) {
			$i++;

			if ($img['gridwith'] == "1" && $img['gridwith'] == "1") {
				echo 
				'
					<div class="" style="background image : url(public/gallery/'.$img['filename'].');"></div>
				';
			}
		}
	}