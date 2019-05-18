<?php
  				// query to insert record
				$sql = "INSERT INTO movies(id, name, hall, time, seat, price, path)
						VALUES ('', '$movie', '$hall', '$time', '$seat', '$price', '$path')";
				if($result = $conn->query($sql))
				{
					$inserted=true;
				}else
				{
					$inserted=false;
				}
?>