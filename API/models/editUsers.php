<?php

  				// query to update record
				$sql = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email', password='$pass' WHERE id=$count_id";				
				if($result = $conn->query($sql))
				{
					$inserted=true;
				}else
				{
					$inserted=false;
				}
?>