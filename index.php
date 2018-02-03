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
<body>

<nav class="navbar navbar-fixed-top">
  <div class="container">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div>
      <ul class="nav navbar-nav navbar-right">
		<li class="col-xs-3"><button onclick="zoomin();">A+</button></li>
		<li class="col-xs-3"><button onclick="normal();">A</button></li>
		<li class="col-xs-3"><button onclick="zoomout();">A-</button></li>
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
		<li><a data-toggle="modal" data-target="#myModal">Subscribe</a></li>
		<li><a data-toggle="modal" data-target="#login-modal">Login</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
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
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form method="post" action="php/login.php">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Forgot Password</a>
					<br/><a href="http://www.swavlambancard.gov.in/pwd/application#form_block_1">Get UDID</a>
				  </div>
				</div>
			</div>
		  </div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Subscribe</h2>
        </div>
        <div class="modal-body">
         <br>
          <form method="POST">
          <input type="text" name="uname" placeholder="Name" class="form-control" required>
          <br>
          <input type="email" id="email" placeholder="Email" class="form-control" required>
          <br>

          <input type="number" id="UserMobile" maxlength="14" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " class="form-control" name="data[User][mobile]" data-fv-field="data[User][mobile]" required>
                  
          <br>
          <label id="myCheck">Disability:</label>
         <div class="checkbox">
         <label><input type="checkbox" name="c1" value="0">General</label>
         </div>
         <div class="checkbox">
         <label><input type="checkbox" name="c1" value="1">Vision</label>
         </div>
         <div class="checkbox">
         <label><input type="checkbox" name="c1" value="2">Deaf</label>
         </div>
         <div class="checkbox">
         <label><input type="checkbox" name="c1" value="3">Physical</label>
         </div>
         <div class="checkbox">
         <label><input type="checkbox" name="c1" value="4">Mental</label>
         </div>
          <input type="submit" class="btn btn-primary" name="subscribe" value="Subscribe" onclick="check();">
          </form>
        </div>
      </div>
    </div>
  </div>

     <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
      <!-- image trigger modal -->
        <a data-target="#shekhar" data-toggle="modal">
          <img src="img/shekhar.jpg" style="height:400px;width:100%;">
        </a>
        <!--Modal for Shekhar Naik-->
            <div class="carousel-caption">
              <h3>SUCCESS STORY - Shekhar Naik</h3>
              <p>Naik is a perfect example of someone who has converted a disability into an opportunity. With his strong will power and dedication, he became a T20 Blind Cricket World Champion and has 32 centuries to his name. After a lot of financial and social troubles, Naik has emerged as a winner and we salute his spirit. Watch this video to know more about him –</p>
            </div>
          </div>

          <div class="item">
      <!-- image trigger modal -->
        <a data-target="#kapten" data-toggle="modal">
          <img src="img/dotsmartwatch.jpeg" style="height:400px;width:100%;">
        </a>
              <div class="carousel-caption">
              <h3>INNOVATION - Braille Smart Watch</h3>
              <p>dot braille smart watch for Visual Imparied</p>
            </div>
          </div>


          <div class="item">
            <a href="http://www.swavlambancard.gov.in/"><img src="img/UDIDImage.PNG" style="height:400px;width:100%;"></a>
            <div class="carousel-caption">
              <h3>UDID Registration</h3>
              <p>The PwDs can obtain the new UDID card / Disability Certificate to avail schemes and benefits provided by the Government through its various Ministries and their Departments. This card will be valid pan-India.</p>
            </div>
          </div>

          <div class="item">
            <img src="img/dyk.jpg" style="height:400px;width:100%;">
            <div class="carousel-caption">
              <h1>DO YOU KNOW?</h1>
              <p>The Convention on the Rights of Persons with Disabilities (CRPD) promotes, protects and ensures the human rights for all 
                 people with disabilities. So far, more than 150 countries and regional integration organizations have signed the Convention, and over 130 have ratified it.</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   </div>

</div>


<div class="container-fluid"> 
   <div class="row">
   <p style="padding:10px;"></p>
   </div>
</div>
<div class="container-fluid"> 
   <div class="row">
      <div class="col-lg-8">
			 <div class="well">
				<div class="row">
					<div class="col-xs-6">
						<h3>Schemes</h3>
					</div>
					<div class="col-xs-6">
					<form method="post" action="">
						<div class="input-group">
							<input type="text" name="search" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<input type="submit" class="btn btn-secondary" value="Go!"/>
							</span>
						</div>
					</form>
					</div>
				</div>
					
			 <div class="panel panel-default">
				  <div class="panel-body">
					<?php
						echo '<div class="panel" id="permanent_schemes">
									<table class="table table-hover table-striped center_text_table">
							  <thead>
								<tr>
								  <th class="center_text_table">Scheme Name</th>
								  <th class="center_text_table">Scheme Description</th>
								</tr>
							  </thead>
									<table class="table table-hover center_text_table">
								<tbody>
								<tr>
								  <td class="col-xs-3 col-md-4">Assistance to Disabled Persons for Purchase /Fitting of Aids and Appliances (ADIP Scheme)</td>
								  <td class="col-xs-9 col-md-8">To assist needy persons with disabilities in procuring durable sophisticated and scientifically manufactured, modern, standard aids and appliances that can promote their physical, social and psychological rehabilitation by reducing the effects of disabilities and enhance their economic potential.</td>
								</tr>
								<tr>
								  <td class="col-xs-3 col-md-4">Assistance to Disabled Persons for Purchase /Fitting of Aids and Appliances (ADIP Scheme)(In hearing) </td>
								  <td class="col-xs-9 col-md-8">Provides devices Mediclaim for implantation</td>
								</tr>
							  </tbody>
							  </table></div>';
						ini_set("allow_url_fopen", 1);
						if(isset($_POST['search'])){
						$json = file_get_contents('http://localhost:99/api/UserCategorySchemesSearch/'.$_POST['search']);
						$obj= json_decode($json,true);
						$count=count($obj);
						?><script>
							var permanent_schemes_var=document.getElementById('permanent_schemes');
							permanent_schemes_var.innerHTML='';
						</script><?php
						echo '<div class="panel">
									<table class="table table-striped">
							  <thead>
								<tr>
								  <th class="">Scheme Name</th>
								  <th class="">Scheme Description</th>
								</tr>
							  </thead></table></div>';
						for($i=0;$i<$count;$i++){
							echo '<div class="panel">
									<table class="table table-hover">
								<tbody>
								<tr>
								  <td class="col-xs-3 col-md-4">'.$obj[$i]['SchemeName'].'</td>
								  <td class="col-xs-9 col-md-8">'.$obj[$i]['SchemeDescription'].'</td>
								</tr>
							  </tbody>
							  </table></div>';}
						}
					?>
				  </div>
			 </div>
			 </div>
      </div>
      <div class="col-lg-4">
			 <div class="well">
					<h3>Important Links</h3>
			 <div class="panel panel-default">
				  <div class="panel-body">
					<p>Under Construction Voice Recognition Click <a data-toggle="modal" data-target="#speech-modal">sneak preview</a> to know more</p>
				  </div>
			 </div>
			 	 </div>
      </div>
   </div>   
</div>
<footer class="footer" style="background:silver;">
      <div class="container">
        <p class="text-muted"></p>
      </div>
</footer>

<div class="modal fade" id="speech-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>What do you want to search?</h1><br>
				<form id="labnol" method="post" action="">
					  <br><br><br><br><br><br><br><br>
					  <center><div class="speech">
						<input type="text" name="q" id="transcript" placeholder="Speak" />
						<img onclick="startDictation()" onload ="speak();"src="//i.imgur.com/cHidSVu.gif" />
					  </div>
					  </center>
				</form>
				</div>
			</div>
</div>
<script>
function speak(text,callback) {
    var text1=text;
    var u = new SpeechSynthesisUtterance();
    u.text = text1;
    u.lang = 'en-US';
    u.onend = function () {
        if (callback) {
            callback();
        }
    };
    u.onerror = function (e) {
        if (callback) {
            callback(e);
        }
    };
 
    speechSynthesis.speak(u);
    //speak1();
}
</script>
<script>

	<?php 
	if(isset($_POST['q'])){
	$search_string=$_POST['q'];
	//echo $search_string;
	ini_set("allow_url_fopen", 1);
	//session_start();
	$json = file_get_contents('http://localhost:99/api/UserCategorySchemesSearch/'.$search_string);
	$obj= json_decode($json,true);
	//$count=count($obj);
	?>						
	$text="Scheme Name is ".<?php echo $obj[0]['SchemeName'] ?> ."Here is your Scheme Description"<?php echo $obj[0]['SchemeDescription']?>."";
	speak($text);<?php
	}?>
</script>
  <script>
    function startDictation() {

      if (window.hasOwnProperty('webkitSpeechRecognition')) {

        var recognition = new webkitSpeechRecognition();

        recognition.continuous = false;
        recognition.interimResults = false;

        recognition.lang = "en-US";
        recognition.start();

        recognition.onresult = function(e) {
          document.getElementById('transcript').value
                                   = e.results[0][0].transcript;
          recognition.stop();
          document.getElementById('labnol').submit();
        };

        recognition.onerror = function(e) {
          recognition.stop();
        }

      }
    }
  </script>
<script>
function zoomin(){
window.parent.document.body.style.zoom = 1.15;
}
function normal(){
	
window.parent.document.body.style.zoom = 1;
}
function zoomout(){
	window.parent.document.body.style.zoom = .85;
}
</script>

</body>
</html>
