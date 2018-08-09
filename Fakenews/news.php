<?php 
  include("includes/header.php");
  include("includes/nav.php");
  
?>


<div class="container">

        <div class="row">

<?php 
  include("includes/sideMenu.php");  
?>
		<div class="col-md-9">
			<div class="content">

<?php


       $dbserverIP="localhost";
       $dbusername="root"; 
       $dbuserpassword="";  
	   $dbname="news";
       
	   $mysqli_obj = new mysqli($dbserverIP,$dbusername,$dbuserpassword,$dbname) or die("Couldn't connect to the dbserver.");

 
    if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	 
	 $sqlstatement = "SELECT * FROM articles WHERE page ='$searchq' OR article ='$searchq'"; 
     $result = $mysqli_obj->query($sqlstatement) or die("Couldn't execute the SQL SELECT statement");	
	 
	 
	 		 
	 
	 
	 
	 
	 
	 while ($row = $result->fetch_array(MYSQLI_ASSOC))
     { 
           
         $ar = $row["article"]; 
		 $up = $row["updated"];
		 $im = $row["image link"];
		 $li = $row["link"];
		
		 

		 print "<tr>";
		 print "<a href='$li'><img src='$im' width='253' height='200'><h2>$ar</h2>Date Posted:<p>$up</p></a>";
		 print "</tr>";
        
         }
	 
	 }
 
		
		
   

   //$result->close();

   // Close the connection to the database server

   //$mysqli_obj->close();
	
 ?>
			</div>
		</div>
	</div>
</div>
<?php
include("includes/footer.php");
?> 