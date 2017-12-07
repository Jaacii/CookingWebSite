
<?php
session_start();

if(session_destry()){
	header("Location: mainview.html");		//wahrscheinlich falsch
}
?> 