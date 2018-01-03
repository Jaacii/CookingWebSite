<?php 
$db = mysqli_connect('localhost', 'root', '', 'cooking4you');

  if(isset($_POST['submitt'])){ 
  
  //get value and prevent a mysql injection
   $search = mysqli_real_escape_string($db, $_POST['search']);

    // changes characters used in html to their equivalents, for example: < to &gt;   
        $query = htmlspecialchars($search); 
       
	//results
        $raw_results = mysqli_query($db ,"SELECT * FROM recipe2
            WHERE (`foodname` LIKE '%".$search."%') OR (`foodname` LIKE '%".$search."%')") or die(mysql_error());
             
       
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
            while($results = mysqli_fetch_array($raw_results)){
            
             
			 //echo result.  Es fehlt aber noch eine verlinkung oder weiterleitung für die seiten
                echo "<p><a href='exa_recipepage.php?food_id=".$results['id']."' >".$results['foodname'].  "<img src=".$results['image'].">".  "difficulty: ".$results['difficulty']." |    rating: ".$results['rating']."</p></a>";
               
            }
             
        }
        else{ // no matching rows 
            echo "No results";
        }
         
    
   
  
  
  
  
  
  
  
  
  
  

	} 
	?>