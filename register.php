<!--

            Display page.
            Need designing.
            
-->

<html>
<head>
	<title>Registration</title>
	 	 
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


	 
	 
		 
<style>
  
	#alignment{
		margin:0px;
		padding:0px;
    width : 100%;
    height :auto;
	text-align:;
	margin-left:500px;
	padding-top:50px;
  
	
	}
		.register{
			background:#339966;
			margin:0px;
			padding:0px;
			width:100%;
			height:auto:
	 
		}
	 
	.form-group{
		margin-left:px;
	 
	}
	
input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
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
 <div class="register">
<div id="alignment">

 
<form action="" method="post">
 <div class="form-group">
	<label for="name" class="control-label">Your Name</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
	 <input type="text" name="name" value="<?php echo escape(Input::get('name')); ?>" id="name" placeholder="Enter Your Name" required>
    </div>
								</div>
								
							
						
         
	
	 <div class="form-group">
	<label for="name" class="control-label">User Name</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
	 <input type="text" name="username" id="username"  value="<?php echo escape(Input::get('username'));?>"placeholder= "User Name" required>
    </div>
								</div>
								
								 <div class="form-group">
	<label for="name" class="control-label">E_mail</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
	 <input type="email" name="email" id="email"  value="<?php echo escape(Input::get('email')); ?>"placeholder= "Email ID:" required>
    </div>
								</div>
  <div class="form-group">
	<label for="name" class="control-label">Password</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
	 <input type="password" name="password" id="password"  value="<?php echo escape(Input::get('password')); ?>"placeholder= "Password" required>
    </div>
								</div>
								
	

      <div class="form-group">
	<label for="name" class="control-label">Password_Again</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
	 <input type="password" name="password_again" id="password_again"  value="<?php echo escape(Input::get('password_again')); ?>"placeholder= "Password_Again" required>
    </div>
								</div>
   
 <div class="form-group">
	<label for="name" class="control-label">ROLL</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-info fa" aria-hidden="true"></i></span>
	 <input type="number" name="roll" id="roll"  value="<?php echo escape(Input::get('roll')); ?>"placeholder= "Roll" required>
    </div>
								</div>
   
	 <div class="form-group">
	<label for="name" class="control-label">Mobile</label>
		
		<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
	 <input type="number" name="mobile" id="mobile"  value="<?php echo escape (Input::get('mobile')); ?>"placeholder= "Mobile No." required>
    </div>
								</div>

   
	 
  
	  
    

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Register">
	</div>
</form>


</div>


 


 

<?php
require_once 'Footer.php';
?>

</body>
</html>
<?php
    ob_end_flush(); // Flush the output from the buffer
?>
