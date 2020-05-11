<?php

if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 2) 
	echo"<h2>Page access is forbidden!</h2>";
else {


	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) { 

		$newFileName = $_POST['filename'];		
		
		$newFileName = strtolower(str_replace(str_split(' !_'), "-", $newFileName)); 
		

		$file = $_FILES['file']; 	
		$fileName = $file["name"];
		$fileType = $file["type"]; 
		$fileTempName = $file["tmp_name"];
		$fileError = $file["error"];
		$fileSize = $file["size"];

		$fileExt = explode(".", $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array("jpg", "jpeg", "png"); 
		//----------------------------------

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 1000000 ) { 
					echo 'eddig jó';
				
						
						$imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt; 
						$fileDestination = "public/gallery/" . $imageFullName;


						$query = "INSERT INTO gallery (fileName) 
						                  VALUES (:fileName)"; 

						$params = [ 							
							':fileName' => $imageFullName, 
						];
						
						require_once DATABASE_CONTROLLER;
						if(executeDML($query, $params)) {
						echo '

							<form>
								<div class="form-row">
									<div class="form-group col-md-12">
										<p>file named '.$imageFullName .' uploaded successfully!
									</div>								
									<div class="form-group col-md-12"></div>
								</div>	
							</form>

						';	

						move_uploaded_file($fileTempName, $fileDestination);
						} else {
							echo "Hiba az adatbevitel során!";
						}
					
				} else { //ha nem jó a mérete
					echo "File size is too big!";
					exit();
				}
			} else {
				echo "You had a file error!";
				exit();
			}
		} else {
			echo "You are allowed to upload a jpg, png or svg!";
			exit(); 
		}
		echo 'jó';		
	} else {
	echo "nem megy a post, a submit";
	}

}//külső else vége
?>

<?php require_once PROTECTED_DIR.'upload.php'; ?>