<html>
<head>
	<title>Verify Account</title>
<style>

	#blank_space{
    width : 100%;
    height : 340px;
	}
	#alignment{
    width : 100%;
    height : 100px;
	text-align:center;
	}
	
	#alignment1{
    width : 100%;
    height : 100px;
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
$user = new User();
if(!$user->hasPermission("admin")){
	Redirect::to("index.php");
}
$_db = DB::getInstance();
$group = '0';
$notVerified = null;
if($user->isLoggedIN() && $user->hasPermission("admin")){
	$notVerified = $_db->isVerified();
	//var_dump($notVerified);
	?>
	

	
<table border="1" cellpadding="10">

<br><br>
	<tr>
		<td style='width:80px;text-align:center;'>ID</td>
		<td style='width:80px;text-align:center;'>User Name</td>
		<td style='width:200px;text-align:center;'>Name</td>
		<td style='width:200px;text-align:center;'>Joined</td>
		<td style='width:80px;text-align:center;'>Mobile</td>
		<td style='width:200px;text-align:center;'>EMail</td>
		<td style='width:80px;text-align:center;'>Roll</td>
		<td style='width:100px;text-align:center;'>Department</td>
		<td style='width:100px;text-align:center;'>Status</td></tr>
		
		
	<?php
	foreach ($notVerified as $row) {
		echo "<tr><td style='text-align:center;'>".$row->id."</td>";
		echo "<td style='text-align:center;'>".$row->username."</td>";
		echo "<td style='text-align:center;'>".$row->name."</td>";
		echo "<td style='text-align:center;'>".$row->joined."</td>";
		echo "<td style='text-align:center;'>".$row->mobile."</td>";
		echo "<td style='text-align:center;'>".$row->email."</td>";
		if($row->roll){
			echo "<td style='text-align:center;'>".$row->roll."</td>";
		}else{
			echo "<td>". null ."</td>";
		}
		if($row->department){
			echo "<td style='text-align:center;'>".$row->department."</td>";
			echo "<td style='color:red';>". "Faculty Member" ."</td></tr>";
		}else{
			echo "<td>". null ."</td>";
			echo "<td style='text-align:center;'>". "Student" ."</td></tr>";
		}
		
	}
	echo '</table>';
	if(Input::exists()){
		if(Token::check(Input::get('token'))){
			$validate = new Validate();
        	$validation = $validate->check($_POST, array(

            	'id' => array(
                	'required' => true
            		),
            	'group' => array(
                	'required' => true
            		),

        	));
        	if ($validate->passed()){
        		if(!$_db->verify(Input::get('id'),Input::get('group'))){
        			throw new Exception("ADMIN_VARIFY");
        		}
        		echo '<meta http-equiv="refresh" content="0">';
        	} else {
            	foreach ($validate->errors() as $error) {
                	echo $error . "<br>";
            	}
        	}
		}
	}
	
}else{
	Redirect::to('index.php');
}

?>
<div class="design" style="width: 550px; height:380px; margin-top:50px; margin-left:375px; border-top:1px solid orange; border-bottom:1px solid orange; border-right:1px solid orange; border-left: 1px solid orange; border-radius: 10px;" >

<br><br> <h4  style="text-align:center; color:#6B87B2">Varify Account :  (1) For Student (2) For Faculty </h4> <br>
<div id = "alignment">
<form action="" method="post">

    <div class="field">
        <label for="id">ID &nbsp &nbsp &nbsp &nbsp  </label>
        <input type="text" name="id" style="height:35px; width: 180px;border-radius: 4px;" value="<?php echo escape(Input::get('id')); ?>" id="id">
    </div> <br>
    <div class="field">
        <label for="group">Group</label>
        <input type="text" name="group" style="height:35px; width: 180px;border-radius: 4px;" value="<?php echo escape(Input::get('group')); ?>" id="group">
    </div> <br>

    <input type="hidden" name="token" style="height:35px; width: 180px;border-radius: 4px;" value="<?php echo Token::generate(); ?>">
    <input type="submit" style="width:100px; height: 40px; background-color:#6B87B2; color:#FFFFFF; border-radius:10px" value="Varify">
</form></div>
</div>

<div id="blank_space"> </div>
</body>
</html>

<?php
  require_once 'Footer.php';  
?>
<?php
    ob_end_flush(); // Flush the output from the buffer
?>

