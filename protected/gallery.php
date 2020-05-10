<?php

	$fo=opendir("gallery");
	while($file=readdir($fo))
	{
		if($file!="." && $file!="Thumbs.db")
		{
			echo "<img src='gallery/$file' width='150' height='150'/>&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	}
?>	