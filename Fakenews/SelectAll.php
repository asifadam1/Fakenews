<?php


       $dbserverIP="localhost";
       $dbusername="root"; 
       $dbuserpassword="";  
	   $dbname="news";
       
	   $mysqli_obj = new mysqli($dbserverIP,$dbusername,$dbuserpassword,$dbname) or die("Couldn't connect to the dbserver.");

 
    if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	 
	 $sqlstatement = "SELECT * FROM articles WHERE title ='$searchq' OR article ='$searchq'"; 
     $result = $mysqli_obj->query($sqlstatement) or die("Couldn't execute the SQL SELECT statement");	
	 
	 
	 print "<table border=\"1\">"; 
       print "<tr>
		 <th>title</th>
		 <th>article</th>
		 <th>Image Link</th>
		 </tr>";		 
	 
	 
	 
	 
	 
	 while ($row = $result->fetch_array(MYSQLI_ASSOC))
     { 
         $ti = $row["title"];   
         $ar = $row["article"]; 
		 $up = $row["updated"];
		 $im = $row["image link"];
		 $li = $row["link"];
		
		 

		 print "<tr>";
		 print "<td>$ti</td><td>$ar</td><td>$up</td><td>$im</td><td>$li</td><td><a href='$li'><img src='$im' width='253' height='200'></a></td>";
		 print "</tr>";
        
         }
	 
	 }
 
		 print "</table>";
		
   

   //$result->close();

   // Close the connection to the database server

   //$mysqli_obj->close();
	
 ?>