<?php 
  if(isset($_POST['submitt'])){ 
	//?  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){ 
	  $search=$_POST['search']; 
	  //connect  to the database 
	$db=mysql_connect  ('localhost', 'root', '', 'cooking4you') or die ('I cannot connect to the database  because: ' . mysql_error()); //maybe wil cause an error
	  //-select  the database to use 
	  //$mydb=mysql_select_db("testrecipe"); 
	  //-query  the database table 
	  $sql="SELECT id, pic, foodname, difficulty, rating FROM testrecipe WHERE foodname LIKE '%" . $search .  '%' ; 	//strange "" ''
	  $sqlid="SELECT id FROM testrecipe WHERE foodname LIKE '%" . $search .  '%' ; //übergeben an exa seite
	  // -run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $foodname  =$row['foodname']; 
	         // $LastName=$row['LastName']; 
	        //  $ID=$row['ID']; 
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$foodname /*. " " . $LastName */.  "</a></li>\n"; 
	  echo "</ul>"; 
	   header('location: ../exa_recipepage.php') ;
	  }
	  //else{ 
	//echo  "<p>Please enter a search query</p>"; 
	} 
	?>