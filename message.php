<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
	<link rel="stylesheet" href="forcompany.css">
	
	
	<style type="text/css">
		body
		{

         background-image:url("https://wallpapertag.com/wallpaper/full/0/b/f/417568-gorgerous-light-pink-backgrounds-2560x1600-images.jpg");
         background-repeat:no-repeat;
         background-size:cover;
             
		}
		table

		{
			margin-top: 20%;
			background-color: #BD1E51;
			color:white;
		}
          th
          {
          	background-color: #1FC58E;
          }
	</style>
</head>
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
<center>
<table border="2" width="40%">
	<tr>
		<th>Name</th>
		<th>Email id</th>
		<th>Message</th>
	
		
	</tr>

	
<?php 

include("dbconnect.php");
error_reporting(0);
$query="select * from contact";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

echo $result['name']." ".$result['email']." ".$result['message'];
//echo  "$total";

 if($total!=0)
{
	
	$result=mysqli_fetch_assoc($data);
	
	while ($result=mysqli_fetch_assoc($data)) {
	     echo "
	     <tr>
	     <td>".$result['name']."</td>
	        <td>".$result['email']."</td>
	           <td>".$result['message']."</td>
  
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
 </center>
</body>
</html>