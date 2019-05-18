<?php
	class service
	{
		//Admin Functions
		function adminLog(){
			$result;
			$result = array(
								"message" => "Unidentified admin!",
								"status" => "error"
							);
			$data = json_decode(file_get_contents("php://input"));
			if(isset($_POST['Username']) && !empty($_POST['Username'])){

				require('core/database.php');
				require('models/admins.php');			
				
				$database = new Database();
				$db = $database->getConnection();

				$admin = new Admin($db);
				// get posted data
				
				$stmt = $admin->getAdmin();
				$num = $stmt->num_rows;
				
				if($num>0){		
					while($row = $stmt->fetch_assoc()) {
						if(($row["username"]== "admin") && ($row["password"]=="titanic"))
						{
							$result = array(
								"message" => "Welcome Admin!",
								"status" => "ok"
							);
						}
					}
				}else{
				$result = array(
								"message" => "Unidentified admin!",
								"status" => "error"
							);
			}
			return $result;
		}
	}
?>