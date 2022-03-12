<html>
	<head>
		<title>Multiple File Uploading</title>
	</head>
	<body>
		<h1>Multiple File Uploading</h1>
		
		<?php 
		if(isset($_POST['upload']))
		{
			
			if(!empty($_FILES['image']['name'][0]))
			{
				$count = count($_FILES['image']['name']);
				for($i = 0; $i < $count; $i++)
				{
					$filename = $_FILES['image']['name'][$i];
					$filetype = $_FILES['image']['type'][$i];
					$tmpname = $_FILES['image']['tmp_name'][$i];
					$allowed_types = ["image/png","image/jpg","image/gif","image/jpeg"];
					if(in_array($filetype, $allowed_types))
					{
						if(file_exists("uploads/$filename"))
						{
							$str = substr(str_shuffle('qwertyuioplkjhgfdsazxcvbnm'),6,15);
							$newname = $str."_".time()."_".$filename;
						}
						else{
							$newname = $filename;
						}
						if(move_uploaded_file($tmpname,"uploads/$newname"))
						{
							echo "<p>".$filename." is uploaded successfully</p>";
						}
					}
					else
					{
						echo "<p>".$filename." is invalid image</p>";
					}
				}
			}
			else{
				
				echo "<p>Please select some images to upload</p>";
			}
			
		}
		?>
		
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Upload Gallery:<label>
			<input type="file" name="image[]" multiple />
			<input type="submit" value="Upload" name="upload">
		</form>
		
	</body>
</html>