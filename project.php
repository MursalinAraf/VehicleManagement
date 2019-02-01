<!DOCTYPE html>
<html>
 
<head>
	<title>Project</title>
	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="cssfile.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script type="text/javascript" src="JS/date_time.js"></script>
	    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap\js\bootstrap.min.js">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<!-- Latest compiled and minified CSS -->
	
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
		
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
	
var image1=new Image ()
image1.src="Image/i1.jpg"
var image2=new Image ()
image2.src="Image/i2.jpg"
var image3=new Image ()
image3.src="Image/i3.jpg"
var image4=new Image ()
image4.src="Image/i4.jpg"
var image5=new Image ()
image5.src="Image/i5.jpg"
var image6=new Image ()
image6.src="Image/i6.jpg"
var image7=new Image ()
image7.src="Image/i7.jpg"
var image8=new Image ()
image8.src="Image/i8.jpg"

</script>
<style>
.dropbtn {
    background-color: #000099;
    color: white;
    padding: 13.9px;
	margin:
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
	margin:0px;
	padding_left:0px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#66ccff ;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	margin:0px;
	padding:0px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	border-bottom:1px solid white;
}

.dropdown-content a:hover {background-color:#00cc99}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

</head>

<body>
	
		 <div class="row nav">
	
	 
			<div class="col-sm-12 hd">
				<div id="headpart">	
					<div id="headpart1">  <img src="Image/sm.jpg"> </div>
						<div id="headpart2"> <br><i style="color:white;font-size:18px";>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 'Heaven's Light is Our Guide' <br></i>
										<h4 style="color:white;font-size:25px;margin-right:5px";><strong>   &nbsp &nbsp Rajshahi University of Engineering & Technology</strong><h4>
										<h3 style="color:white;font-size:25px";>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Transport Management System.</h3>
						
						</div>	
					<div id="headpart3"style="margin-left:50px">
						<span id="date_time"style="color:white;font-size:20px"></span> <br>
						<script type="text/javascript"> 
							window.onload = date_time('date_time');
						</script>
					</div>
				</div>
			</div>
			<div class="col-sm-1 hd"></div>
			 
		</div>
		
		
		
		
			<div class="row nav">
			<div class="col-sm-1 tr"></div>
				 
				<div class="col-sm-8 bl">

						 
						 
  <div class="dropdown">
  <button class="dropbtn"> <a href="project.php" style="color:white;text-decoration:none;"><span class="glyphicon glyphicon-home"> Home </a></button>
  <div class="dropdown-content">
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon-font"></span> About</button>
  <div class="dropdown-content">
    <a href="history.php">History</a>
    <a href="#">Mission and Vision</a>
    <a href="#">RUET Act</a>
	<a href="#">Campus Details</a>
	<a href="#">RUET Map</a>
  </div>
  </div>
 
  <div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon"></span>Bus schedule</button>
  <div class="dropdown-content">
    <a href="schedule.pdf">Bus Schedule</a>
	   <a href="searchtable.php">Bus Schedule Database</a>
    
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn"> <span class="glyphicon glyphicon-phone"></span>Staff
  </button>
  <div class="dropdown-content">
  <a href="staff.php">Staff</a>
    <a href="serial No.pdf">Staff_Info</a>
    	 
  </div>
  </div>
   
    
   
    <div class="dropdown">
  <button class="dropbtn">Reservation Form</button>
  <div class="dropdown-content">
  <a href="reservation_user.php">Reservation Form</a>
   
   
  </div>
  </div>
  
   
     
					
					
				</div>
				<div class="col-sm-3">
				  <div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon-user"></span>Sign Up</button>
	<div class="dropdown-content">
	   
	<a href="faculty_register.php">Teacher</a>
	<a href="regi.php">Student</a>
	<a href="vehiclestaffregister.php">Vehicle staff</a>
	</div>
  </div>
				<div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon-log-in"></span> Login</button>
  <div class="dropdown-content">
	<a href="login.php">Log In</a>
    <a href="index.php">Contents</a>
    <a href="logout.php">Log Out</a>
   
  </div>
  </div>
				</div>
				 
				 
			</div>
			
			
			
			<div class="row xl">   
			<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<font color="red" size="5">
						<marquee direction="left" scrollamount="3" onmouseover="this.stop(0, 0);" onmouseout="this.start('scrollamount', 0, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0); ">
						<a href="http://www.ruet.ac.bd" style="color:#009900; text-decoration:none;">	::: Bus strike  (01.04.17) </a>
						<a href="http://www.ruet.ac.bd" style="color:#009900; text-decoration:none;">	::: New Bus allocation(01.04.17)  </a>
						<a href="http://www.ruet.ac.bd" style="color:#009900; text-decoration:none;">	&nbsp &nbsp ::: bUS IS NOT AVAILABLE NOW  (01.04.17)</a>
						</marquee>
					</font> 
				</div>
				<div class="col-md-1"></div>
			</div>
			
			
	   
	 
		<div class="row ml">
			
					 <div class="col-md-2 col-md-offset-1 col-sm-2">
						<div id="search">
						<h3 style="color:Green; text-size:20px; border:1px;background-color:;">Available Bus</h3>
		 

    <form action="displayt.php" method="get">

        <div class="form-group">

            <label for="inputDay">Day:</label>

             
			 <select  class="form-control" id="" name="name"value="">
                            <option>Saturday</option>
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                             
                        </select>

        </div>
		  <div class="form-group">

            <label for="inputDay">SourceLeave:</label>

              
 
<select class="form-control" id="" name="time"value=""placeholder="Enter a Day">
   
  <option value="6">6:00 am</option>
  <option value="7">7:00 am</option>
  <option value="8">8:00 am</option>
  <option value="9">9:00 am</option>
  <option value="10">10:00 am</option>
  <option value="11">11:00 am</option>
  <option value="12">12:00 pm</option>
  <option value="13">1:00 pm</option>
  <option value="14">2:00 pm</option>
  <option value="15">3:00 pm</option>
  <option value="16">4:00 pm</option>
  <option value="17">5:00 pm</option>
  <option value="18">6:00 pm</option>
  <option value="19">7:00 pm</option>
  <option value="20">8:00 pm</option>
  <option value="21">9:00 pm</option>
  <option value="22">10:00 pm</option>
  <option value="23">11:00 pm</option>
</select>
        </div>

        

        

        <button type="submit" name="submit" class="btn btn-primary">Search</button>

    </form>


							
	 
						</div>
					</div>
					
	    <div class="col-md-6">
			<div id="content2"> 
					<img src="sm.jpg"  name="slide"  width="100%"  height="330">
					<script type="text/javascript">
					var step=1
					function slideit (){
						document.images.slide.src=eval ("image"+step+".src")
						if (step<8)
						step++
						else
						step=1
						setTimeout ("slideit ()" , 2000)
					}
					slideit () 
				</script>
			</div>
		</div>
		   <div class="col-sm-2">
			<div id="content3"> 
				<div id="content3_1"> <p style="color:blue; text-size:20px;"> Welcome to RUET </p>
						<p style="font-size:10px;color:rgb(0,0,0);">
						Rajshahi University of Engineering & Technology (RUET) is one of  the leading public
						Universities of Bangladesh giving special emphasis in the Engineering and Technological
						education and research....... 
						</p>
					<a href="welcome_readmore.php" style="color:red; text-decoration:none;"><p class="read_more"> read more.....  </p></a>
				</div>
				<div id="content3_2">   <p style="color:blue; text-size:20px;">Message From VC </p>
					<div id="content3_2_1"> <img src="Image/vc_sir.png" height="70px" width="70px"> </div>
						<div id="content3_2_2"> 
							<p style="font-size:10px;color:rgb(0,0,0);">	I am very much delighted to introduce Rajshahi University of Engineering & Technology
							(RUET) was... <a href="vc_readmore.php" style="color:red; text-decoration:none;"><p class="read_more"> read more.....  </p></a></p>
					</div>
				</div>
			</div>
		</div>
	 
	   
	   
	   
	   
	   
	     
		<div class="col-sm-1"></div>
	</div>
	
	
	<div class="row">
	<div class="col-md-7"></div>
	 	<div class="col-md-4 col-md-offset-1">
						<div id="content1">
								 <p style="color:blue; text-size:20px;">	News    Event   Notice </p><br>
							
									<font color="red" size="2">
									<marquee direction="up" height="80%" scrollamount="3" onmouseover="this.stop(50,50);" onmouseout="this.start(0,0);">
									<p style=" text-size:10px;"><hr> <a href=""style="color:red; text-decoration:none;">   :::  RUET has been publishing  " RUET Bulletin " preodically </p> 
									<p style=" text-size:10px;"><hr> <a href=""style="color:red; text-decoration:none;">   :::  Vehicle schedule has been changed </p>
									<p style=" text-size:10px;"><hr> <a href=""style="color:red; text-decoration:none;">   :::  Notice for Transport staff reqruitement 2016-2017 </p> 
									<p style=" text-size:10px;"><hr> <a href=""style="color:red; text-decoration:none;">   :::  Vehicle strike </p> <hr>
									
									</marquee>
									</font>
						</div>
					</div>
		</div>
	

	
	
	
 
	
	<div class="row">
		<div class="col-sm-12">
			<div id="footer"> 
			<br>&nbsp Rajshahi University of Engineering & Technology (RUET) , Rajshahi -2100 , Bangladesh ; Tel (800 41) 09876 ;
			Fax (800 41) 01897  ; Contact : 01855291280 ;<br> Email:y@gmail.com ;All rights reserved &copy; RUET .
			</div>
		</div>  
	</div>
	

		  
</body>

</html>