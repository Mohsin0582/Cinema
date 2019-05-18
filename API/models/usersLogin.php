<?php
  				// query to insert record
				$sql = "SELECT email, password FROM users";
				$result = $conn->query($sql);
				$num = $result->num_rows;				
				
				if($num>0){
					while($row = $result->fetch_assoc()) {
						if(($row["email"]== $u) && ($row["password"]==$pass))
						{
				            $user=true;
						}
					}
				}else{
					$user=false;
				}
?>