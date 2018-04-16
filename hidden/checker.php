<?php
	function checkUDID($udid) 
	{
		$acceptedUDID = array('909a4ba097c70dd2067966aa4b3d0c219dfece62', 'efgh');
		
		if (in_array($udid, $acceptedUDID))
			return 'YES';
		else
			return 'NO';	
	}
?>