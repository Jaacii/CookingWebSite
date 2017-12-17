
<?php
session_start();

if(session_destroy()){
	header("Location: ../mainview.html");		//wahrscheinlich falsch
}
?> 