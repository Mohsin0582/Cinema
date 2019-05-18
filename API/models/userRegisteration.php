<?php
  				// query to insert record
				$sql = "INSERT INTO users(id, first_name, last_name, email, password)
						VALUES ('', '$fname', '$lname', '$email', '$pass')";
				if($result = $conn->query($sql))
				{
					$inserted=true;
				}else
				{
					$inserted=false;
				}
?>