<?php

  				// query to update record
				$sql = "UPDATE movies SET name='$movie', hall='$hall', time='$time', seat='$seat', price='$price', path='$path'  WHERE id=$count_id";				
				if($result = $conn->query($sql))
				{
					$inserted=true;
				}else
				{
					$inserted=false;
				}
?>