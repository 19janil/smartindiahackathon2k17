<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/login_form.css">
</head>
<style>
 html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
  padding-top: 70px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 40px;
  background-color: #f5f5f5;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
<body>
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div>
      <ul class="nav navbar-nav navbar-right">
		<li class="col-xs-3"><a href="">A+</a></li>
		<li class="col-xs-3"><a href="">A-</a></li>
		<li class="col-xs-3"><a href="">A</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="#">Divyangjan</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
		<li style="padding-left:40px;"><a href="#"></a></li>
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">About Us</a></li>
		<li><a href="#">Complaints</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="logout.php">Logout</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="pill" href="#home">Enrolled Schemes</a></li>
		<li><a data-toggle="pill" href="#menu1">Applicable Schemes</a></li>
    </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Enrolled Schemes</h3>
      <p><?php
	ini_set("allow_url_fopen", 1);
	session_start();
	$json = file_get_contents('http://localhost:99/api/user/'.$_SESSION['udid']);
	$obj= json_decode($json,true);
	$count=count($obj);
							echo '<div class="">
									<table class="table table-hover">
							  <thead>
								<tr>
								  <th class="col-xs-3 col-md-3">Scheme Name</th>
								  <th class="col-xs-3 col-md-3">Scheme Description</th>
								  <th class="col-xs-3 col-md-3">Application Date</th>
								  <th class="col-xs-3 col-md-3">Status</th>
								</tr>
							  </thead></table></div>';
						for($i=0;$i<$count;$i++){
							echo '<div class="">
									<table class="table table-hover">
								<tbody>
								<tr>
								  <td class="col-xs-3 col-md-3">'.$obj[$i]['SchemeName'].'</td>
								  <td class="col-xs-3 col-md-3">'.$obj[$i]['SchemeDescription'].'</td>
								  <td class="col-xs-3 col-md-3">'.$obj[$i]['ApplicationDate'].'</td>
								  <td class="col-xs-3 col-md-3">'.$obj[$i]['StatusDescription'].'</td>
								</tr>
							  </tbody>
							  </table></div>';}
						
	?></p>

    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Applicable Schemes</h3>
      <p><?php
		require('db.php');
		//session_start();
		$UDID=$_SESSION['udid'];
		$applicable_schemes=mysqli_query($conn,"select * from usercategory where UDID = '$UDID'");
		echo '<div class="">
									<table class="table table-hover">
							  <thead>
								<tr>
								  <th class="col-xs-4">Scheme Name</th>
								  <th class="col-xs-4">Scheme Description</th>
								</tr>
							  </thead></table></div>';
		while($row= mysqli_fetch_array($applicable_schemes)){
			$disable_category_id=$row['DisabilityCategoryId'];
			$applicable_schemes_inner=mysqli_query($conn,"select * from schemes where DisabilityCategoryId = '$disable_category_id'");
			
			while($row_inner= mysqli_fetch_array($applicable_schemes_inner)){
				echo '<div class="">
							<table class="col-xs-12 table table-hover">
							<tbody>
								<tr>
								  <td class="col-xs-4">'.$row_inner['SchemeName'].'</td>
								  <td class="col-xs-4">'.$row_inner['SchemeDescription'].'</td>
								</tr>
							  </tbody>
							  
							</table>
					 </div>';
			}
		}
		?>
	</p>
    </div>
    
  </div>
</div>

</body>
</html>
