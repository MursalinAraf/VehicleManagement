
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
<style>
	#blank_space{
    width : 100%;
    height : 340px;
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



$user = new User();

if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
}

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'current_password' => array(
                'required' => true,
                'min' => 6
            ),
            'new_password' => array(
                'required' => true,
                'min' => 6
            ),
            'new_password_again' => array(
                'required' => true,
                'min' => 6,
                'matches' => 'new_password'
            )
        ));
    }

    if($validate->passed()) {
        if(Hash::make(Input::get('current_password'), $user->data()->salt) !== $user->data()->password) {
            echo 'Your current password is wrong.';
        } else {
            $salt = Hash::salt(32);
            $user->update(array(
                'password' => Hash::make(Input::get('new_password'), $salt),
                'salt' => $salt
            ));

            Session::flash('home', 'Your password has been changed!');
            Redirect::to('index.php');
        }
    } else {
        foreach($validate->errors() as $error) {
            echo $error, '<br>';
        }
    }
}
?>
<div id="alignment" style="margin-bottom=50px;">
<form action="" method="post" style="width: 550px; height:500px; margin-top:50px; margin-left:375px; border-top:1px solid orange; border-bottom:1px solid orange; border-right:1px solid orange; border-left: 1px solid orange; border-radius: 10px;">
	
	<br><br>

	<h4 style="color:#6B87B2">Change Your Password Here</h4>
	<br><br>
    <div class="field">
		
        <input type="password" name="current_password" id="current_password" placeholder="Current Password" style="height:35px; width: 180px;border-radius: 4px;" required>
    </div> <br>

    <div class="field">
        
        <input type="password" name="new_password" id="new_password" placeholder="New Password" style="height:35px; width: 180px;border-radius: 4px;" required>
    </div><br>

    <div class="field">
        <input type="password" name="new_password_again" id="new_password_again" placeholder="New Password Again" style="height:35px; width: 180px;border-radius: 4px;" required>
    </div><br><br>

    <input type="hidden" name="token" id="token" value="<?php echo escape(Token::generate()); ?>">
    <input type="submit" style="width:190px; height: 40px; background-color:#6B87B2; color:#FFFFFF; border-radius:10px" value="Change Password">
</form>

</div>

<div id = 'blank_space'>
</div>

<br><br><br><br><br><br>
<?php
require_once 'footer.php';
?>


</body>
</html>

<?php
    ob_end_flush(); // Flush the output from the buffer
?>