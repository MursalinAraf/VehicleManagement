<?php
include("includes/database/connection.php");
?>

<html>
     <head>
<title></title>
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
	<script type="text/javascript"></script>

<style>
 
 
body{
	background-color:white;
	 
	  
}
#application{
	margin-right: ;
}
*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}
#alignment{
	background-color:;
	margin-left:;
	text-align:center;
	 width : 100%;
    height : 300px;
}
</style>
</head>
    <body>
        <?php
        ob_start(); // Initiate the output buffer
        
        require_once 'core/init.php';
      
        if (Session::exists('home')) {
            echo '<p>' . Session::flash('home') . '</p>';
        }

        $user = new User(); //Current
        $message = new Message();

        if ($user->isLoggedIn()) {
           
  
            if ($user->hasPermission('faculty')) {
               echo '<p style="font-size:20px;color:white;margin-left:20px">Faculty Member....</p>';
            } else if ($user->hasPermission('admin')) {
                echo '<a href="admin.php">Varify Account</p>';
            }
          
       

        
        $message = '';
        if (isset($_POST['submit'])) {
            $dept_head = $_POST['dept_head'];
            $desig = $_POST['desig'];
            if ($user->hasPermission("admin")) {
                $dept_head = $user->data()->name;
                $desig = "VC(Admin)";
            }
            $reserve_date = $_POST['reserve_date'] . ' ' . $_POST['reserve_time'];
            $return_date = $_POST['return_date'] . ' ' . $_POST['return_time'];
            $destination = $_POST['destination'];
            $depart_from = $_POST['depart_from'];
            $reason = $_POST['reason'];
            $vehicle_type = $_POST['vehicle-type'];
            $user_id = $user->data()->id;

            $status = 'pending';
            if ($user->hasPermission("admin"))
                $status = 'approved';
            else if ($user->hasPermission('dept_head') || $user->hasPermission("branch_officer"))
                $status = "head-approved";

            $query = "insert into application(user_id, dept_head, head_desig, reserve_date_time, return_date_time," .
                    "destination, depart_from,reason, vehicle_type, status) values($user_id,'$dept_head','$desig','$reserve_date', "
                    . "'$return_date','$destination','$depart_from','$reason','$vehicle_type','$status')";
            query_insert($query);
            $message = 'Application has been submitted successfully.';
        }
         
        $vtype = query_result("select distinct bus_type as btype from bus");
        ?>
  
         

		
 
 
 	<div class="row">
<div class=" col-sm-1"></div>
<div class="col-sm-8">
			 <h3 style="color:black;font-size:25"><?php echo $message; ?></h3>	    
 <div id="application" style="display:; margin-top:px;margin-right:"  >
                    <div class="panel panel-default">
                        
                       
 						
								 	 
			<div id="headpart1"style="border-bottom:1px solid #ddd;margin-top:px"> 
			<img src="Image/sm.jpg" style="border-bottom:1px solid #ddd"> </div>
						<div id="headpart2" style="border-bottom:1px solid #ddd;margin-top:10px"><br><i style="color:;font-size:px";>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 'Heaven's Light is Our Guide' </i>
										<p style="color:;font-size:px;margin-right:px";><strong>   &nbsp &nbsp Rajshahi University of Engineering & Technology</strong><p>
										<p style="color:;font-size:px";>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Transport Department.</p>
						 <p style="font-size:16px"><strong>Application form for (Motorcar/ Microbus/ Ambulance/ &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp Bus/ Minibus)</strong> </p> 
					
</div>	
					
							
							 
							  
                   
					    <br>
                        <div class="panel-body" style="" >
            
 
			    
			
			<form class="form-horizontal" method="post" role="form">
  <?php if (!$user->hasPermission("admin")) { ?>
                
                <div class="form-group">
                          
				 <div class="col-md-11">
				 <br><br>
                    <label for=" head_name" >  <p style="font-size:20px;margin-right:5px";> &nbsp &nbsp Name of departmental head(for official use):</p></label>
                      
					 
  <input type="text" class="form-control" id="head_name" name="dept_head" value=" <?php if(isset($dept_head) && isset($dept_head['name'])) echo $dept_head['name']; ?>">
                        
                         
                    </div>
                </div>
                <div class="form-group">
				  <div class="col-md-11">
                    <label for=" dng" ><p style="font-size:20px;margin-right:5px";>Designation:</p></label>
                    
                             <input type="text" class="form-control" id="dng" name="desig">
                    </div>
                </div>
				<?php } ?>
                
                <div class="form-group">
		 <div class="col-md-5">
                    <label for=" date1"  > <h4 style="font-size:20px;margin-right:5px"> Reservation date:</h4></label>
                   
                        <input type="date" class="form-control" id="date1" name="reserve_date" >
                    </div>
					 <div class="col-md-5">
                    <label for=" date1"><h4 style="font-size:20px;margin-right:5px"> Reservation Time:</h4></label>
                
 
                         <input type="time" class="form-control" id="date1" name="reserve_time" >
                    </div>
					 
                </div>
			 
				   <div class="form-group">
				     <div class="col-md-5">
                    <label for=" date1"> <h4 style="font-size:20px;margin-right:5px";>Return date:</h4></label>
                    
 
                        <input type="date" class="form-control" id="date1" name="return_date" >
                    </div>
					<div class="col-md-5">
                    <label for=" date1" ><h4 style=" font-size:20px;margin-right:5px";> Return Time:</h4></label>
                   
 
                         <input type="time" class="form-control" id="date1" name="return_time" >
                     
					</div>
                </div>
				 
				<div class="form-group">
				 <div class="col-md-11">
                    <label for="Place" > <h4 style="font-size:20px;margin-right:5px";> Destination:</h4></label>
                  
 
                          
                    <textarea class="form-control" id="place" row="3" name="destination"></textarea>
					</div>
                </div>
				<div class="form-group">
				   <div class="col-md-11">
                    <label for="place1"  >  <h4 style="font-size:25px;margin-right:5px";>Depart From:</h4></label>
                    
           <input type="text" class="form-control" id="place1" name="depart_from">
                     
					</div>
                </div>
					<div class="form-group">
					  <div class="col-md-11">
                    <label for="reason"  > <h4 style="font-size:25px;margin-right:5px";> Reason for trip(official/personal):</h4></label>
                   
 
                      <textarea class="form-control" id="reason" name="reason"></textarea>    
</div>
					</div>
                
				
				<div class="form-group">
				 <div class="col-md-5">
                    <label for="vechicle-type"  ><h4 style="font-size:25px;margin-right:5px";>Vehicle Type: </h4>  </label>
                     
 
                       <select  class="form-control" id="vehicle-type" name="vehicle-type">
                            <?php
                            while ($vt = $vtype->fetch_assoc()) {
                                echo '<option value="' . $vt['btype'] . '">' . $vt['btype'] . '</option>';
                            }
                            ?>
                        </select>    
                     
					</div>
                </div>
				
				 
				 
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block"name="submit" value="submit">submit</button>
                             
					</div>
                </div>
            </form>  
        </div>  

        </div>
		</div>
		 
	 </div>
	 <div style=" float : center ; color:orange; font-size:36px ; text-align:center">
 
            <li><a href="Form.pdf" style="color: orange;">Download the form here</a></li><br>
 
        </div>
	 </div>
	 </div>
	<?php }
	 
	 else {

            echo '<div id="alignment">';
            echo '<h2 style="font-size:30px;color:black"> <br> <br>  You need to <a href="login.php">Login</a> or <a href="register.php">Register.</a></h2>';
            echo "</div>";
        }?>
        <?php
        require_once 'footer.php';
        ?>
        <?php
        ob_end_flush(); // Initiate the output buffer
        ?>
    </body>
</html>

