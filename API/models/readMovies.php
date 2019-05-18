<?php
  				// query to select record
				$sql = "SELECT id, name, hall, time, seat, price, path FROM movies";				
				if($result = $conn->query($sql))
				{
					$select=true;
				}else
				{
					$select=false;
				}
?>