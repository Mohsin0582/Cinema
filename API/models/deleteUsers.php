<?php
	// query to delete record
	$sql = "DELETE FROM users WHERE id=$count_id";				
	if($result = $conn->query($sql))
	{
		$deleted=true;
	}else
	{
		$deleted=false;
	}
?>