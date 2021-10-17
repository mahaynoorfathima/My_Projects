<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="forcompany.css">
    
	<style type="text/css">
		 body {  
         background-image:url("https://www.pixeden.com/media/k2/galleries/365/004-web-showcase-background-presentation-abstract-3d-psd.jpg");
         background-repeat:no-repeat;
         background-size:cover;
             } 
             table
             {
             	margin-top: 100px;
             	background-color:#F1B814;
             	border-radius:15px;
             	border-color: #162B32;

             }
             h1	
             {
             	font-size: 50px;
             	margin-top: 60px;
             }
             u
             {
             	color: #BE2F29;
             
             }
             th
             {
             	background-color: #FF4838;
             }
	
	</style>
</head>
<center>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="homepage.html"><span class="glyphicon glyphicon-home"></span> Home</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="Adminpage.html"><span class="glyphicon glyphicon-user"> Sign out&nbsp;</span>						</a>
						
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
<h1><center><u><i>RECORDS</i></u></center></h1>
<table border="2" width="70%" >
	<tr>
		<th>number</th>
		<th>airplane_id</th>
		<th>departure</th>
		<th>d_time</th>
		<th>arrival</th>
		<th>a_time</th>
		
	</tr>

	
<?php 

include("dbconnect.php");
error_reporting(0);
$query="select * from flight";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

echo $result['number']." ".$result['airplane_id']." ".$result['departure']." ".$result['d-time']." ".$result['arrival']." ".$result['a_time'];
//echo  "$total";

 if($total!=0)
{
	
	$result=mysqli_fetch_assoc($data);
	
	while ($result=mysqli_fetch_assoc($data)) {
	     echo "
	     <tr>
	     <td>".$result['number']."</td>
	        <td>".$result['airplane_id']."</td>
	           <td>".$result['departure']."</td>
	              <td>".$result['d_time']."</td>
	                 <td>".$result['arrival']."</td>
	                    <td>".$result['a_time']."</td>
	                       
	                       
                            
	                       </tr>";


	}

//echo "table record found";
}
else
{
echo "no record";
 }
 ?>
 </table>
</body>
</center>
</html>