<html>
	<head>
		<title>File Uploading</title>
	</head>
	<body>
		<h1>File Uploading</h1>
		
		<?php 
			if(isset($_POST['upload']))
			{
				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					$filename = $_FILES['image']['name'];
					$filesize = $_FILES['image']['size'];
					$filetype = $_FILES['image']['type'];
					$tmpname = $_FILES['image']['tmp_name'];
					$errorno = $_FILES['image']['error'];
					$allowed_types = ["image/png","image/jpg","image/gif","image/jpeg"];
					
					if(in_array($filetype, $allowed_types))
					{
						if(file_exists("uploads/$filename"))
						{
							$str = substr(str_shuffle('qwertyuioplkjhgfdsazxcvbnm'),6,15);
							$filename = $str."_".time()."_".$filename;
						}
						
						if(move_uploaded_file($tmpname,"uploads/$filename"))
						{
							echo "File Uploaded Successfully";
						}
						else
						{
							echo "Sorry! Unable to upload a file.";
						}
					}
					else{
						
						echo "<p>Please select a valid image to upload</p>";
					}
					
					
				}
				else
				{
					echo "<p>Please select a file to upload</p>";
				}
				
			}
		?>
		
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Upload Profile:<label>
			<input type="file" name="image" />
			<input type="submit" value="Upload" name="upload">
		</form>
		
	</body>
</html>