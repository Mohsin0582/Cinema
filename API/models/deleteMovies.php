<?php
	// query to delete record
	$sql = "DELETE FROM movies WHERE id=$count_id";				
	if($result = $conn->query($sql))
	{
		$deleted=true;
	}else
	{
		$deleted=false;
	}
?>