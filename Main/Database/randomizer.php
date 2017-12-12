<?php

$range_result = mysql_query( " SELECT MAX(`id`) AS max_id , MIN(`id`) AS min_id FROM `recipe` ");
$range_row = mysql_fetch_object( $range_result ); 
$random = mt_rand( $range_row->min_id , $range_row->max_id );
$result = mysql_query( " SELECT * FROM `recipe` WHERE `id` >= $random LIMIT 0,1 "); 
		//evtl woanders einordnen evtl limit ändern
		
		?>