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
/* CSS used here will be applied after bootstrap.css */

body { 
 background: url('i2.jpg') no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}

.panel-default {
 opacity: 0.9;
 margin-top:30px;
}
.form-group.last {
 margin-bottom:0px;
}
</style>
</head>
<body>
<?php
    ob_start(); // Initiate the output buffer
?>

<?php

require_once 'core/init.php';

if (Input::exists()) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'name' => array(
                'name' => 'Name',
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'username' => array(
                'name' => 'Username',
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'password' => array(
                'name' => 'Password',
                'required' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            ),
            'roll' => array(
                'required' => true,
                'integer' => TRUE
            ),
            'mobile' => array(
                'required' => true,
                'integer' => TRUE
            ),
            'email' => array(
                'required' => true,
            )
             
        ));

        if ($validate->passed()) {
            $user = new User();//checked
            if($user->isLoggedIn()){
                $user->logout();
                $user = new User(); 
            }
            $salt = Hash::salt(32);

            try {
                $user->create(array(
                    'name' => Input::get('name'),
                    'username' => Input::get('username'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt,
                    'joined' => date('Y-m-d H:i:s'),
                    'group' => 0,
                    'roll' => Input::get('roll'),
                    'mobile' => Input::get('mobile'),
                    'email' => Input::get('email'),
                  
                    
                ));

                Session::flash('home', 'Welcome ' . Input::get('username') . '! Your account has been registered. Admin must varify it before you may log in.');
                Redirect::to('index.php');
            } catch(Exception $e) {
                echo $e, '<br>';
            }
        } else {
            foreach ($validate->errors() as $error) {
                echo $error . "<br>";
            }
        }
    }
}
?>
     <div class="container"> 
<div id="signupbox" style="display:; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php" onclick="login.php">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal"method="post" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                  
                                 
                                    
                                <div class="form-group">
                                    <label for="Your Name" class="col-md-3 control-label">Your Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"value="<?php echo escape(Input::get('name')); ?>" placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="name"name="username" value="<?php echo escape(Input::get('username'));?>"   placeholder="User Name" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email"  value="<?php echo escape(Input::get('email')); ?>" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="password"  value="<?php echo escape(Input::get('password')); ?>"placeholder= "Password" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="Confirm Password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password_again" id="password_again"  value="<?php echo escape(Input::get('password_again')); ?>"placeholder= "Password_Again" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="Roll" class="col-md-3 control-label">Ruet Id</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control"  name="roll" id="roll"  value="<?php echo escape(Input::get('roll')); ?>"placeholder= "Roll" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="Mobile" class="col-md-3 control-label">Mobile No.</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" id="mobile"  value="<?php echo escape (Input::get('mobile')); ?>"placeholder= "Mobile No." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                      <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
   
									   <button id="btn-signup" type="submit" value="Register"class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up
									     </button>
                                        <span style="margin-left:8px;"></span>  
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
	 
        
         
    </div>
    
</body>
</html>
<?php
    ob_end_flush(); // Flush the output from the buffer
?>