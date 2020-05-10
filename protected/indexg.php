<html>
<body>
<table width="744" border="1">
	<tr><th height="41" scope="row">
	<a href="index.php?option=upload" style="margin-left.100px">Upload image</a>
				<a href="index.php?option=upload" style="margin-left:10px">Image Gallery</a>
		</th>
	</tr><tr>
		<th height="401" scope="row">
		<?php
		@$gall=$_GET['option'];
			switch($gall)
			{
				case 'upload':
				include('uploade.php');
				break;
				case 'gallery':
				include('gallerry.php');
				break;
			}
		?></th></tr>
</table>
</html>		