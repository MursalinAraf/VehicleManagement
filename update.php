<!--

            Display page.
            Need designing.
            
-->

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	<style>
 		.login{
		/*background-color:#336699;*/
			  height :400px;
		  	margin:0px;
		  	padding:0px;
		}

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

			$_caseFactor = 0;

			$user = new User();

			if($user->hasPermission('faculty')){
    			$_caseFactor = 1;
			} else if ($user->hasPermission('admin')){
    			$_caseFactor = 2;
			}

			if(!$user->isLoggedIn()) {
    			Redirect::to('index.php');
			}

			if(Input::exists()) {
    			if(Token::check(Input::get('token'))) {
        			$validate = new Validate();
        			$validation = $validate->check($_POST, array(
            			'name' => array(
                		'required' => true,
                		'min' => 2,
                		'max' => 50
            		),
            			'roll' => array(
                		'integer' => TRUE
            		),
            			'mobile' => array(
                		'required' => true,
                		'integer' => TRUE
            		),
            			'email' => array(
                		'required' => true,
            		),
            			'address' => array(
                		'required' => true,
            		)
        		));

        	if($validate->passed()) {
            	try {
                	$user->update(array(
                    	'name' => Input::get('name'),
                    	'roll' => Input::get('roll'),
                    	'mobile' => Input::get('mobile'),
                    	'email' => Input::get('email'),
                    	'address' => Input::get('address'),
                    
                	));

                	Session::flash('home', 'Your details have been updated.');
                	Redirect::to('index.php');

            	} catch(Exception $e) {
                die($e->getMessage());
            	}
        	} else {
            	foreach($validate->errors() as $error) {
                	echo $error, '<br>';
            	}
        	}
    		}
		}
	?>
<div class="login">
<div id="alignment">

<form action="" method="post" style="width: 550px; height:500px; margin-top:50px; margin-left:375px; border-top:1px solid orange; border-bottom:1px solid orange; border-right:1px solid orange; border-left: 1px solid orange; border-radius: 10px;">
<br><br><br>
	<h4 style="color:#6B87B2">Please Fill Up The Following Fields</h4>
    <div class="field">
        <br><br><label for="name">Name</label>
        <input type="text" name="name" style="height:35px; width: 180px;border-radius: 4px;" value="<?php echo escape($user->data()->name); ?>">
    </div><br>
    
    <?php
        if($_caseFactor === 1){
            //department

            echo '<div class="field">';
                echo '<label for="department">Department</label>';
                echo '<input type="text" name="department" value="' . escape($user->data()->department) . '">';
            echo '</div>';
            

       } else if ($_caseFactor === 0){
            //roll
            echo '<div class="field">';
                echo '<label for="roll">Roll</label>';
                echo '<input type="number" name="roll" value="' . escape($user->data()->roll) . '">';
            echo '</div>';


        }
    ?>

    
    <div class="field">
        <label for="mobile">Mobile</label>
        <input type="number" name="mobile" style="height:35px; width: 180px;border-radius: 4px;" value="<?php echo escape($user->data()->mobile); ?>">
    </div> <br>
    
    <div class="field">
        <label for="email">Email</label>
        <input type="email" name="email" style="height:35px; width: 180px;border-radius: 4px;" value="<?php echo escape($user->data()->email); ?>">
    </div> <br>
    
    <div class="field">
        <label for="address">Address</label>
        <input type="text" name="address" style="height:50px; width: 210px;border-radius: 4px;" value="<?php echo escape($user->data()->address); ?>">
    </div> <br><br>
    
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" style="width:100px; height: 40px; background-color:#6B87B2; color:#FFFFFF; border-radius:10px" value="Update"> <br><br>
</form>
</div>
</div>

<br><br><br><br><br><br>
<?php
require_once 'footer.php';
?>
</body>
</html>
