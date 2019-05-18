<?php
  				// query to get record
				$sql = "SELECT username, password FROM admins";
				$result = $conn->query($sql);
				$num = $result->num_rows;				
				
				if($num>0){
					while($row = $result->fetch_assoc()) {
						if(($row["username"]== $u) && ($row["password"]==$pass))
						{
				            $admin=true;
						}
					}
				}else{
					$admin=false;
				}
?>