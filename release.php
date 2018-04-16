<?php
        include_once 'checker.php';
        
        if (checkUDID($_SERVER['HTTP_X_UNIQUE_ID']) == 'YES')
		header('Location: https"//cobraios.github.io/hidden/release_dir');
?>
