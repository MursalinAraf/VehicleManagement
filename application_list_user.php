

<html>
<head>
    <style >
    #blank_space{
    width : 100%;
    height : 300px;
}
#alignment{
    width : 100%;
    height : 90px;
	text-align:center;
	}
	
    </style>

</head>
<body>
<?php
    ob_start(); // Initiate the output buffer
?>
<?php

require_once 'core/init.php';
require_once 'Head.php';
if(Session::exists('home')) {
    echo '<p>' . Session::flash('home'). '</p>';
}

$user = new User(); //Current
$message = new Message();

if($user->isLoggedIn()) {
?>


     
     
<?php

    if($user->hasPermission('faculty')) {
        echo '<p>Faculty member!</p>';
    } else if($user->hasPermission('admin')){
        echo '<a href="admin.php">Varify Account</p>';
    }

} else {
	
	echo '<div id="alignment">';
    echo '<p> <br> <br> <br> <br> <br> <br> You need to <a href="login.php">Login</a> or <a href="register.php">Register.</a></p>';
	echo "</div>";
}
?>

<?php
include("includes/database/connection.php");

$query = '';

    $query = 'select * from application where application.user_id='.$user->data()->id;

$applications = query_result($query);

?>
<div class="row">
<div class=" col-sm-2"></div>
<div class="col-sm-8">
 <div id="application" style=""  >
                    <div class="panel panel-danger">
                        <div class="panel-heading"><h1 style="text-align:center;color:black">Submitted applications for Motorcar/ Microbus/ Ambulance/ Bus/ Minibus </h1> 
                            <div class="panel-title"></div>
 
                        </div>  
                        <div class="panel-body" >
 </div>
<div class="row">
<div class="col-lg-6 col-lg-offset-3">
	<table class="table">
	<thead>
	<tr>
	<th>Application_Id</th>
	<th>Submitted on</th>
	<th>Status</th>
    <th></th>
	</tr>
	</thead>
	<tbody>
	<?php
	while($a = $applications->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$a['application_id']."</td>";
		echo "<td>".$a['submitted_on']."</td>";
		echo "<td>".$a['status']."</td>";
        echo "<td><a href='view_application.php?id=".$a['application_id']."'>View</a></td>";
		echo "</tr>";
	}
	?>
	<tbody>
	</table>
   </div>
   </div>
    
  </div>
</div>
</div>
</div>

<?php
require_once 'footer.php';
?>
<?php
    ob_end_flush(); // Initiate the output buffer
?>
</body>
</html>


