<!--

            Display page.
            Need designing.
            
-->
<html>
    <head>
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
        <style >
            #alignment{
    width : 100%;
    height : 300px;
	text-align:center;
	background-color:;
	}
	.login{
		/*background-color:#336699;*/
		  height :400px;
		  margin:0px;
		  padding:0px;
	}
	.logd{
		background-color:;
		float:left;
		padding-top:0px;
	}

	

	.lodg ul li a:hover{
	
	background-color:#BBD670
}


	.loginf{
		background-color:;
		  height :;
		  margin-left:300px;
		  margin-top:0px;
	}
	.hello{
		width:100%;
		color:orange;
		padding-top:30px;
		 margin-left:0px;
		 float:left;
	}
	.hello {
		color:orange;
		 margin-top:20px;
		 margin-left:150px;
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
        if (Session::exists('home')) {
            echo '<p>' . Session::flash('home') . '</p>';
        }

        $user = new User(); //Current
        $message = new Message();

        if ($user->isLoggedIn()) {
            ?>
            <div class="login">
                <div class="loginf">

                    <div class="hello"> <p><big>Hello, </big><big><a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a></big><big> You are Logged in</big></p>
                    </div>
                    <div class="logd">


                        <?php
                        if (!$user->hasPermission('admin'))
                            echo '<h4 style="display:block;border-bottom:1px solid #ddd;font-size:20px;color:orange; padding: 3px;"><a href="reservation_user.php">Rservation form</a></h4>';
                        echo '<h4 style="display:block;border-bottom:1px solid #ddd;font-size:20px;color:orange; padding: 3px;"><a href="application_list_user.php">My applications</a></h4>';
                        if ($user->hasPermission('admin') || $user->hasPermission('dept_head') || $user->hasPermission('branch_officer')) {
                            echo '<h4 style="display:block;border-bottom:1px solid #ddd;font-size:20px;color:orange; padding: 3px;"><a href="application_list.php">Applications for Rservation</a></h4>';
                        }
                        ?> 
 <h4 style="display:block;border-bottom:1px solid #ddd;color:orange;font-size:px; padding: 3px;"><a href="update.php">Update Profile</a></h4>
 <h4 style="display:block;border-bottom:1px solid #ddd;color:orange; padding: 3px;"><a href="changepassword.php">Change Password</a></h4>

                        <h4 style="display:block;border-bottom:1px solid #ddd;color:orange; padding: 3px;"><a href="logout.php">Log out</a></h4>


    <?php
    if ($user->hasPermission('faculty')) {
        echo '<p>Faculty member!</p>';
    } else if ($user->hasPermission('admin')) {
         ?><li style="display:block;border-bottom:1px solid #ddd;padding: 3px;"><a href="admin.php" style="color:#454CCE;font-size:20px;text-decoration:none;">Varify Account</a></li>
        	</ul><?php
    }
} else {

    echo '<div id="alignment">';
    echo '<h4 style="display:block;font-size:25px;color:; padding: 3px;"> <br> <br> <br> <br> <br> <br> You need to <a href="login.php">Login</a> or <a href="register.php">Register.</a></h4>';
    echo "</div>";
}
?>
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