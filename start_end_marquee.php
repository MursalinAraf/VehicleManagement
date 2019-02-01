<!DOCTYPE html>
<html>
 
<head>
	<title>Project</title>
	

	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="CSS1/marquee.css">
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

</head>

<body>
	
		<div class="row hd">
			<div class="col-sm-12">
				<div id="headpart">	
					<div id="headpart1">  <img src="Image/sm.jpg"> </div>
						<div id="headpart2"> <br> <i>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  'Heaven's Light is Our Guide' </i>
										<br> Rajshahi University of Engineering & Technology <br>
										&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Rajshahi,Bangladesh.
						</div>	
					<div id="headpart3">
						<span id="date_time"></span> <br>
						<script type="text/javascript"> 
							window.onload = date_time('date_time');
						</script>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
			<div class="row bl">
				<div class="col-sm-12">
					<nav class="navbar navbar-inverse">
						<ul class="nav navbar-nav ">
							<li class="item"><a href="project.php">Home</a></li>
							<li class="item2"><a href="#">About Ruet</a></li>
							<li class="item2"><a href="sign.php">Registration</a></li>
							<li class="item2"><a href="#">Academics</a></li>
							<li class="item2"><a href="#">Administration</a></li>
							<li class="item2"><a href="#">Faculties</a></li>
							<li class="item2"><a href="#">Department</a></li>
							<li class="item2"><a href="#">Facilities</a></li>
							<li class="item2"><a href="#">Gallery</a></li>
						</ul>
					</nav>
				</div>
			</div>
			
			
			
			
			<div class="row bl">   
				<div class="col-sm-12">
					
						<marquee direction="left" height="80%" scrollamount="3" onmouseover="this.stop(0, 0);" onmouseout="this.start('scrollamount', 0, 0);">
							<font color="red" size="5">
								<a href="http://www.ruet.ac.bd" style="color:rgb(200,100,110); text-decoration:none; " > Ruet has been .....</a>
							</font> 
						</marquee>
					
				</div>
			</div>
			
			
		
			
	   
	 
		<div class="row ml">
			<div class="col-sm-1"></div>
					<div class="col-sm-2">
						<div id="content1">
									News    Event   Notice <br> <br>
							<font color="red" size="1">
									<marquee direction="up" height="80%" scrollamount="3" onmouseover="this.stop(50,50);" onmouseout="this.start(0,0);">
									<p><hr>    :::  International Conference on Planning, Architecture & Civil Engineering (ICPAE 2017) </p> 
									<p><hr>    :::  International Conference  on Electrical, Computer &  Telecomunication Engineering (ICECEE 2016) has been completed successfully </p> 
									<p><hr>    :::  RUET has been publishing  " RUET Bulletin " preodically </p> 
									<p><hr>    :::  Circular of Various Post </p> <hr>
									</marquee>
							</font>
						</div>
					</div>
					
	    <div class="col-sm-5">
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
	 
	   
	   
	   
	   
	   
	    <div class="col-sm-3">
			<div id="content3"> 
				<div id="content3_1"> <p class="c">  Welcome to RUET </p>
						<p style="font-size:10px">Rajshahi University of Engineering & Technology (RUET) is one of  the leading public
												Universities of Bangladesh giving special emphasis in the Engineering and Technological
												education and research....... 
						</p>
					<a href="welcome_readmore.php" style="color:red; text-decoration:none; "><p class="read_more"> read more.....  </p></a>
				</div>
				<div id="content3_2">   <p class="c">Message From VC </p>
					<div id="content3_2_1"> <img src="Image/vc_sir.png" height="70px" width="70px"> </div>
						<div id="content3_2_2"> 
							<p style="font-size:10px">	I am very much delighted to introduce Rajshahi University of Engineering & Technology
													(RUET) was... <a href="vc_readmore.php" style="color:red; text-decoration:none; ">
													<p class="read_more"> read more.....  </p></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	
	
	
	<div class="row cl">
	
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
			<div id="before_footer1">
			<div class="col-sm-12">
			<div id="before_footer1_1"> 		
		
				<! Before_footer1_1 er  1st Part >
		
			<p class="red">Acemedics & Admission </p>
			<p style="color:blue">Acemedics : </p> 
			<ul type="square">
				<li> <a href=" "style="color:red; text-decoration:none; ">Acemedic Programms </a></li> 
				<li style="font-size:10"><a href=" "style="color:red; text-decoration:none; ">Facilitiy</a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Department</a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Institute</a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Teaching Area</a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Acememic Ordinance for UG studies</a></li> 
				<li><a href=" "style="color:red; text-decoration:none; ">Acememic Ordinance for PG studies</a></li>
			</ul>
		
		 <p style="color:blue">Admission : </p>
			<ul type="circle">
				<li style='font-size:10'> <a href=" "style="color:red; text-decoration:none; ">How to Apply </a></li> 
				<li style='font-size:10'> <a href=" "style="color:red; text-decoration:none; ">International Students </a></li>  
				<li style='font-size:10'> <a href=" "style="color:red; text-decoration:none; ">Information of Quata </a></li>  
				<li style='font-size:10'> <a href=" "style="color:red; text-decoration:none; ">Undegraduate Admission </a></li>  
				<li style='font-size:10'> <a href=" "style="color:red; text-decoration:none; "> Postgraduate Admission </a></li>  
				
		</ul>
		</div>
		</div>
		
		<!End of  before_footer1_1>
		
		<! Before_footer1_1er  2nd Part >
		 
		
		</div>  <!End of  before_footer1_2>
		
		  </div>
				<div class="col-sm-3">
				<div id="before_footer2">
				
		<div id="before_footer2_1">
				<p class="blue">Cnference , Seminer & Fiesta </p> 
			<a href=" "style="color:red; text-decoration:none; ">
				<p style="color:blue"> ICPACE 2017 </p>
				<p style="font-size:13"> International Cnference on Planning , Architecture & Civil Engineering.</p>
				<p style="font-size:14"> <p style="color:red">click here.........</p></p>
			</a>
			<a href=" "style="color:red; text-decoration:none; ">
				<p style="color:blue"> ICECTE 2016 </p>  
				<p> 2nd International Cnference on Electrical , Computer & Telecomunication Engineering. </p>
				<p> <p style="color:red">click here.........</p></p>
			</a>
		</div>
		
		<div id="before_footer2_2">
				<p><p style="color:Darkorange">Scholarship & Awards</p> </p>
				<p style="font-size:13">
				<a href=" "style="color:red; text-decoration:none; "> -Dean list </a><br>
				<a href=" "style="color:red; text-decoration:none; "> -Scholarship of Postgraduate students </a>
				</p>
		</div>
		
		</div>
	</div>
		
		
		
		
	
		
	<div class="col-sm-2">
	<div id="before_footer3">
			<p class="red">Important Links </p>
			<ul type="circle">
				<li> <a href="Tender.php"style="color:red; text-decoration:none; ">Tenders </a></li> 
				<li><a href=" "style="color:red; text-decoration:none; ">Careers  </a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Convocation </a></li>
				<li><a href="phonebook.pdf"style="color:red; text-decoration:none; ">Phonebooks   </a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Bus Shedule  </a></li>  
				<li><a href=" "style="color:red; text-decoration:none; ">Academic Calender</a></li>
				<li><a href=" "style="color:red; text-decoration:none; ">Historical Development of RUET </a></li>
				<li style="font-size:13"><a href=" "style="color:red; text-decoration:none; ">Central Library</a></li>
			</ul>
		
			<p class="c">Administrive Ofifices</p>
			<ul type="square">
				<li><a href="engineering_section.php"style="color:red; text-decoration:none; ">Engineering Section</a></li> 
				<li><a href="education_section.php"style="color:red; text-decoration:none; ">Education Section</a></li>  
				<li><a href="audit_section.php" style="color:red; text-decoration:none; ">Aduit Section </a></li>  
				<li><a href="establishment_section.php"style="color:red; text-decoration:none; ">Establishment Section</a></li>  
			</ul>
		</div>
	</div>
	
	
	
	
	<div class="col-sm-2">
			<div id="before_footer4">
				<p class="blue">Academic HelpLine</p> 
				<p>  </p> <p>  </p> <p>  </p>
				<ul type="square">
					<li><a href="syllebus.pdf"style="color:red; text-decoration:none; ">Syllabus</a></li> 
					<li><a href="routine.pdf"style="color:red; text-decoration:none; ">Class Routine</a></li>  
					<li><a href=" "style="color:red; text-decoration:none; ">Class Test Syllabus</a></li>  
					<li><a href="Image/class_test_routine.jpg" style="color:red; text-decoration:none; ">Class Test Routine</a></li>  
					<li><a href=" "style="color:red; text-decoration:none; ">Course Refference Book</a></li>  
					<li><a href=" "style="color:red; text-decoration:none; ">Communication</a></li>  
					<li style="font-size:13"><a href=" "style="color:red; text-decoration:none; ">Career Consulting</a></li>  
				</ul>
			</div>
	</div>
	
	
	
	
	
	<div class="row">
		<div class="col-sm-12">
			<div id="footer">
					<br>&nbsp Rajshahi University of Engineering & Technology (RUET) , Rajshahi -2100 , Bangladesh ; Tel (800 41) 09876 ; Fax (800 41) 01897  ; 
					Contact : 01855291280 : Email: webmaster@gmail.com ; All rights reserved &copy; RUET
			</div>
		</div>  
	</div>
	

</div>
		  
</body>

</html>