
<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!--- Multiple select---->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!----Jquery Auto Complete-------->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
	<!------Hamberger-------->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!---------navbarcss------------>
	<link href = "css/navbar.css" rel = "stylesheet">
	<!----styling--->
	<link href = "css/stylecss.css" rel = "stylesheet">
	<!----bootstrap toggle button----->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<!---oog css-->
	<link href="css/jquery.orgchart.css" rel="stylesheet">
	

    <title>User Hierarchy</title>
	<style>
	  .orgChart
	  {
		  width:100%;
		  overflow:auto;
	  }
	  .back{
		display:flex;
		background:#F6EEE1;
	  }
	</style>
  </head>
  
  <body class="back" >

<?php
       include 'dbconnection.php';
       if (!$conn) 
	   {
          echo 0;
       }
	   else
	   {
          mysqli_select_db($conn,$dbname);
		 $myCondition = Array();
		 $sql= "SELECT id,name,email,rmanager,designation,department from user";
		 if($stmt = mysqli_prepare($conn, $sql))
			 {
				//mysqli_stmt_bind_param($stmt, "s", $clientid);
				//$clientid = trim($_POST["clientid"]);
			 }
			 if (mysqli_stmt_execute($stmt))
			 {
				 mysqli_stmt_bind_result($stmt,$id,$name,$email,$rmanager,$designation,$department);
				 
				 $row = array();
				 $data = array();
				 $num =0;
				 $output ="";
				  while (mysqli_stmt_fetch($stmt)) 
				   {
					   $row['id'] = $email;
					   $row['name'] = "<span style='color:blue;font-size:13px;'><a target='_blank' href='useredit.php?userid=".$id."'>".$name."</a></span><br/><span style='color:green;font-size:10px;'>".$designation."</span><br/><span style='font-size:10px;'>".$department."</span>";
					   if($rmanager==null)
					   {
						   $row['parent'] = '0';
					   }
					   else
					   {
						   $row['parent'] = $rmanager;
					   }
					   
					   array_push($data,$row);
                   }
				
			 }
			 mysqli_close($conn);
	   }		 
?>					  
<div class='container-fluid'>
	
	    <div class='due-msg'>
		
		
		</div>
	    <div class='show-msg alert alert-danger'>
	        
	    </div>
	    <div id="orgChart"></div>
        
     
</div>

	
	


 
    <!-- jQuery-->
     <script src="js/jquery.min.js"></script>
	 <!-- bootstrap-->
     <script src="js/bootstrap.min.js"></script>
	 <!---------form validation---->
	 <script src='js/jquery.validate.js'></script>
	 <!---navbar js---------->
	 <script src="js/navbar.js"></script>
	 <!----------bootstrap multiple----->
	 <script src="js/bootstrap-select.js"></script>
	 <!------bootstrap toggle-------->
	 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	 <!---org chart--->
	 <script src="js/jquery.orgchart.js"></script>

	<script>
	$(document).ready(function () {
		 var testData =<?php echo json_encode($data); ?>;
                
$(function(){
  org_chart = $('#orgChart').orgChart({
    data: testData, // your data
    
    onAddNode: function(node){},
    onDeleteNode: function(node){},
    onClickNode: function(node){},
    
});
});
             
	});
		        
              
	</script>
	
  </body>
</html>

